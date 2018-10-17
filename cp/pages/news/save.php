<?php
/*
$q= mysql_query("SELECT COUNT(*) FROM `view` ");
$view=mysql_fetch_array($q);
echo $view[0];*/
if (isset($_POST['submit'])){

    $ctime = $date->date("Y-m-d", false, false);
    $news_title=$_POST["news_title"];
    $news_cat_id=$_POST["news_cat_id"];
    $news_description=$_POST["news_description"];
    /*----image1----*/
    $news_image1= $ctime.$_FILES["news_image1"]["name"];
    $url1="uploads/news/".basename($ctime.$_FILES["news_image1"]["name"]);
    move_uploaded_file($_FILES["news_image1"]["tmp_name"],$url1);
 



$result=$db->insert("post",array(
    "title"=>$news_title,
    "description"=>$news_description,
    "image"=>$news_image1,
    "cat_id"=>$news_cat_id,
    "tag"=>$news_tag,
    "create_at"=>$ctime));
    if ($result){
        ?>
        <script>window.location.replace("index.php?page=news/list&action=list");</script>
        <?php
    }
}
else{
    echo "not submit keyed";
};?>
