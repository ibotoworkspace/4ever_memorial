<?php

namespace App\Http\Middleware;

use App\Exceptions\UnAuthorizedRequestException;
use App\Libraries\APIResponse;
use Illuminate\Support\Facades\Request;
use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class AccessTokenLogin
{
    use APIResponse;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    	$response = $this->validateToken($request, $next);
        return $response;
    }
    
    /**
     * Validate token
     * 
     * @param mixed $request
     * @throws UnAuthorizedRequestException
     * @return \Illuminate\Http\Request
     */
    protected function validateToken($request, Closure $next) {
        
        $user = Auth::user();
        if($user){
            $request->attributes->add(["user" => $user]);
            return $next($request);
        }
        $headers = Request::header();
        $authorization_header = $headers['Authorization'] ?? $headers['authorization']??null;
        $authorization_header = $authorization_header ?? $headers['Authorization-secure']?? $headers['authorization-secure']??null;
        $access_token = str_replace("Bearer ", "", $authorization_header);
        if(!isset($access_token) || $access_token == ""){
            $access_token = $request->access_token;
        }
        if ($access_token) {
            
            $user = User::
            where('access_token', $access_token)->first();
            // dd($access_token);
            if ($user) {
                $request->attributes->add(["user" => $user]);
                Auth::login($user);
        
                
                return $next($request);
            }
        }
        if ($request->method() === 'GET') {
            return $next($request);
        }
    
        // Check if the request is a POST request
        if ($request->method() === 'POST') {
           $client = $this->sendResponse(
            Config::get('error.code.UNAUTHORIZED_REQUEST'),
            [],
            ['Please login'],
            Config::get('error.code.UNAUTHORIZED_REQUEST')
        );

        return response($client);
        }

        
        
    }
}
