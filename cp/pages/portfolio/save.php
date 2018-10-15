<?php
/*
$q= mysql_query("SELECT COUNT(*) FROM `view` ");
$view=mysql_fetch_array($q);
echo $view[0];*/
if (isset($_POST['submit'])){

    $ctime = $date->date("Y-m-d", false, false);

    $portfolio_title=$_POST["portfolio_title"];
    $portfolio_cat_id=$_POST["portfolio_cat_id"];
    $portfolio_description=$_POST["portfolio_description"];
    /*----image1----*/

    $portfolio_img1= $ctime.$_FILES["portfolio_image1"]["name"];
    $url1="uploads/portfolios/".basename($ctime.$_FILES["portfolio_image1"]["name"]);
    move_uploaded_file($_FILES["portfolio_image1"]["tmp_name"],$url1);
    /*----image2----*/
    $portfolio_img2=$ctime.$_FILES["portfolio_image2"]["name"];
    $url2="uploads/portfolios/".basename($ctime.$_FILES["portfolio_image2"]["name"]);
    move_uploaded_file($_FILES["portfolio_image2"]["tmp_name"],$url2);
    /*----image3----*/
    $portfolio_img3=$ctime.$_FILES["portfolio_image3"]["name"];
    $url3="uploads/portfolios/".basename($ctime.$_FILES["portfolio_image3"]["name"]);
    move_uploaded_file($_FILES["portfolio_image3"]["tmp_name"],$url3);



$result=$db->insert("portfolio",array(
    "title"=>$portfolio_title,
    "description"=>$portfolio_description,
    "image1"=>$portfolio_img1,
    "image2"=>$portfolio_img2,
    "image3"=>$portfolio_img3,
    "cat_id"=>$portfolio_cat_id,
    "create_at"=>$ctime));
    if ($result){
        ?>

        <?php
    }
}
else{
    echo "not submit keyed";
};?>
