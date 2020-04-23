<?php
require 'includes/comman.php';
$n=$_POST['name'];
$e=$_POST['email'];
$ps=$_POST['password'];
$co=$_POST['contact'];
$ct=$_POST['city'];
$ad=$_POST['address'];
$res= mysqli_query($connection, "select 8 from details where email='$e'") or die(mysqli_error($connection));
if(mysqli_num_rows($res)>0)
{
    header("Location: signup.php?error=Account exists");
}
$sql= "insert into details(name,email,pass,contact,city,address) values('$n','$e','$ps','$co','$ct','$ad')";
$r= mysqli_query($connection, $sql) or die(mysqli_error($connection));
$_SESSION['email']=$e;
$_SESSION['id']= mysqli_insert_id($connection);
header("Location:product.php");
?>