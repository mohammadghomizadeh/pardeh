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
                  $result = $db->run("SELECT * FROM `setting` WHERE `type` = 'aboutus' LIMIT 1");
                 foreach($result as $row)
                 {
?>
            <div class="col-md-6 ab_pic_w3ls pull-left">
                <img src="cp/uploads/about/<?php echo $row['image'];?>" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-6 ab_pic_w3ls_text_info">
                <h5>از
                    <span> اریسه</span>
                    بیشتر بدانید
                </h5>
                <p class="text-justify"><?php echo $row['description'];?></p>
               
            </div>
            <div class="clearfix"></div>
                 <?php }; ?>
        </div>

    </div>
</div>
<!-- team -->
<div class="banner_bottom_agile_info team">
    <div class="container">
        <h3 class="wthree_text_info">اعضای
            <span>تیم</span>
            ما
        </h3>
        <div class="inner_w3l_agile_grids">
            <div class="col-md-3 team-grids">
                <div class="thumbnail team-w3agile">
                    <img src="_Content/images/t1.jpg" class="img-responsive" alt="">
                    <div class="social-icons team-icons right-w3l fotw33">
                        <div class="caption">
                            <h4>رضا وحدانی</h4>
                            <p>مدیریت انبار کالاها</p>
                        </div>
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                            <li>
                                <a href="#" class="facebook">
                                    <div class="front">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <div class="front">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="instagram">
                                    <div class="front">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest">
                                    <div class="front">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <div class="thumbnail team-w3agile">
                    <img src="_Content/images/t2.jpg" class="img-responsive" alt="">
                    <div class="social-icons team-icons right-w3l fotw33">
                        <div class="caption">
                            <h4>مریم مقدس زاده</h4>
                            <p>سرپرست تیم پشتیبانی</p>
                        </div>
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                            <li>
                                <a href="#" class="facebook">
                                    <div class="front">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <div class="front">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="instagram">
                                    <div class="front">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest">
                                    <div class="front">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <div class="thumbnail team-w3agile">
                    <img src="_Content/images/t3.jpg" class="img-responsive" alt="">
                    <div class="social-icons team-icons right-w3l fotw33">
                        <div class="caption">
                            <h4>سحر نامجو</h4>
                            <p>سرپرست امور مشتریان</p>
                        </div>
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                            <li>
                                <a href="#" class="facebook">
                                    <div class="front">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <div class="front">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="instagram">
                                    <div class="front">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest">
                                    <div class="front">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <div class="thumbnail team-w3agile">
                    <img src="_Content/images/t4.jpg" class="img-responsive" alt="">
                    <div class="social-icons team-icons right-w3l fotw33">
                        <div class="caption">
                            <h4>حسین عابدی</h4>
                            <p>سرپرست تیم طراحی و برنامه نویسی</p>
                        </div>
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                            <li>
                                <a href="#" class="facebook">
                                    <div class="front">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <div class="front">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="instagram">
                                    <div class="front">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest">
                                    <div class="front">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //team -->

<!--grids-->
<!-- footer -->
<?php include('layouts/footer.php'); ?>
<!-- End-Footer -->

</body>

</html>