<?php
session_start();
include($_SERVER["DOCUMENT_ROOT"] ."./db_conn.php");

echo "hello";
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $name=$_GET['name'];
    $email=$_GET['email'];
    $phone=$_GET['phone'];
    $desc=$_GET['desc'];
    $reach_type=$_GET['reach_type'];
    $availability_=$_GET['availability'];
    $timing_=$_GET['timing'];
    echo $name;
    echo "<br/>";
    echo $email;
    echo "<br/>";
    echo $phone;
    echo "<br/>";
    echo $desc;
    echo "<br/>";
    echo $reach_type;
    echo "<br/>";
    echo var_dump($availability_);
    echo "<br/>";
    echo var_dump($timing_);

    $availability = implode(", ", $availability_);
    $timing = implode(", ", $timing_);
    

    $sql = "INSERT INTO `appointment` (`name`, `email`, `phone`, `desc`, `reach_type`, `availability`, `timing`) VALUES ('$name', '$email', '$phone', '$desc', '$reach_type', '$availability', '$timing')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:profile.php");
    } else {
        echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
    }








}else{
    echo "request is not allowed";
}


?>