<?php

include 'dbconnect.php';

$result = $employeeCollection->insertOne([
	'name' => 'alvin',
	'age' => 20,
	'designation' => 'lead developer',
	'salary' => 500000,
]);

print_r($result->getInsertedCount());