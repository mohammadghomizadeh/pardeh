
<div class="header" id="home">
    <div class="container">
        <ul>
            <li class="irsans14">
                <a href="#" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i> ورود </a>
            </li>
            <li class="irsans14">
                <a href="#" data-toggle="modal" data-target="#myModal2">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> ثبت نام </a>
            </li>
            <li class="irsans14">
                <i class="fa fa-phone" aria-hidden="true"></i> شماره تماس: ۰۱۲۳۴۵۶۷۸۹</li>
            <li>
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="mailto:info@example.com">info@example.com</a>
            </li>
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid container">
        <div class="row">
            <div class="col-md-4 header-middle">
                <form action="#" method="post">
                    <input type="search" name="search" class="irsans14" placeholder="جستجو کنید ..." required="">
                    <input type="submit" value=" ">
                    <!-- <div class="clearfix"></div> -->
                </form>
            </div>
            <!-- header-bot -->
            <div class="col-md-4 col-sm-6 logo_agile">
            <?php
                  $result = $db->select("setting","`type` = 'setting'");
                 foreach($result as $row)
                 {
?>
                <h1>

                    <a href="index.html">
                        <img src="cp/uploads/logo/<?php echo $row['logo'];?>"  alt="<?php echo $row['title'];?> ">
                    </a>
                </h1>
                 <?php }; ?>
            </div>
            <!-- header-bot -->
            <div class="col-md-4 col-sm-6 agileits-social top_content">
                <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                    <li class="share irsans14">اشتراک گذاری: </li>
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
        <!-- <div class="clearfix"></div> -->
    </div>
</div>
<div class="clearfix"></div>