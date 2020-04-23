<?php
require 'includes/comman.php';
$em= $_POST['email'];
$pas=$_POST['password'];
$res6= mysqli_query($connection, "Select * from details where (email='$em' and pass='$pas');") or die(mysqli_error($connection));

if(mysqli_num_rows($res6)==0)
{
    header("Location: login.php?email_error=Login unsuccessful");
}
else
{   
    $row= mysqli_fetch_array($res6);
    $_SESSION['email']=$em;
    $_SESSION['id']= $row['id'];
    header("Location:product.php");
}
?>