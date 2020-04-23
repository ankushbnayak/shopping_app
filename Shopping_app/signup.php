<?php
require 'includes/comman.php';
if(isset($_SESSION['email']))
{
    header("Location:product.php");
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign-up</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
        .col_style{
            border: 1px solid black;
        }
        
         
    </style>
    <link rel="stylesheet" href="newcss.css" type="text/css">
    </head>
    <body>
        <?php        include 'includes/header.php';?>
        <br><br><br>
    <center><p class="a">SIGN UP</p> </center>
        <div class="container">
            <center>    

                <form method="post" action="signup_script.php">
                   <div class="form-group">
                       <input type="text" placeholder="Name" class="form-control" name="name">
                       
                   </div>
                       <div class="form-group">
                       <input type="text" placeholder=Email class="form-control" name="email">
                       
                   </div>
                       <div class="form-group">
                           <input type="password" placeholder="Password" class="form-control" name="password">
                       </div> 
                       <div class="form-group">
                       <input type="text" placeholder="Contact" class="form-control" name="contact">
                       
                   </div>
                       <div class="form-group">
                       <input type="text" placeholder="City" class="form-control" name="city">
                       
                   </div>
                       <div class="form-group">
                       <input type="text" placeholder="Address" class="form-control" name="address">
                       
                   </div>
                       <div class="form-group">
                           <input type="submit" class="btn btn-primary">
                           <div><?php $_GET['error']=''; echo $_GET['error'];?>
                           </div>
                       </div>
                   </form>
                
               </center>
        </div>
    

     <footer>
            <div class="container">
                <center> Copyright © Lifestyle Store. All Rights Reserved|ƈContact Us: +91 90000 00000 a</center>
            </div>
        </footer>
    </body>
</html>
