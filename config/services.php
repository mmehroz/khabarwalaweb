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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '823876436375-pau0oetsesuv0svfs2rse23r99q0uo50.apps.googleusercontent.com',
        'client_secret' => 'im8UrFvTZ4yzf0xR6PNRYqz9',
        'redirect' => 'http://localhost/khabarwala/callback/google',
    ],
    'facebook'      => [
        'client_id'     => '955132594994952',
        'client_secret' => '479154bfb035b0262b7511d57eeebe81',
        'redirect'      => 'http://localhost/khabarwala/callback/facebook',
    ],

];
