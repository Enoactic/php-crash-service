<?php

namespace PHPCrashService;

class Triggered
{
    public function triggeredCrash($client_id, $client_secret, $uuid, $code = null, $message = null, $file = null, $line = null, $stack_trace = null, $request = null, $remark = null)
    {
        $client = new \GuzzleHttp\Client;
        $tokenResponse = $client->request('POST','https://develop.crash.com:8890/oauth/token', [
            'http_errors' => false,
            'verify' => false,
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => $client_id,
                'client_secret' => $client_secret,
                'scope' => '',
            ],
        ]);

        $token = json_decode((string) $tokenResponse->getBody(), true)['access_token'];

        $client = new \GuzzleHttp\Client();
        $crashResponse = $client->request('POST', 'https://develop.crash.com:8890/api/crash', [
            'http_errors' => false,
            'verify' => false,
            'form_params' => [
                'uuid' => $uuid,
                'code' => $code,
                'message' => $message,
                'file' => $file,
                'line' => $line,
                'stack_trace' => $stack_trace,
                'request' => $request,
                'remark' => $remark
            ],
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '.$token
            ],
        ]);

        return json_decode((string) $crashResponse->getBody(), true);
    }

    public function triggeredKeepalive($client_id, $client_secret, $uuid, $message = null)
    {
        $client = new \GuzzleHttp\Client;
        $tokenResponse = $client->request('POST','https://develop.crash.com:8890/oauth/token', [
            'http_errors' => false,
            'verify' => false,
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => $client_id,
                'client_secret' => $client_secret,
                'scope' => '',
            ],
        ]);

        $token = json_decode((string) $tokenResponse->getBody(), true)['access_token'];

        $client = new \GuzzleHttp\Client();
        $keepaliveResponse = $client->request('POST', 'https://develop.crash.com:8890/api/keepalive', [
            'http_errors' => false,
            'verify' => false,
            'form_params' => [
                'uuid' => $uuid,
                'message' => $message,
            ],
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '.$token
            ],
        ]);

        return json_decode((string) $keepaliveResponse->getBody(), true);
    }
}
