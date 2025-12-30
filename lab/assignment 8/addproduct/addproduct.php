<?php

 $pd_name=$_POST['product_name'];
 $pd_price=$_POST['price'];
 
 $pd_quantity=$_POST['quantity'];
 
 $pd_description=$_POST['description'];
 $pd_category=$_POST['category'];
 
   $conn=mysqli_connect('localhost','root','','wpl');

   $query="INSERT INTO `product`(`product_name`, `price`, `quantity`, `description`, `category`) VALUES ('$pd_name','$pd_price','$pd_quantity','$pd_description','$pd_category')";
    mysqli_query($conn,$query);
?>