<?php

namespace PHPCrashService;

class Responder
{
    public function responderSetting($name, $env, $debug, $url)
    {
        $response = new \stdClass();
        $response->name = $name;
        $response->env = $env;
        $response->debug = $debug;
        $response->url = $url;

        return [
            'code' => '0x0000',
            'message' => $response
        ];
    }

    public function responderHeartbeat()
    {
        return [
            'code' => '0x0000',
            'message' => date('Y-m-d H:i:s')
        ];
    }
}
