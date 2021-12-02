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

        'client_id' => '13016305993-ot46tmpm4s73vdh4086m7s3e4kuuprpp.apps.googleusercontent.com',
    
        'client_secret' => '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',
    
        'redirect' => 'http://127.0.0.1:8000/callback/google',
    
      ], 
      'github' => [

        'client_id' => 'a72fc9023dad20e4fd24',
    
        'client_secret' => '0e83b2b8437b0c24dc78327fd37647c341e7f2c9',
    
        'redirect' => 'http://127.0.0.1:8000/callback/github',
    
      ], 
    

];
