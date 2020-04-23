<?php

$id=$_GET['id'];
include 'includes/comman.php';
$user_id=$_SESSION['id'];
$res4= mysqli_query($connection, "
 INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$id', 'Added to cart')");
$res7= mysqli_query($connection, "update analysis set qty=qty+1 where product=(select name from product_details where item_id='$id') ");
 
header("Location:product.php");?>
     


