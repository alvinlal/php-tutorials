<?php

$conn = mysqli_connect("localhost", "alvin", "alvin123", "users");

if (!$conn) {
	echo "error connecting to database " . mysqli_connect_error();
}