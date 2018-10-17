<?php
    $editid = $_GET['id'];  
    $ctime = $date->date("Y-m-d", false, false);
    $portfolio_title=$_POST["portfolio_title"];
    $portfolio_cat_id=$_POST["portfolio_cat_id"];
    $portfolio_description=$_POST["portfolio_description"];
    $uploaddir = 'uploads/portfolios/';
    /*----image1----*/
    if(!empty($_FILES['portfolio_image1']['name'])){
    $portfolio_image1= $ctime.$_FILES["portfolio_image1"]["name"];
    $upload1=$uploaddir.basename($ctime.$_FILES["portfolio_image1"]["name"]);
    move_uploaded_file($_FILES["portfolio_image1"]["tmp_name"],$upload1);
    $result_editportfolio = $db->run("UPDATE `portfolio` SET `image1` = '$portfolio_image1' WHERE `id` = '$editid'");
    }
    /*----image2----*/
    if(!empty($_FILES["portfolio_image2"]["name"])){
    $portfolio_image2=$ctime.$_FILES["portfolio_image2"]["name"];
    $upload2=$uploaddir.basename($ctime.$_FILES["portfolio_image2"]["name"]);
    move_uploaded_file($_FILES["portfolio_image2"]["tmp_name"],$upload2);
    $result_editportfolio = $db->run("UPDATE `portfolio` SET `image2` = '$portfolio_image2' WHERE `id` = '$editid'");
    }
    /*----image3----*/
    if(!empty($_FILES["portfolio_image3"]["name"])){
    $portfolio_image3=$ctime.$_FILES["portfolio_image3"]["name"];
    $upload3=$uploaddir.basename($ctime.$_FILES["portfolio_image3"]["name"]);
    move_uploaded_file($_FILES["portfolio_image3"]["tmp_name"],$upload3);
    $result_editportfolio = $db->run("UPDATE `portfolio` SET `image3` = '$portfolio_image3' WHERE `id` = '$editid'");
    }

$result_editportfolio=$db->run("UPDATE `portfolio` SET
    `title`=>'$portfolio_title',
    `description`=>'$portfolio_description',
    `cat_id`=>'$portfolio_cat_id',
    `update_at`= '$ctime'
     WHERE `id` = '$editid'");


?>

<script>
window.location.replace("index.php?page=portfolio/list");
</script>
