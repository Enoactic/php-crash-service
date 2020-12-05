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
        'a054d124-7fd1-4528-9e76-2aaabb69b619',
        'F/fjKhEt0T55O1cNrAGuwlLylCLx1g5qE/hOtOoZ2bQ=',
        'd1a911d0-5912-46cc-8acd-b758e98ff3bd',
        $error->getCode(),
        $error->getMessage(),
        $error->getFile(),
        $error->getLine(),
        $error->getTraceAsString(),
        'Request',
        'Error'
    ));
}

