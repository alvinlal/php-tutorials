<?php

$file = 'quotes.txt';

$handle = fopen($file, 'r');

// echo fread($handle, filesize($file));

// echo fread($handle, 112);

// echo fgets($handle);
// echo fgets($handle);

// echo fgetc($handle);
// echo fgetc($handle);

// $handle = fopen($file, 'r+');
$handle = fopen($file, 'a+');

fwrite($handle, "\nEverything popular is wrong.");

fclose($handle);

// unlink($file); deletes file
?>