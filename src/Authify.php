<?php

namespace ZarulZubir\Authify;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Authify
{
    public function authenticate()
    {
        return Cache::remember('authify_bearer_token', 31536000, function () {
            $response = Http::post(config('authify.url').'oauth/token', [
                'client_id' => config('authify.client_id'),
                'client_secret' => config('authify.client_secret'),
                'grant_type' => 'client_credentials',
            ]);

            return $response->json('access_token');
        });
    }

    public function sendMessage($code, $text, $receiverNumber, $provider)
    {
        $response = Http::withToken($this->authenticate())
            ->post(config('authify.url').'/api/messages', [
                'code' => $code,
                'text' => $text,
                'receiver_number' => $receiverNumber,
                'provider' => $provider,
            ]);

        return $response->json();
    }
}
