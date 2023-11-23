<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::firstOrCreate(
            ['client_id' => '4evermemorial-app-mobile'],
            ['client_secret' => 'NGV2ZXJtZW1vcmlhbC1hcHAtbW9iaWxlOk5HVjJaWEp0WlcxdmNtbGhiQzFoY0hBdGJXOWlhV3hs']
        );
    }
}
