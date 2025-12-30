<?php
$email=$_POST ['email'];
$password=$_POST ['password'];
$fullname=$_POST ['fullname'];
$username=$_POST ['username'];

 $conn = new mysqli('localhost','root','','wpl');

    $query="INSERT INTO `signup`(`email`, `password`, `fullname`, `username`) VALUES ('$email','$password','$fullname','$username')";
    mysqli_query($conn,$query);
    


?>