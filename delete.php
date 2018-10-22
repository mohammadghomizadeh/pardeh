<?php
if(isset($_GET['id']) && !empty($_GET['id']))
{
    include('cp/config/db.php');
    $cart_id = $_GET['id'];
    $rdrl = $db->delete("cart","`id` = '$cart_id'");
    if($rdrl){
        header("Location:cart.php");
    }else
    {
        header("Location:cart.php?err=fail");
    }
}

?>