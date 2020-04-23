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
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.html">Lifestyle Store</a>
                </div>
                 <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="setting.html"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                        <li><a href="login.html"><span class="glyphicon glyphicon-off"></span> Log-out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br>
    <center><p class="a">Change password</p> </center>
        <div class="container">
            <center>    
                   <form>
                   <div class="form-group">
                       <input type="password" placeholder="Old password" class="form-control" name="oldpassword">
                       
                   </div>
                       <div class="form-group">
                       <input type="password" placeholder="New password" class="form-control" name="newpass">
                       
                   </div>
                       <div class="form-group">
                           <input type="password" placeholder="Re-type new Password" class="form-control" name="Rpassword">
                       </div> 
                       
                       <div class="form-group">
                           <input type="submit" value="Change" class="btn btn-primary">
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
