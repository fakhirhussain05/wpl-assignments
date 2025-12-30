<?php

if (isset($_GET['product_id'])) {

    $id = $_GET['product_id'];

    $conn = new mysqli("localhost", "root", "", "wpl");

    $query = "DELETE FROM products WHERE id='$id'";

    mysqli_query($conn, $query);

    header("Location: product.php");
    exit;
}
?>