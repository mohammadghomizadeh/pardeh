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

    "title"=>$post_title,
    "description"=>$post_description,
    "image"=>$post_image1,
    "cat_id"=>$post_cat_id,
    "tag"=>$post_tag,
    "type"=>$cat_post,
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
