<?php

$peopleAge = [1, 2, 3, 4];
$peopleAge2 = [5, 6, 7, 8];
$peopleAge3 = array_merge($peopleAge, $peopleAge2);

print_r($peopleAge);
print_r($peopleAge2);

$peopleAge[] = 5;

echo count($peopleAge);

echo "\nThe merged array is: ";

print_r($peopleAge3);

array_push($peopleAge3, 9);

//associative arrays;

$ninjasOne = [
	'shaun' => 'black',
	'mario' => 'orange',
	'luigi' => 'brown',
];

$ninjasOne['peach'] = 'pink';

print_r($ninjasOne);