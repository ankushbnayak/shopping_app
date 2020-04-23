<?php
require 'includes/comman.php';
if(!(isset($_SESSION['email'])))
{
    header("Location:login.php");
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
        <title>Cart</title>
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
        <?php   include 'includes/header.php';
        $uid=$_SESSION['id'];
        $res5= mysqli_query($connection, "select name,price from product_details as pd,user_items ui where pd.item_id=ui.item_id and ui.user_id='$uid'");
        if(mysqli_num_rows($res5)==0)
        {
            echo 'Cart is Empty';
            header("Location:product.php");
        }
        ?>
        <br><br><br>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tr><th>Item number</th><th>Item name</th><th>Item price</th><th></th></tr>
                    <?php $sum=0;
                    while($row= mysqli_fetch_array($res5))
                    {?>        
                    <tr><td></td><td><?php echo $row['name'];?></td><td><?php echo $row['price'];$sum=$sum+$row['price'];?></td><td></td></tr><?php } ?>
                    <tr><td></td><td>Total</td><td><?php echo $sum;?></td>
                        <td><a href="#" class="btn btn-primary">Confirm order</a></td></tr>
                </table>
                <center><a href="analyse.php" class="btn btn-primary">Sales analysis</a></center>
            </div>
        </div>
           <footer>
            <div class="container">
                <center> Copyright © Lifestyle Store. All Rights Reserved|ƈContact Us: +91 90000 00000 a</center>
            </div>
        </footer>
    </body>
</html>
