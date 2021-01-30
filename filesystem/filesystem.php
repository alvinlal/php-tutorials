<?php

$file = 'readme.txt';

if (file_exists($file)) {
	echo readfile($file) . '<br/>';

	copy($file, 'quotes.txt');

	echo realpath($file) . '<br/>';

	echo filesize($file) . '<br/>';

} else {
	echo 'file does not exist';
}

?>