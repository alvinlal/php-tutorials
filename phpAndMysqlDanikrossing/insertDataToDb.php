<?php

	include_once 'mysql_connection.php';
	$success = false;
	if (isset($_POST['submit'])) {
		$firstName = $_POST['first'];
		$lastName = $_POST['last'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		// echo $firstName . '<br>';
		// echo $email . '<br>';
		// echo $username . '<br>';
		// echo $lastName . '<br>';
		// echo $password . '<br>';

		$sql = "insert into users (firstName,lastName,email,uid,pwd) values ('$firstName','$lastName','$email','$username','$password');";
		if (mysqli_query($conn, $sql)) {
			$success = true;
		} else {
			echo 'query error: ' . mysqli_error($conn);
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