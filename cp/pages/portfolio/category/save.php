<?php
if (isset($_POST['submit'])){

    $ctime = $date->date("Y-m-d", false, false);

    $portfolio_title=$_POST["portfolio_title"];
    $portfolio_image1= $ctime.$_FILES["portfolio_image1"]["name"];
    $url1="uploads/portfolios/".basename($ctime.$_FILES["portfolio_image1"]["name"]);
    move_uploaded_file($_FILES["portfolio_image1"]["tmp_name"],$url1);
$result=$db->insert("portfolio",array(
    "title"=>$portfolio_title,
    "image1"=>$portfolio_image1,
    "create_at"=>$ctime));
    if ($result){
        ?>
        <script>window.location.replace("index.php?page=portfolio/list&action=list");</script>
        <?php
    }
}
else{
    echo "not submit keyed";
};?>