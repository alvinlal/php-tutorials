<?php

$stringOne = 'my email is ';
$stringTwo = 'mario123@thenetninja.co.uk';

$name = 'mario';

echo $name, "\n", $stringOne, " ", $stringTwo, "\n";

echo "$name has ", strlen($name), " characters \n";

echo strtoupper($name);
echo "\n";
echo str_replace('m', 'w', $name);

echo "\nThe 3rd character of $name is $name[3]";