<?php

require "../vendor/autoload.php";

$responder = new \PHPCrashService\Responder();

header('Content-Type: application/json');
echo json_encode($responder->responderHeartbeat());