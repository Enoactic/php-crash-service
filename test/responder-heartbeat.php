<?php

require "../vendor/autoload.php";

$responder = new PHPCrashService\Responder();

http_response_code(200);
header('Content-Type: application/json');
echo json_encode($responder->responderHeartbeat());