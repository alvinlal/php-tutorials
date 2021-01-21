<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {

	$conn = mysqli_connect('localhost', 'alv', 'alvin123', 'ninja_pizza');

} catch (mysqli_sql_exception $e) {
	echo "error connecting to database";
}

?>