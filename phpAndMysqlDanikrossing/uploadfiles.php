<?php
	$success = false;
	if (isset($_POST['submit'])) {
		$fileTypes = ['jpg', 'jpeg', 'png'];
		$tmpFileLocation = $_FILES['file']['tmp_name'];
		$fileName = $_FILES['file']['name'];
		$fileError = $_FILES['file']['error'];
		$fileSize = $_FILES['file']['size'];
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		if (in_array($fileActualExt, $fileTypes)) {
			if ($fileError === 0) {
				if ($fileSize < 10000000) {
					$uploadName = uniqid('', true) . "." . $fileActualExt;
					$uploadDestination = "uploads/$uploadName";
					move_uploaded_file($tmpFileLocation, $uploadDestination);
					$success = true;
				} else {
					echo "file size is too big" . "<br>";
				}
			} else {
				echo "There was an error uploading your file!" . "<br>";
			}
		} else {
			echo "file type not supported" . "<br>";
		}

}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <p><?php echo $success ? "file uploaded succesfully!" : "" ?></p>
</body>

</html>