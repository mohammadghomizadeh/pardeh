<!-- header-Script -->
<?php include('layouts/head-script.php');  ?>
<!-- End-header-Script -->
<!-- header -->
<?php include('layouts/header.php'); ?>
<!-- //header-bot -->
<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>تماس
            <span> با ما</span>
        </h3>
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">
                <ul class="w3_short">
                    <li>
                        <a href="index.html">خانه</a>
                        <i>|</i>
                    </li>
                    <li>تماس با ما</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/contact-->

<div class="banner_bottom_agile_info">
    <div class="container">
        <div class="contact-grid-agile-w3s">
            <div class="col-md-4 contact-grid-agile-w3">
            <?php
                    $result = $db->select("setting","`type` = 'contactus' LIMIT 1" );
                    foreach($result as $row){
                ?>
                <div class="contact-grid-agile-w31">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h4>آدرس شرکت</h4>
                    <p><?php echo $row['address'];?></p>
                </div>
                    <?php }?>
            </div>
            <div class="col-md-4 contact-grid-agile-w3">
                <div class="contact-grid-agile-w32">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <h4>تلفن‌های تماس</h4>
                    <p>
                    <?php echo $row['phone'];?>
                    </p>
                </div>
            </div>
            <div class="col-md-4 contact-grid-agile-w3">
                <div class="contact-grid-agile-w33">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <h4>آدرس ایمیل</h4>
                    <p>
                        <a href="<?php echo $row['email'];?>"><?php echo $row['email'];?></a>
                       
                    </p>
                </div>
                
            </div>
            
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
                   
<div class="contact-w3-agile1 map" data-aos="flip-right">
<?php echo $row['map'];?>
</div>
<div class="banner_bottom_agile_info">
    <div class="container">
        <div class="agile-contact-grids">
            <div class="agile-contact-left">
                <div class="col-md-6 address-grid">
                    <h4>با ما
                        <span>تماس</span> بگیرید</h4>
                    <div class="mail-agileits-w3layouts">
                        <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                        <div class="contact-right">
                            <p>تلفن تماس </p>
                            <span><?php echo $row['phone'];?></span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="mail-agileits-w3layouts">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <div class="contact-right">
                            <p>آدرس ایمیل </p>
                            <a href="<?php echo $row['email'];?>"><?php echo $row['email'];?></a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="mail-agileits-w3layouts">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div class="contact-right">
                            <p>آدرس شرکت</p>
                            <span><?php echo $row['address'];?></span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social two contact">
                        <li class="share">اشتراک گذاری:</li>
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
                <div class="col-md-6 contact-form">
                    <h4 class="white-w3ls">تماس با
                        <span>ما</span>
                    </h4>
                    <form action="#" method="post">
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="Name" required="">
                            <label>نام</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="email" name="Email" required="">
                            <label>ایمیل</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="Subject" required="">
                            <label>موضوع</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <textarea name="Message" required=""></textarea>
                            <label>متن</label>
                            <span></span>
                        </div>
                        <input type="submit" value="ارسال">
                    </form>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--//contact-->
<!--/Start-Service-->
<?php include('layouts/service.php'); ?>
<!--End-Service-->
<!-- footer -->
<?php include('layouts/footer.php'); ?>
<!-- End-Footer -->
