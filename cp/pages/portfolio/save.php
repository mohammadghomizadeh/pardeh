<?php
/*
$q= mysql_query("SELECT COUNT(*) FROM `view` ");
$view=mysql_fetch_array($q);
echo $view[0];*/
if (isset($_POST['submit'])){
include('config/db.php');
$ctime = $date->date("Y-m-d", false, false);
$utime = $date->date("Y-m-d", false, false);
$portfolio_title=$_POST["portfolio_title"];
$portfolio_cat_id=$_POST["portfolio_cat_id"];
$portfolio_description=$_POST["portfolio_description"];
/*----image1----*/
$portfolio_img=time().$_FILES["portfolio_image"]["name"];
$url="upload/portfolios".basename(time().$_FILES["portfolio_image"]["name"]);
move_uploaded_file($_FILES["portfolio_image"]["tmp_name"],$url);
/*----image2----*/
$portfolio_img2=time().$_FILES["portfolio_image"]["name"];
$url="upload/portfolios".basename(time().$_FILES["portfolio_image"]["name"]);
move_uploaded_file($_FILES["portfolio_image"]["tmp_name"],$url);
/*----image3----*/
$portfolio_img3=time().$_FILES["portfolio_image"]["name"];
$url="upload/portfolios".basename(time().$_FILES["portfolio_image"]["name"]);
move_uploaded_file($_FILES["portfolio_image"]["tmp_name"],$url);



$result=$db->insert("portfolio",array(
    "title"=>$portfolio_title,
    "description"=>$portfolio_description,
    "image1"=>$portfolio_img,
    "image2"=>$portfolio_img2,
    "image3"=>$portfolio_img3,
    "view"=>$view,
    "cat_id"=>$portfolio_cat_id,
    "creat_at"=>$ctime,
    "updat_at"=>$utime));
    if ($r){
        ?>
        <script>
         window.location.replace("index.php?pages=list");
        </script>
        <?php
    }
}
else{
    echo "not submit keyed";
};?>
