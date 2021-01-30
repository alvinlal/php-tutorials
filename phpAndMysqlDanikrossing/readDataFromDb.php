<?php

	include_once 'mysql_connection.php';

	$users = '';

	$sql = "SELECT * FROM users;";

	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
    <h1>The users in the db are: </h1>
    <?php foreach ($users as $user): ?>
    <div style="padding:10px;height:40px;width:auto;background:coral;margin:10px;"><?php echo $user['uid'] ?></div>
    <?php endforeach?>
</body>

</html>