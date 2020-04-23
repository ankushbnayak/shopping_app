<?php
require 'includes/comman.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Log-in</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
        .row_style{
            margin-top: 10px;
        }
        .text-warning{
            font-size: 30px;
        } 
        .panel-body{
            text-align: center;
        }
       
        form{
            display: inline-block ;
            width: 50%;
        }
        
    </style>
    <link rel="stylesheet" href="newcss.css" type="text/css">
    </head>
    <body>
        <?php include 'includes/header.php';?>
        
        <br><br><br>
        <div class="container">
        <div class="panel panel-primary">
            <div class="panel-header">
                <center>    <p class="text-warning"><b>Login to make purchase</b></p></center>
            </div>
           <div class="panel-body">
               <center>     
                   <form method="post" action="login_submit.php">
                   <div class="form-group">
                       <input type="text" placeholder="e-mail" class="form-control" name="email">
                       
                   </div>
                       <div class="form-group ">
                           <input type="password" placeholder="Password" class="form-control" name="password">
                       </div> 
                       <div class="form-group">
                           <input type="submit" class="btn btn-primary">
                           <div><?php  if(isset($_GET['email_error'])){
                           echo $_GET['email_error'];}?></div>
                       </div>
                   </form>
                    
               </center>
             </div>
            <div class="panel-footer">
                <p>Don't have an account?<a href="signup.html">Register</a></p>
            </div>
       </div>
        </div>   
           <footer>
           
                <center> Copyright © Lifestyle Store. All Rights Reserved|ƈContact Us: +91 90000 00000 a</center>
            
             </footer>    
           
    </body>
</html>
