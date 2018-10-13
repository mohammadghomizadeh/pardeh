<?php
/*
$q= mysql_query("SELECT COUNT(*) FROM `view` ");
$view=mysql_fetch_array($q);
echo $view[0];*/
if (isset($_POST['submit'])){
include('config/db.php');
$title=$_post["title"];
$description=$_post["description"];
$image1=time().$_FILES["image1"]["name"];
$url="../upload/".basename(time().$_FILES["image1"]["name"]);
move_uploaded_file($_FILES["image1"]["tmp_name"],$url);
/*---image2----*/
$image2=time().$_FILES["image2"]["name"];
$url1="../upload/".basename(time().$_FILES["image2"]["name"]);
move_uploaded_file($_FILES["image2"]["tmp_name"],$url1);
/*---image3----*/
$image3=time().$_FILES["image3"]["name"];
$url2="../upload/".basename(time().$_FILES["image3"]["name"]);
move_uploaded_file($_FILES["image3"]["tmp_name"],$url2);
$result=$db->insert("portfolio",array(
    "title"=>$portfoliotitle,"description"=>$portfoliodescription,"image1"=>$portfolioimage1,"image2"=>$portfolioimage2,
    "image3"=>$portfolioimage3,"view"=>$view,"cat_id"=>$portfoliocat_id,"creat_at"=>$ctime,"updat_at"=>$utime));
    if ($r){
        ?>
        <script>
         window.location.replace("index.php?page=portfolio");
        </script>
        <?php
    }
}
