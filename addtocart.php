<?php

if(isset($_GET['id']) && !empty($_GET['id']))
{
    include('cp/config/db.php');
    $datetime = $date->date("Y-m-d", false, false);
    $product_id = $_GET['id'];
    if($_SESSION['userlogin'] == true && isset($_SESSION['id']))
    {
        $user_ip = $_SESSION['id'];

    }else
    {
        $user_ip = getRealUserIp();
    }

    $rp = $db->select("product","`id` = '$product_id'");
    foreach($rp as $rowrp)
    {
        $title = $rowrp['title'];
        $price = $rowrp['price'];
        $image = $rowrp['image1'];
    }
    $meter = $_POST['meter'];
    $total = $price * $meter;
    $resultadd = $db->insert("cart",array(
        "product_id" => $product_id,
        "title"=>$title,
        "img"=>$image,
        "meter" => $meter,
        "total" => $total,
        "user_id" =>$user_ip,
        "create_at" =>$datetime));
}


