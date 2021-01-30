<?php

	include 'mysql_connection.php';
	$firstName = '';
	$lastName = '';
	if ($_SERVER['QUERY_STRING']) {
		$username = $_SERVER['QUERY_STRING'];

		//create a template
		$sql = 'SELECT firstName,lastName FROM users WHERE uid =?';
		//init prepared statment
		$stmt = mysqli_stmt_init($conn);
		//prepare prepared statement
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			echo "Error executing SQL statement";
		} else {
			//bind params to prepared statement with data if no error
			mysqli_stmt_bind_param($stmt, "s", $username);
			//execute statement;
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);

			$rows = mysqli_fetch_assoc($result);
			$firstName = $rows['firstName'];
			$lastName = $rows['lastName'];

		}
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo $firstName . "<br>"; ?>
    <?php echo $lastName . "<br>"; ?>




</body>

</html>