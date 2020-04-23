<?php

function  check_if_added_to_cart($item_id)
{   
    
      $connection= mysqli_connect("localhost", "root", "", "Shopping") or die(mysqli_error($connection));
      //session_start();
      $user_id=$_SESSION['id'];
    $res= mysqli_query($connection, "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'");
    if(mysqli_num_rows($res)>=1)
    {
        return 1;
    }
 else {
    return 0;    
    }
    
}
?>