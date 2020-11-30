<?php

require "../vendor/autoload.php";

$triggered = new \PHPCrashService\Triggered();

set_error_handler(function($errno, $errstr, $errfile, $errline ){
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
});

try{
    $a = $a + $b;
}catch(Exception $error){
    print_r($triggered->triggeredCrash(
        '99ed30f9-bc04-4134-8cb3-40050eea10d2',
        'dohlhMJQrjATpZwLXavi6U/lkYy+3LQemN/3dXhbmGY=',
        'd1e51624-1db4-4acc-948d-0354c62640cb',
        $error->getCode(),
        $error->getMessage(),
        $error->getFile(),
        $error->getLine(),
        $error->getTraceAsString(),
        'Request',
        'Error'
    ));
}

