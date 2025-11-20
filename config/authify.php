<?php

// config for ZarulZubir/Authify
return [
    'url' => env('AUTHIFY_URL', 'https://authify.prooffice.com.my'),
    'client_id' => env('AUTHIFY_CLIENT_ID'),
    'client_secret' => env('AUTHIFY_CLIENT_SECRET'),
    'default_provider' => env('AUTHIFY_DEFAULT_PROVIDER', 'waba'),
];
