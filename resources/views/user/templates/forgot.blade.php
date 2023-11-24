<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Loving Memory - Memorial Website Invite</title>
    <style>
        /* Add inline styles here */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background: url("{!!$details['base_url']!!}/public/images/headerimage.jpg") no-repeat;
            /* background: url(https://stagging.hatinco.com/4_ever_memories/public/images/headerimage.jpg) no-repeat; */
            background-size: cover;
        }

        .header {
            background: url("{!!$details['base_url']!!}/public/images/headerimage.jpg") no-repeat;
            /* background: url(https://stagging.hatinco.com/4_ever_memories/public/images/headerimage.jpg) no-repeat; */
            background-size: cover;
            color: #fff !important;
            padding: 20px !important;
            text-align: center !important;
            border-top-left-radius: 10px !important;
            border-top-right-radius: 10px !important;
        }

        .header h1 {
            margin: 0;
            color: #fff !important;

        }

        .invitation {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .invitation p {
            margin: 0;
        }

        .memorial-link {
            display: inline-block;
            padding: 12px 24px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            font-size: 18px;
            transition: background-color 0.3s ease;
            margin: 20px 0px;
        }

        .memorial-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header" style=" color: #fff; text-align: center;  border-top-left-radius: 10px; border-top-right-radius: 10px; ">
            <h1>Password update</h1>
        </div>
        <div class="invitation">
            <p>Dear {{ $details['name'] }},</p>
            <p>Your new password for {{ $details['email']}} is {{$details['new_password']}}.</p>
        </div>
    </div>
</body>

</html>
