<?php
if(isset($_POST['submitsave']))
{
    $datetime = $date->date("Y-m-d-h-m-s", false, false);
    $category_title = $_POST['category_title'];
    $category_type = $_POST['category_type'];
    if(!empty($_FILES['category_image']['name']))
    {
        $uploaddir = 'uploads/categorys/';
        $category_image = $datetime ."-". $_FILES['category_image']['name'];
        $uploadfile = $uploaddir . basename($datetime ."-". $_FILES['category_image']['name']);
        move_uploaded_file($_FILES['category_image']['tmp_name'], $uploadfile);
        $result = $db->insert("category",array(
            "title"=>$category_title,
            "type"=>$category_type,
            "image"=>$category_image,
            "create_at"=>$datetime));
    }else{
        $result = $db->insert("category",array(
            "title"=>$category_title,
            "type"=>$category_type,
            "create_at"=>$datetime));
    }

    if($result)
    {
        ?>

        <script>
            window.location.replace("index.php?page=category/list");
        </script>

        <?php
    }


}
elseif(isset($_POST['submitedit']))
{
    $editid = $_GET['id'];
    $datetime = $date->date("Y-m-d-h-m-s", false, false);
    $category_title = $_POST['category_title'];
    $category_type = $_POST['category_type'];
    if(!empty($_FILES['category_image']['name']))
    {
        $uploaddir = 'uploads/categorys/';
        $category_image = $datetime ."-". $_FILES['category_image']['name'];
        $uploadfile = $uploaddir . basename($datetime ."-". $_FILES['category_image']['name']);
        move_uploaded_file($_FILES['category_image']['tmp_name'], $uploadfile);
        $result = $db->run("UPDATE `category` SET
            `title`= '$category_title',
            `type` = '$category_type',
            `image` = '$category_image',
            `create_at` = '$datetime'
            WHERE `id` = '$editid'");
    }else{
        $result = $db->run("UPDATE `category` SET
            `title`= '$category_title',
            `type` = '$category_type',
            `update_at` = '$datetime'
            WHERE `id` = '$editid'");
    }

    if($result)
    {
        ?>

        <script>
            window.location.replace("index.php?page=category/list");
        </script>

        <?php
    }


}
?>