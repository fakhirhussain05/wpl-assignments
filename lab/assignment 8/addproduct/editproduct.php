<?php
if (!isset($_GET['product_id'])) {
    die("Product ID missing!");
}

    $id = $_GET['product_id'];

    $conn = new mysqli("localhost", "root", "", "wpl");

    $query = "SELECT * FROM product WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h2>Edit Product</h2>

<form action="product.php" method="post">

    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

    <label>Product Name:</label>
    <input type="text" name="product_name" value="<?php echo $data['product_name']; ?>">
    <br><br>

    <label>Price:</label>
    <input type="text" name="price" value="<?php echo $data['price']; ?>">
    <br><br>

    <label>Quantity:</label>
    <input type="text" name="quantity" value="<?php echo $data['quantity']; ?>">
    <br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>