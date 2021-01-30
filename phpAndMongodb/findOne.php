<?php

include 'dbconnect.php';

$result = $employeeCollection->findOne([
	'name' => 'alvin',
]);

var_dump($result);