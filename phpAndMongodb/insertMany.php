<?php

include 'dbconnect.php';

$result = $employeeCollection->insertMany([
	[
		'name' => 'john',
		'designation' => 'devops engineer',
		'age' => 22,
		'salary' => 600000,
	],
	[
		'name' => 'jane',
		'designation' => 'ui designer',
		'age' => 22,
		'salary' => 500000,
	],
]);

var_dump($result->getInsertedIds());