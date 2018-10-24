<div class="ban-top">
    <div class="container">
        <div class="top_nav_right">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active menu__item menu__item--current">
                                <a class="menu__link irsans16" href="index.php">خانه
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="dropdown menu__item">
                                <a href="products.php" class="dropdown-toggle menu__link irsans16" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">محصولات
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                                            <a href="mens.html">
                                                <img src="_Content/images/top2.jpg" alt=" " />
                                            </a>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown irsans14">
                                                <?php
                                                $recat = $db->select("category","`type` = 'product' LIMIT 6");
                                                foreach($recat as $rowcat)
                                                {
                                                    ?>
                                                    <li>
                                                        <a href="catpage.php?id=<?php echo $rowcat['id']; ?>"><?php echo $rowcat['title']; ?></a>
                                                    </li>
                                                <?php

                                                }
                                                ?>


                                            </ul>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown irsans14">
                                                <li>
                                                    <a href="mens.html">زیورآلات</a>
                                                </li>
                                                <li>
                                                    <a href="mens.html">عینک آفتابی</a>
                                                </li>
                                                <li>
                                                    <a href="mens.html">عطرها</a>
                                                </li>
                                                <li>
                                                    <a href="mens.html">آرایشی و بهداشتی</a>
                                                </li>
                                                <li>
                                                    <a href="mens.html">کمربند</a>
                                                </li>
                                                <li>
                                                    <a href="mens.html">کراوات</a>
                                                </li>
                                                <li>
                                                    <a href="mens.html">شالگردن</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>

                            <li class=" menu__item">
                                <a class="menu__link irsans16" href="posts.php">اخبار سایت</a>
                            </li>
                            <li class=" menu__item">
                                <a class="menu__link irsans16" href="about.php">درباره ما</a>
                            </li>
                            <li class=" menu__item">
                                <a class="menu__link irsans16" href="contact.php">تماس با ما</a>
                            </li>
                            <?php
                            $result = $db->select("page","`type` = 'head' LIMIT 2");
                            foreach($result as $rowmenu)
                            {
                                ?>
                                <li class=" menu__item">
                                    <a class="menu__link irsans16" href="page.php?id=<?php echo $rowmenu['id']; ?>"><?php echo $rowmenu['title']; ?></a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="top_nav_left">
            <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                <form action="cart.php" method="post" class="last">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="display" value="1">
                    <button class="w3view-cart" type="submit" name="submit" value="">
                        <?php
                        $user = getRealUserIp();
                        $cartCount = $db->run("SELECT count(id) From `cart` WHERE `user_id` = '$user'");
                        foreach($cartCount as $row)
                        {
                            $count= $row['count(id)'];
                        }
                        ?>
                        <i class="fa fa-cart-arrow-down" aria-hidden="true">
                            <span id="cartcount">
                                <?php echo $count;  ?>
                            </span>
                        </i>
                    </button>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="col-md-8 modal_body_left modal_body_left1 pull-left">
                    <h3 class="agileinfo_sign">ورود به
                        <span>اریسه</span>
                    </h3>
                    <form action="#" method="post">
                        <div class="styled-input">
                            <input type="email" class="text-right" name="Email" required="">
                            <label class="irsans16">ایمیل</label>
                            <span></span>
                        </div>
                        <div class="styled-input agile-styled-input-top">
                            <input type="password" class="text-right" name="Name" required="">
                            <label class="irsans16">رمز عبور</label>
                            <span></span>
                        </div>
                        <input type="submit" class="irsans16" value="ورود">
                    </form>
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
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
                    <div class="clearfix"></div>
                    <p class="text-center">
                        <a href="#" data-toggle="modal" data-target="#myModal2"> جهت ثبت نام کلیک کنید</a>
                    </p>
                </div>
                <div class="col-md-4 modal_body_right modal_body_right1">
                    <img src="_Content/images/log_pic.jpg" alt=" " />
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal1 -->
<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="col-md-8 modal_body_left modal_body_left1 pull-left">
                    <h3 class="agileinfo_sign">ثبت نام در
                        <span>اریسه</span>
                    </h3>
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
                            <input type="password" name="password" required="">
                            <label>رمز عبور</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="password" name="Confirm Password" required="">
                            <label>تکرار رمز عبور</label>
                            <span></span>
                        </div>
                        <input type="submit" value="ثبت نام">
                    </form>
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
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
                    <div class="clearfix"></div>
                    <p class="text-center">
                        <a href="#">ثبت نام در سایت به منزله تایید قوانین می‌باشد.</a>
                    </p>
                </div>
                <div class="col-md-4 modal_body_right modal_body_right1">
                    <img src="_Content/images/log_pic.jpg" alt=" " />
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>