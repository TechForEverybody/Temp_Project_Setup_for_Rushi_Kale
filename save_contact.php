<?php

session_start();
include "db_conn.php";
$email = $_GET['email'];
$name = $_GET['name'];
$subject = $_GET['subject'];
$message = $_GET['message'];

$sql = "INSERT INTO `contact` (`email`, `name`, `subject`, `message`) VALUES ('$email', '$name', '$subject', '$message');";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: index.php?success=Message sent successfully");
} else {
    header("Location: contact_page.php");
}
?>