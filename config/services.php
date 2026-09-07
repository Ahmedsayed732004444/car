<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'oto' => [
        'url' => env('OTO_API_URL', 'https://api.tryoto.com/rest/v2'),
        'refresh_token' => env('OTO_REFRESH_TOKEN', 'AMf-vBwsG7J61J_1EkBNW_wnKdQc4Xyalpz59J1QittknHfsekYzdv-1sDxoeD1oaw5_OBxmnVtjkwzm7nAUsfkEZoZpmMQtAINMhJLIWxAiJ1xnX9IY4ksBrIGoiGFG1ULhV8nT-a7ucNxD28bjK-cf6bOPEVWYpVDdQToxKpvgEXp2yQTujA3HT5XMIo_x31f1k6I41WA3pdKzsrwSCU_NQSijp1oBxQ'),
        'access_token' => env('OTO_ACCESS_TOKEN'),
    ],

];
