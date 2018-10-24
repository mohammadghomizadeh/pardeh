<?php include('layouts/head-script.php');  ?>
<!-- header -->
<?php include('layouts/header.php'); ?>
<!-- //header-bot -->
<?php include('layouts/main-menu.php'); ?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>دسته بندی محصولات </h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="index.php">خانه</a><i>|</i></li>
                    <li>دسته بندی محصولات</li>
                </ul>
            </div>
        </div>
        <!--//w3_short-->
    </div>
</div>

<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <!-- mens -->
        <div class="col-md-4 products-left">
            <div class="filter-price">
                <h3>فیلتر براساس قیمت<span>(تومان)</span></h3>
                <ul class="dropdown-menu6">
                    <li>
                        <div id="slider-range"></div>
                        <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                    </li>
                </ul>
            </div>


            <?php //include('layouts/cat-sidebar.php'); ?>
            <?php //include('layouts/poll.php'); ?>

            <div class="clearfix"></div>
        </div>

        <div class="col-md-8 products-right">
            <h5>نمایش <span>محصولات</span></h5>
            <div class="sort-grid">
                <div class="sorting">
                    <h6>مرتب سازی</h6>
                    <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">جدیدترین</option>
                        <option value="null">نام(صعودی)</option>
                        <option value="null">نام(نزولی)</option>
                        <option value="null">گرانترین</option>
                        <option value="null">ارزانترین</option>
                        <option value="null">پر بازدیدترین</option>
                        <option value="null">محبوبترین</option>
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="sorting">
                    <h6>نمایش</h6>
                    <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">۷</option>
                        <option value="null">۱۴</option>
                        <option value="null">۲۸</option>
                        <option value="null">۳۵</option>
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="men-wear-top">


                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <div class="single-pro">
            <!-- Product -->
            <?php
            $cat_id_product = $_GET['id'];

            $resultshowproduct = $db->select("product","`cat_id` = '$cat_id_product'");
            foreach($resultshowproduct as $rowshow) {
                ?>
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="cp/uploads/products/<?php echo $rowshow['image1'];?>" alt="<?php echo $rowshow['title'];?>" class="pro-image-front">
                            <img src="cp/uploads/products/<?php echo $rowshow['image2'];?>" alt="<?php echo $rowshow['title'];?>" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="product-single.php?id=<?php echo $rowshow['id'];?>" class="link-product-add-cart">مشاهده محصول</a>
                                </div>
                            </div>
                            <span class="product-new-top">جدید</span>
                        </div>
                        <div class="item-info-product ">
                            <h4><a href="product-single.php?id=<?php echo $rowshow['id'];?>"><?php echo $rowshow['title'];?></a></h4>
                            <div class="info-product-price">
                                <span class="item_price"><?php echo $rowshow['price'];?></span>
                                <del><?php echo $rowshow['price'];?></del>
                            </div>
                            <div class="snipcart-details hvr-outline-out">
                                <form action="#" method="post">
                                    <input type="submit" name="submit" value="افزودن به سبد خرید" class="button"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //mens -->
<!--/Start-Service-->
<?php include('layouts/service.php'); ?>
<!--End-Service-->
<!-- footer -->
<?php include('layouts/footer.php'); ?>
<!-- End-Footer -->
