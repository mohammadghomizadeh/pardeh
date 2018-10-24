<div class="footer">
    <div class="footer_agile_inner_info_w3l">
        <div class="col-md-3 footer-left">
            <h2>
                <a href="index.html">
                    <span>E</span>rise Shop</a>
            </h2>
            <p>با کلیک بر روی نمادهای زیر، ما را در شبکه‌های اجتماعی همراهی کنید.</p>
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
        <div class="col-md-9 footer-right">
            <div class="sign-grds">
                <div class="col-md-4 sign-gd">
                    <h4>نقشه
                        <span>سایت</span>
                    </h4>
                    <ul>
                        <li>
                            <a href="index.php">صفحه اصلی</a>
                        </li>
                        <li>
                            <a href="mens.html">پوشاک مردانه</a>
                        </li>
                        <li>
                            <a href="womens.html">پوشاک زنانه</a>
                        </li>
                        <li>
                            <a href="about.php">درباره ما</a>
                        </li>
                        <li>
                            <a href="contact.php">تماس با ما</a>
                        </li>
                        <?php
                        $result = $db->select("page","`type` = 'footer' LIMIT 2");
                        foreach($result as $rowmenu)
                        {
                            ?>
                            <li>
                                <a href="page.php?id=<?php echo $rowmenu['id']; ?>">  <?php echo $rowmenu['title']; ?></a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-md-5 sign-gd-two">
                    <h4>اطلاعات
                        <span>تماس</span>
                    </h4>
                    <div class="w3-address">
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>شماره تماس</h6>
                                <p>۰۲۱۲۳۴۵۶۷۸۹</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>آدرس ایمیل</h6>
                                <p>Email :
                                    <a href="mailto:example@email.com"> mail@example.com</a>
                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>آدرس</h6>
                                <p>تهران - خیابان نیلوفر</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sign-gd flickr-post">
                    <h4>محصولات
                        <span>اخیر</span>
                    </h4>
                    <?php
                    
                    $results = $db->select("product");
                     foreach($results as $row)
                     {
 
                     ?>
                    <ul>
                        <li>
                            <a href="single.html">
                                <img src="cp/uploads/products/<?php echo $row['image1'];?>" alt=" " class="img-responsive" />
                            </a>
                        </li>
                        
                    </ul>
                     <?php }; ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="agile_newsletter_footer">
            <div class="col-sm-6 newsleft">
                <h3>عضویت در خبرنامه اریسه</h3>
            </div>
            <div class="col-sm-6 newsright">
                <form action="#" method="post">
                    <input type="email" placeholder="ایمیل" name="email" required="">
                    <input type="submit" value="عضو شو">
                </form>
            </div>

            <div class="clearfix"></div>
        </div>
        <p class="copy-right">فروشگاه اینترنتی اریسه | طراحی و برنامه نویسی
            <a target="_blank" href="https://www.rtl-theme.com/author/hosein.abedi/">وب ویت</a>
        </p>
        <p class="slogan">ساخته شده با
            <i class="fa fa-heart" style="color:red;"></i>
        </p>
    </div>
</div>
<!-- //footer -->

<a href="#home" class="scroll" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"> </span>
</a>

<!-- js -->
<script type="text/javascript" src="_Content/js/jquery-2.1.4.min.js"></script>
<script src="_Content/js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
<!-- //js -->
<script src="_Content/js/modernizr.custom.js"></script>
<!-- Custom-JavaScript-File-Links -->
<script src="_Content/js/minicart.min.js"></script>
<script src="_Content/js/imagezoom.js"></script>
<!-- script for responsive tabs -->
<script type='text/javascript'>//<![CDATA[
    $(window).load(function(){
        $( "#slider-range" ).slider({
            range: true,
            isRTL: true,
            min: 0,
            max: 9000,
            values: [ 1000, 7000 ],
            slide: function( event, ui ) {  $( "#amount" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "" + $( "#slider-range" ).slider( "values", 0 ) + " - " + $( "#slider-range" ).slider( "values", 1 ) );

    });//]]>

</script>

<script type="text/javascript" src="_Content/js/jquery-ui.js"></script>
<script type="text/javascript" src="_Content/js/jquery.ui.slider-rtl.min.js"></script>
<script src="_Content/js/easy-responsive-tabs.js"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!-- //script for responsive tabs -->


<!-- stats -->
<script src="_Content/js/jquery.waypoints.min.js"></script>
<!-- <script src="js/jquery.countup.js"></script> -->
<script src="_Content/js/countup.min.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
<!-- FlexSlider -->
<script src="_Content/js/jquery.flexslider.js"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<!-- //FlexSlider-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="_Content/js/move-top.js"></script>
<script type="text/javascript" src="_Content/js/jquery.easing.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="_Content/js/bootstrap.js"></script>
</body>

</html>