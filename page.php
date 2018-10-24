<?php include('layouts/head-script.php');  ?>

<!-- header -->
<?php include('layouts/header.php'); ?>
<!-- //header-bot -->
<!-- MainMenu-->
<?php include('layouts/main-menu.php'); ?>
<!-- //Main-Menu -->
<!-- Content -->
<?php
$pageid =$_GET['id'];
$result = $db->select("page","`id` = '$pageid'");
foreach($result as $rowpage)
{
   ?>

<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>
            <?php echo $rowpage['title']; ?>
        </h3>
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">
                <ul class="w3_short">
                    <li>
                        <a href="index.html">خانه</a>
                        <i>|</i>
                    </li>
                    <li><?php echo $rowpage['title']; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="banner_bottom_agile_info">
    <div class="container">
        <div class="agile_ab_w3ls_info">

            <div class="col-md-12 ab_pic_w3ls_text_info">
                <h5><?php echo $rowpage['title']; ?>
                </h5>

                <?php echo $rowpage['content']; ?>
           </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>


<?php
}
?>


<!--End-Content -->
<!--/Start-Service-->
<?php include('layouts/service.php'); ?>
<!--End-Service-->
<!-- footer -->
<?php include('layouts/footer.php'); ?>
<!-- End-Footer -->
