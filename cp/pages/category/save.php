<?php
if(isset($_POST['submitsave']))
{
    $datetime = $date->date("Y-m-d", false, false);
    $category_title = $_POST['category_title'];
    $category_type = $_POST['category_type'];
    if(!empty($_FILES['category_image']['name']))
    {
        $uploaddir = 'uploads/categorys/';
        $category_image = $datetime . $_FILES['category_image']['name'];
        $uploadfile = $uploaddir . basename($datetime . $_FILES['category_image']['name']);
        move_uploaded_file($_FILES['category_image']['tmp_name'], $uploadfile);
        $result = $db->insert("category",array(
            `title`=>'$category_title',
            `type`=>'$category_type',
            `category_image`=>'$category_image'));
    }
    $result = $db->insert("category",array(
        `title`=>'$category_title',
        `type`=>'$category_type'));
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