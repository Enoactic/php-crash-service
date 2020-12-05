<?php

require "../vendor/autoload.php";

$triggered = new \PHPCrashService\Triggered();

print_r($triggered->triggeredKeepalive(
    'a054d124-7fd1-4528-9e76-2aaabb69b619',
    'F/fjKhEt0T55O1cNrAGuwlLylCLx1g5qE/hOtOoZ2bQ=',
    '49603f4e-949e-48e8-b8d2-bf6191e45c23',
    'Web Application Still Alive'));
