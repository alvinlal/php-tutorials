<?php

include 'vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo $_ENV['S3_BUCKET'];
echo $_SERVER['S3_BUCKET'];