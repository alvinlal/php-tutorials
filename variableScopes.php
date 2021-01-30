<?php

$name = 'mario';
$name2 = 'jane';

function sayHello() {
	global $name;
	$name = 'peach';
	echo "hello $name";
}

sayHello();

echo "\n$name";

function sayHai($name) {
	$name = 'john';
	echo "\nHai $name";
}

sayHai($name2);
echo "\n$name2";

function sayBie(&$name) {
	$name = 'millie';
	echo "\nBie $name";
}

sayBie($name2);
echo "\n$name2";