<?php 
session_start();
include($_SERVER["DOCUMENT_ROOT"] ."./db_conn.php");

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    $product_name=$_GET['product_name'];
    $product_price=$_GET['product_price'];
    $product_id=$_GET['product_id'];

    $user_id=$_SESSION['id'];
    $user_email=$_SESSION['email'];
    $sql="INSERT INTO `orders` (`userid`, `email`, `product_id`, `product_name`, `price`) VALUES ('$user_id', '$user_email', '$product_id', '$product_name', '$product_price');";
    $result=mysqli_query($conn, $sql);
    if ($result) {
        echo "Product added to cart successfully";
        header("Location: profile.php");
    } else {
        echo "Product not added to cart";
        header("Location: index.php");
    }
}
?>