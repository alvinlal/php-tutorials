<?php

	if (isset($_POST['submit'])) {

		setcookie("gender", $_POST['gender'], time() + 86400);

		header('Location:index.php');
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
        <input type="text" name="name">
        <input type="submit" name='submit' value="submit">
        <select name="gender">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
    </form>
</body>

</html>