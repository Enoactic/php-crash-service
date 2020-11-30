<?php

require "../vendor/autoload.php";

$triggered = new \PHPCrashService\Triggered();

print_r($triggered->triggeredKeepalive(
    '99ed30f9-bc04-4134-8cb3-40050eea10d2',
    'dohlhMJQrjATpZwLXavi6U/lkYy+3LQemN/3dXhbmGY=',
    'd1e51624-1db4-4acc-948d-0354c62640cb',
    'Web Application Still Alive'));
