<?php

include 'vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

apache_setenv("TEST_ENV", "hello123");

echo apache_getenv("TEST_ENV") . '</br>';

echo $_ENV['S3_BUCKET'] . '</br>';
echo $_SERVER['S3_BUCKET'];