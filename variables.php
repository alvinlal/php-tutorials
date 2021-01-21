<?php

	define('MESSAGE2', 'world');

	$message1 = "hello";
	$name = "alvin";
	$age = 19;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $message1, MESSAGE2 ?></h1>
    <p><?php echo "name:", $name ?>
    <p><?php echo "age:", $age ?>

</body>

</html>