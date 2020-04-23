<?php
include 'includes/comman.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
        <title>Products</title>
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
        <?php include 'includes/header.php';
        include 'includes/check_if_added.php';?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our lifestyle store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, 
                    we have them all in one place. </p>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/4.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Olympus</h3>
                        <p>75000.00</p>
                         <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php } else {                             
                              if (check_if_added_to_cart(1))
                                  { 
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                  } else {?>                                    
                             <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">
                                 Add to cart</a>                                    
                          <?php  } }?> 
                    </div>
                </div>
                </div>    
                <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/2.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Samsung</h3>
                        <p>65000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php } else {                             
                              if (check_if_added_to_cart(2))
                                  { 
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                  } else {?>                                    
                             <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">
                                 Add to cart</a>                                    
                          <?php  } }?> 
                       
                    </div>
                </div>
                </div>    
                <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/3.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Sony</h3>
                        <p>75000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php } else {                             
                              if (check_if_added_to_cart(3))
                                  { 
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                  } else {?>                                    
                             <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">
                                 Add to cart</a>                                    
                          <?php  } }?> 
                               
                    </div>
                </div>
                </div>    
                 <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/5.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Canon</h3>
                        <p>55000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php } else {                             
                              if (check_if_added_to_cart(4))
                                  { 
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                  } else {?>                                    
                             <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">
                                 Add to cart</a>                                    
                          <?php  } }?> 
                        
                    </div>
                </div>
                </div>   
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/11.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>HMT milan</h3>
                        <p>7500.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php } else {                             
                              if (check_if_added_to_cart(5))
                                  { 
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                  } else {?>                                    
                             <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">
                                 Add to cart</a>                                    
                          <?php  } }?> 
                        
                    </div>
                </div>
                </div>    
                <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/9.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Titan model #301</h3>
                        <p>13000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php } else {                             
                              if (check_if_added_to_cart(6))
                                  { 
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                  } else {?>                                    
                             <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">
                                 Add to cart</a>                                    
                          <?php  } }?> 
                        
                    </div>
                </div>
                </div>    
                <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/10.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Titan model #101</h3>
                        <p>10000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php } else {                             
                              if (check_if_added_to_cart(7))
                                  { 
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                  } else {?>                                    
                             <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">
                                 Add to cart</a>                                    
                          <?php  } }?> 
                        
                    </div>
                </div>
                </div>    
                 <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/12.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Faber luba</h3>
                        <p>18000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php } else {                             
                              if (check_if_added_to_cart(9))
                                  { 
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                  } else {?>                                    
                             <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">
                                 Add to cart</a>                                    
                          <?php  } }?> 
                        
                    </div>
                </div>
                </div>   
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/6.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Louis philipe</h3>
                        <p>2750.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php } else {                             
                              if (check_if_added_to_cart(10))
                                  { 
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                  } else {?>                                    
                             <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">
                                 Add to cart</a>                                    
                          <?php  } }?> 
                      
                    </div>
                </div>
                </div>    
                <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/14.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>1650.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php } else {                             
                              if (check_if_added_to_cart(11))
                                  { 
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                  } else {?>                                    
                             <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">
                                 Add to cart</a>                                    
                          <?php  } }?> 
                        
                    </div>
                </div>
                </div>    
                <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/13.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>5000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php } else {                             
                              if (check_if_added_to_cart(12))
                                  { 
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                  } else {?>                                    
                             <a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">
                                 Add to cart</a>                                    
                          <?php  } }?> 
                        
                    </div>
                </div>
                </div>    
                 <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/8.jpg" alt="responsive image">
                    <div class="caption">
                        <h3>H&W</h3>
                        <p>5500.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                          <?php } else {                             
                              if (check_if_added_to_cart(13))
                                  { 
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                  } else {?>                                    
                             <a href="cart_add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">
                                 Add to cart</a>                                    
                          <?php  } }?> 
                       
                    </div>
                </div>
                </div>   
            </div>
        </div>
          
    </body>
</html>
