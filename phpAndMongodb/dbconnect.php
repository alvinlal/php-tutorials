<?php

require_once 'vendor/autoload.php';

$employeeCollection = (new MongoDB\Client)->company->employees;