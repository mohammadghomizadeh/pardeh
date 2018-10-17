<?php include('layouts/head-script.php');  ?>
<!-- header -->
<?php include('layouts/header.php'); ?>
<!-- //Modal2 -->
<?php include('layouts/main-menu.php'); ?>
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
<?php
$id = $_GET['id'];
$ResultSingleProduct = $db->select("product","`id` = '$id'");
//ViewCheck
$resultview = $db->select("product","`id` = '$id'");
foreach($resultview as $row)
{
    $view = $row['view'];
}
$view += 1;
$db->run("UPDATE `product` SET `view` = '$view' WHERE `id` = '$id'");
//EndViewCheck
foreach($ResultSingleProduct as $rowSingle)
{

?>
    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>کفش <span>مردانه</span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="index.html">خانه</a><i>|</i></li>
                        <li>کفش مردانه</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>

<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <div class="col-md-4 single-right-left ">
            <div class="grid images_3_of_2">
                <div class="flexslider">

                    <ul class="slides">
                        <li data-thumb="cp/uploads/products/<?php echo $rowSingle['image1']; ?>">
                            <div class="thumb-image"><img src="cp/uploads/products/<?php echo $rowSingle['image1']; ?>" data-imagezoom="true"
                                                          data-zoomviewposition="left" class="img-responsive"></div>
                        </li>
                        <li data-thumb="cp/uploads/products/<?php echo $rowSingle['image2']; ?>">
                            <div class="thumb-image"><img src="cp/uploads/products/<?php echo $rowSingle['image2']; ?>" data-imagezoom="true"
                                                          data-zoomviewposition="left" class="img-responsive"></div>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-8 single-right-left simpleCart_shelfItem">
            <h3><?php echo $rowSingle['title']; ?></h3>
            <p><span class="item_price"><?php echo $rowSingle['price']; ?></span>
                <del><?php echo $rowSingle['price']; ?></del>
            </p>
            <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
            </div>
            <div class="description">
                <h5><?php echo $rowSingle['description']; ?></h5>
                <form action="#" method="post">
                    <input type="text" placeholder="کدپستی" required="">
                    <input type="submit" value="محاسبه">
                </form>
            </div>
            <div class="color-quality">
                <div class="color-quality-right">
                    <h5>تعداد: </h5>
                    <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">۱</option>
                        <option value="null">۲</option>
                        <option value="null">۳</option>
                        <option value="null">۴</option>
                    </select>
                </div>
            </div>
            <div class="occasional">
                <h5>رنگ:</h5>
                <div class="colr ert">
                    <label class="radio"><input type="radio" name="radio" checked=""><i></i>آبی تیره</label>
                </div>
                <div class="colr">
                    <label class="radio"><input type="radio" name="radio"><i></i>آبی روشن</label>
                </div>
                <div class="colr">
                    <label class="radio"><input type="radio" name="radio"><i></i>قهوه‌ای تیره</label>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="occasion-cart">
                <div class="snipcart-details hvr-outline-out">
                    <form action="#" method="post">
                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button">
                    </form>
                </div>
            </div>
            <ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
                <li class="share">اشتراک گذاری:</li>
                <li><a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                    </a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <!-- /new_arrivals -->
        <div class="responsive_tabs_agileits">
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li>توضیحات محصول</li>
                    <li>نظرات کاربران</li>
                    <li>راهنمای انتخاب سایز</li>
                </ul>
                <div class="clearfix"></div>
                <div class="resp-tabs-container">
                    <!--/tab_one-->
                    <div class="tab1">

                        <div class="single_page_agile_its_w3ls">
                            <h6>کفش اسپرت مردانه Garner</h6>
                            <p>کفش‌های Garner دارای کیفیت بسیار بالایی میباشند و کفش مذکور دارای رویه و جنس داخلی چرم
                                طبیعی هستند.</p>
                            <p class="w3ls_para">جهت نگه‌داری از کالاهای تهیه شده از چرم، از واکس‌های غیر استاندارد
                                استفاده نشود و حتی المکان در صورت سطح روی کفش، بلافاصله آن را تمیز نمایید.</p>
                        </div>
                    </div>
                    <!--//tab_one-->
                    <div class="tab2">

                        <div class="single_page_agile_its_w3ls">
                            <div class="bootstrap-tab-text-grids">
                                <div class="bootstrap-tab-text-grid">
                                    <div class="bootstrap-tab-text-grid-left pull-right">
                                        <img src="_Content/images/t1.jpg" alt=" " class="img-responsive">
                                    </div>
                                    <div class="bootstrap-tab-text-grid-right pull-left">
                                        <ul>
                                            <li><a href="#">حسین عابدی</a></li>
                                            <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> پاسخ</a>
                                            </li>
                                        </ul>
                                        <p>با سلام و احترام و تشکر از سایت خوبتون لطفا با توجه به استقبال خوب از این
                                            برند، تنوع محصولات آن را افزایش دهید</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    ‌
                                </div>
                                <div class="add-review">
                                    <h4>افزودن دیدگاه</h4>
                                    <form action="#" method="post">
                                        <input type="text" name="Name" placeholder="نام و نام خانوادگی" required="Name">
                                        <input type="email" name="Email" placeholder="ایمیل" required="Email">
                                        <textarea name="Message" placeholder="متن دیدگاه" required=""></textarea>
                                        <input type="submit" value="ارسال">
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab3">

                        <div class="single_page_agile_its_w3ls">
                            <h6>نحوه انتخاب سایز مناسب</h6>
                            <p>از آنجا که قالب همه کفش ها یکسان نیست، پیدا کردن سایز مناسب به خصوص در خرید اینترنتی کفش،
                                کمی سخت به نظر می رسد. بامیلو برای حل این مشکل، علاوه بر ارائه راهنمای اندازه گیری پا و
                                انتخاب سایز، در قسمت ملاحظات محصول، بزرگی و کوچکی قالب کفش مورد نظر را آورده است تا
                                انتخابی مطمئن تر را برای شما فراهم سازد. همچنین در صورت هر گونه مغایرت در سایز امکان
                                بازگشت محصول به صورت رایگان برای شما وجود دارد.</p>
                            <p class="w3ls_para">توجه: در صورت تردید میان دو سایز، سایز بزرگ تر را انتخاب کنید، زیرا در
                                نهایت می توانید از کفی اضافه استفاده کنید.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //new_arrivals -->
        <?php
        }
        ?>
	  	<!--/slider_owl-->
	
			<div class="w3_agile_latest_arrivals">
			<h3 class="wthree_text_info">محصولات <span>جدید</span></h3>	
					  <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="_Content/images/w2.jpg" alt="" class="pro-image-front">
										<img src="_Content/images/w2.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
												</div>
											</div>
											<span class="product-new-top">جدید</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">تاپ بدون آستین آبی نفتی</a></h4>
										<div class="info-product-price">
											<span class="item_price">۱۲۰۰۰۰ تومان</span>
											<del>۱۵۰۰۰۰</del>
										</div>
										<div class="snipcart-details hvr-outline-out">
											<form action="#" method="post">
												<input type="submit" name="submit" value="افزودن به سبد خرید" class="button">
											</form>
										</div>
																			
									</div>
								</div>
							</div>
                       <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="_Content/images/w4.jpg" alt="" class="pro-image-front">
										<img src="_Content/images/w4.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
												</div>
											</div>
											<span class="product-new-top">جدید</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">شلوارک طرحدار کلاسیک</a></h4>
										<div class="info-product-price">
											<span class="item_price">۷۵۰۰۰ تومان</span>
											<del>۹۰۰۰۰</del>
										</div>
										<div class="snipcart-details hvr-outline-out">
											<form action="#" method="post">
												<input type="submit" name="submit" value="افزودن به سبد خرید" class="button">
											</form>
										</div>								
									</div>
								</div>
							</div>
						 <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="_Content/images/s6.jpg" alt="" class="pro-image-front">
										<img src="_Content/images/s6.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
												</div>
											</div>
											<span class="product-new-top">جدید</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">کفش اسپرت مردانه</a></h4>
										<div class="info-product-price">
											<span class="item_price">۱۸۰۰۰۰ تومان</span>
											<del>۲۵۰۰۰۰</del>
										</div>
										<div class="snipcart-details hvr-outline-out">
											<form action="#" method="post">
												<input type="submit" name="submit" value="افزودن به سبد خرید" class="button">
											</form>
										</div>								
									</div>
								</div>
						</div>
					   <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="_Content/images/w7.jpg" alt="" class="pro-image-front">
										<img src="_Content/images/w7.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
												</div>
											</div>
											<span class="product-new-top">جدید</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">جوراب ساق بلند نانو</a></h4>
										<div class="info-product-price">
											<span class="item_price">۱۸۰۰۰ تومان</span>
											<del>۲۷۰۰۰</del>
										</div>
										<div class="snipcart-details hvr-outline-out">
											<form action="#" method="post">
												<input type="submit" name="submit" value="افزودن به سبد خرید" class="button">
											</form>
										</div>						
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
					<!--//slider_owl-->
		         </div>
	        </div>
 </div>
<!--//single_page-->
<!--/Start-Service-->
<?php include('layouts/service.php'); ?>
<!--End-Service-->
<!-- footer -->
<?php include('layouts/footer.php'); ?>
<!-- End-Footer -->