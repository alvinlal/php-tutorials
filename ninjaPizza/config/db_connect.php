<?php

$conn = mysqli_connect("localhost", "alvin", "test1234", "ninja_pizza");

if (!$conn) {
 echo 'db connection error: ' . mysql_connect_error();
}

?>