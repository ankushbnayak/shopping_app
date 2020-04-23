<?php require 'includes/comman.php';
if (isset($_SESSION['email'])) 
    {   
    header('location: product.php'); 
    
    } ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle</title>
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
        <?php         include 'includes/header.php';?>
        <div id="Image">
            <div class="container">
                <center> <div id="Donate">
                    <a href="product.php" class="btn btn-danger btn-lg active">Shop now</a>
                </div>
                </center>
            </div>
            
        </div>
        <footer>
            <div class="container">
                <center> Copyright © Lifestyle Store. All Rights Reserved|ƈContact Us: +91 90000 00000 a</center>
            </div>
        </footer>
    </body>
</html>
