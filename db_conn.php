<?php

$sname= "localhost";
$unmae= "shiva";
$password = "Fustrated_Engineer";

$db_name = "green_store";

$conn = mysqli_connect($sname, $unmae, $password, $db_name,3307);

if (!$conn) {
	echo "Connection failed!";
}
?>