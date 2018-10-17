<?php
/*
$q= mysql_query("SELECT COUNT(*) FROM `view` ");
$view=mysql_fetch_array($q);
echo $view[0];*/
if (isset($_POST['submit'])){

    $ctime = $date->date("Y-m-d", false, false);
    $post_title=$_POST["post_title"];
    $cat_post = $_POST['cat_post'];
    $post_description=$_POST["post_description"];
    /*----image1----*/
    $post_image1= $ctime.$_FILES["post_image1"]["name"];
    $url1="uploads/posts/".basename($ctime.$_FILES["post_image1"]["name"]);
    move_uploaded_file($_FILES["post_image1"]["tmp_name"],$url1);
 
$result=$db->insert("post",array(
<<<<<<< HEAD
    "title"=>$news_title,
    "description"=>$news_description,

    "image"=>$news_image1,
    "cat_id"=>$news_cat_id,
    "tag"=>$news_tag,
=======
    "title"=>$post_title,
    "description"=>$post_description,
    "image"=>$post_image1,
    "type"=>$cat_post,
>>>>>>> e566fbe4aaba1d671be1840690909b5af458b7a2
    "create_at"=>$ctime));
    if ($result){
        ?>
        <script>window.location.replace("index.php?page=post/list&action=list");</script>
        <?php
    }
}
else{
    echo "not submit keyed";
};?>
