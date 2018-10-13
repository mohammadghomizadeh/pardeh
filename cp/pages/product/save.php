<?php

    try{

        $datetime = $date->date("Y-m-d", false, false);
        $product_title = $_POST['product_title'];
        $product_description = $_POST['product_description'];
        $product_category = $_POST['product_category'];
        $product_price = $_POST['product_price'];
        $uploaddir = 'uploads/products/';
        /*img1*/
        $product_image1 = $datetime.$_FILES['product_image1']['name'];
        $uploadfile = $uploaddir . basename($datetime.$_FILES['product_image1']['name']);
        move_uploaded_file($_FILES['product_image1']['tmp_name'], $uploadfile);
        /*img2*/
        $product_image2 = $datetime.$_FILES['product_image2']['name'];
        $uploadfile = $uploaddir . basename($datetime.$_FILES['product_image2']['name']);
        move_uploaded_file($_FILES['product_image2']['tmp_name'], $uploadfile);
        /*img3*/
        $product_image3 = $datetime.$_FILES['product_image3']['name'];
        $uploadfile = $uploaddir . basename($datetime.$_FILES['product_image3']['name']);
        move_uploaded_file($_FILES['product_image3']['tmp_name'], $uploadfile);
        /*img4*/
        $product_image4 = $datetime.$_FILES['product_image4']['name'];
        $uploadfile = $uploaddir . basename($datetime.$_FILES['product_image4']['name']);
        move_uploaded_file($_FILES['product_image4']['tmp_name'], $uploadfile);

        $result_addproduct = $db->insert("product",array
        (
            'title'=> $product_title,
            'description' => $product_description,
            'image1'=>$product_image1,
            'image2'=>$product_image2,
            'image3'=>$product_image3,
            'image4'=>$product_image4,
            'price'=>$product_price,
            'categoryid'=>$product_category,
            'create_at'=>$datetime
        ));

        ?>
<script>
    window.location.replace("index.php?page=product/list");
</script>
<?php


    }
    catch(Exception $e)
    {
    echo $e;

}