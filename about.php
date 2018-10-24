<?php include('layouts/head-script.php');  ?>
<body>
<!-- header -->
<?php include('layouts/header.php'); ?>
<!-- //header-bot -->
<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>درباره
            <span>ما</span>
        </h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li>
                        <a href="index.html">خانه</a>
                        <i>|</i>
                    </li>
                    <li>درباره ما</li>
                </ul>
            </div>
        </div>
        <!--//w3_short-->
    </div>
</div>
<!-- /banner_bottom_agile_info -->
<div class="banner_bottom_agile_info">
    <div class="container">
        <div class="agile_ab_w3ls_info">
            <?php
                  $result = $db->select("setting","`type` = 'aboutus'");
                 foreach($result as $row)
                 {
?>
            <div class="col-md-6 ab_pic_w3ls pull-left">
                <img src="cp/uploads/about/<?php echo $row['image'];?>" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-6 ab_pic_w3ls_text_info">
                <h5><span> درباره ما</span> </h5>
                <p class="text-justify"><?php echo $row['description'];?></p>
            </div>
            <div class="clearfix"></div>
                 <?php }; ?>
        </div>
    </div>
</div>


<!--grids-->
<!-- footer -->
<?php include('layouts/footer.php'); ?>
<!-- End-Footer -->

</body>

</html>