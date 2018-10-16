<?php

    $editid = $_GET['id'];
    $datetime = $date->date("Y-m-d", false, false);
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];
    $uploaddir = 'uploads/products/';
    /*img1*/
if(!empty($_FILES['product_image1']['name']))
    {
        $product_image1 = $datetime.$_FILES['product_image1']['name'];
        $uploadfile1 = $uploaddir . basename($datetime.$_FILES['product_image1']['name']);
        move_uploaded_file($_FILES['product_image1']['tmp_name'], $uploadfile1);
        $result_editproduct = $db->run("UPDATE `product` SET `image1` = '$product_image1'  WHERE `id` = '$editid'");
    }

    /*img2*/
if(!empty($_FILES['product_image2']['name']))
{
    $product_image2 = $datetime.$_FILES['product_image2']['name'];
    $uploadfile2 = $uploaddir . basename($datetime.$_FILES['product_image2']['name']);
    move_uploaded_file($_FILES['product_image2']['tmp_name'], $uploadfile2);
    $result_editproduct = $db->run("UPDATE `product` SET `image2` = '$product_image2' WHERE `id` = '$editid'");
}

    /*img3*/
if(!empty($_FILES['product_image3']['name']))
{
    $product_image3 = $datetime.$_FILES['product_image3']['name'];
    $uploadfile3 = $uploaddir . basename($datetime.$_FILES['product_image3']['name']);
    move_uploaded_file($_FILES['product_image3']['tmp_name'], $uploadfile3);
    $result_editproduct = $db->run("UPDATE `product` SET `image3` = '$product_image3'WHERE `id` = '$editid'");
}

    /*img4*/
if(!empty($_FILES['product_image4']['name']))
{
    $product_image4 = $datetime.$_FILES['product_image4']['name'];
    $uploadfile4 = $uploaddir . basename($datetime.$_FILES['product_image4']['name']);
    move_uploaded_file($_FILES['product_image4']['tmp_name'], $uploadfile4);
    $result_editproduct = $db->run("UPDATE `product` SET `image4` = '$product_image4' WHERE `id` = '$editid'");
}


    $result_editproduct = $db->run("UPDATE `product` SET
        `title`= '$product_title',
        `description` = '$product_description',
        `price`= '$product_price',
        `cat_id`= '$product_category',
        `update_at`= '$datetime'
          WHERE `id` = '$editid'");


    ?>

        <script>
            window.location.replace("index.php?page=product/list");
        </script>
