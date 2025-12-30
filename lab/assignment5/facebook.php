<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli("localhost", "root", "", "wpl");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "INSERT INTO facebook_signup (fname, lname, email, password)
          VALUES ('$fname', '$lname', '$email', '$password')";

mysqli_query($conn, $query);

echo "Signup successful";
?>
