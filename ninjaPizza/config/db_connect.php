<?php

$conn = mysqli_connect("localhost", "alvin", "alvin123", "ninja_pizza");

if (!$conn) {
	echo 'db connection error: ' . mysqli_connect_error();
}

?>