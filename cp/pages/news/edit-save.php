<?php
    $editid = $_GET['id'];  
    $ctime = $date->date("Y-m-d", false, false);
    $news_title=$_POST["news_title"];
    $news_cat_id=$_POST["news_cat_id"];
    $news_description=$_POST["news_description"];
    $uploaddir = 'uploads/news/';
    /*----image1----*/
    if(!empty($_FILES['news_image1']['name'])){
    $news_image1= $ctime.$_FILES["news_image1"]["name"];
    $upload1=$uploaddir.basename($ctime.$_FILES["news_image1"]["name"]);
    move_uploaded_file($_FILES["news_image1"]["tmp_name"],$upload1);
    $result_editnews = $db->run("UPDATE `news` SET `image` = '$news_image1' WHERE `id` = '$editid'");
    }
  

$result_editnews=$db->run("UPDATE `news` SET
    `title`=>'$news_title',
    `description`=>'$news_description',
    `cat_id`=>'$news_cat_id',
    `update_at`= '$ctime'
     WHERE `id` = '$editid'");


?>

<script>
window.location.replace("index.php?page=news/list");
</script>
