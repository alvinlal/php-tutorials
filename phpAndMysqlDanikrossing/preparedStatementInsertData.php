<?php

	include 'mysql_connection.php';
	$success = false;
	if (isset($_POST['submit'])) {
		$firstName = mysqli_real_escape_string($conn, $_POST['first']);
		$lastName = mysqli_real_escape_string($conn, $_POST['last']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		// create sql statement
		$sql = "insert into users (firstName,lastName,email,uid,pwd) values (?,?,?,?,?);";
		// init prepared statment with connection;
		$stmt = mysqli_stmt_init($conn);
		//
		if (mysqli_stmt_prepare($stmt, $sql)) {
			mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email, $username, $password);
			mysqli_stmt_execute($stmt);
			$success = true;
		} else {
			echo "error inserting data" . "<br/>";
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
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="first" placeholder="firstname">
        <input type="text" name="last" placeholder="lastname">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="password" placeholder="password">
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <p><?php echo $success ? "data inserted successfully" : "insert data" ?></p>
</body>

</html>