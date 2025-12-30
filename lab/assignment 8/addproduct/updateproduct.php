<?php

$id     = $_POST['id'];
$name   = $_POST['product_name'];
$price  = $_POST['price'];
$qty    = $_POST['quantity'];

$conn = new mysqli("localhost", "root", "", "wpl");

$query = "UPDATE product 
          SET product_name='$name', price='$price', quantity='$qty'
          WHERE id='$id'";

mysqli_query($conn, $query);

header("Location: product.php");
exit;
?>