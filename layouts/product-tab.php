<div class="new_arrivals_agile_w3ls_info">
    <div class="container">
        <h3 class="wthree_text_info">محصولات
            <span>جدید</span>
        </h3>
        <div id="horizontalTab">
            <ul class="resp-tabs-list">
                <?php
                $resulttab = $db->select("category","`type` = 'product'");
                foreach($resulttab as $rowtab)
                {
                    ?>
                    <li><?php echo $rowtab['title']; ?></li>
                <?php

                }
                ?>


            </ul>
            <div class="clearfix"></div>
            <div class="resp-tabs-container">
                <!--/tab_one-->
                <div class="tab1">
                <?php
                $resulttab = $db->select("product");
                foreach($resulttab as $rowproduct)
                {
                    ?>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="cp/uploads/products/<?php echo $rowproduct['image1'];?>" alt="" class="pro-image-front">
                                <img src="cp/uploads/products/<?php echo $rowproduct['image2'];?>" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="product-single.php?id=<?php echo $rowproduct['id'];?>" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>
                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="product-single.php?id=<?php echo $rowproduct['id'];?>"><?php echo $rowproduct['title'];?></a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price"><?php echo $rowproduct['price'];?></span>
                                    <del><?php echo $rowproduct['price'];?></del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
               
                   
                   
                    <div class="clearfix"></div>
                </div>
                <!--//tab_one-->
                <!--/tab_two-->
                <div class="tab2">
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/w1.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/w1.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">دامن راه راه سیاوود</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۸۰۰۰۰ تومان</span>
                                    <del>۹۵۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
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
                                <h4>
                                    <a href="single.html">تاپ بدون آستین آبی نفتی</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۱۲۰۰۰۰ تومان</span>
                                    <del>۱۵۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/w3.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/w3.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">شلوار جین جذب</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۱۱۵۰۰۰ تومان</span>
                                    <del>۱۶۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
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
                                <h4>
                                    <a href="single.html">شلوارک طرحدار کلاسیک</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۷۵۰۰۰ تومان</span>
                                    <del>۹۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/w5.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/w5.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">شلوار ورزشی نایک</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۲۳۰۰۰۰ تومان</span>
                                    <del>۲۸۵۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/w6.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/w6.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">ساعت مچی کاسیو</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۴۸۰۰۰۰ تومان</span>
                                    <del>۵۳۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
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
                                <h4>
                                    <a href="single.html">جوراب ساق بلند نانو</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۱۸۰۰۰ تومان</span>
                                    <del>۲۷۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/w8.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/w8.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">شلوارک ورزشی Reebok</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۲۴۰۰۰۰ تومان</span>
                                    <del>۳۰۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--//tab_two-->
                <div class="tab3">

                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/b1.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/b1.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">کیف دستی لپتاپی</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۲۰۰۰۰۰ تومان</span>
                                    <del>۲۸۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/b2.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/b2.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">کوله پشتی Puma</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۱۵۰۰۰۰ تومان</span>
                                    <del>۱۸۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/b3.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/b3.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">کوله پشتی لپتاپی</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۱۹۵۰۰۰ تومان</span>
                                    <del>۲۴۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/b4.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/b4.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>
                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">کیف مسافرتی versace</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۲۳۰۰۰۰ تومان</span>
                                    <del>۳۰۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/b5.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/b5.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">کیف دستی زنانه</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۸۵۰۰۰ تومان</span>
                                    <del>۱۲۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/b6.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/b6.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>
                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">کیف دستی طرح پروانه</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۹۰۰۰۰ تومان</span>
                                    <del>۱۳۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/b7.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/b7.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">کیف دستی چرم سوئیسی</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۲۴۵۰۰۰ تومان</span>
                                    <del>۳۰۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/b8.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/b8.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">کیف دستی دیزاین نوبل</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۱۱۰۰۰۰ تومان</span>
                                    <del>۱۸۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="tab4">

                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/s1.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/s1.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">کفش کلاسیک ایتالیا</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۴۰۰۰۰۰ تومان</span>
                                    <del>۴۸۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/s2.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/s2.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">کفش رانینگ نایک</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۴۰۰۰۰۰ تومان</span>
                                    <del>۴۸۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/s3.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/s3.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">کفش اسپورت مردانه</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۹۵۰۰۰ تومان</span>
                                    <del>۱۴۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/s4.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/s4.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>
                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">صندل راحتی طرحدار</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۳۵۰۰۰ تومان</span>
                                    <del>۵۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/s5.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/s5.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">کفش زنانه MooWalk</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۸۵۰۰۰ تومان</span>
                                    <del>۱۲۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
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
                                <h4>
                                    <a href="single.html">کفش اسپورت مردانه</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۱۸۰۰۰۰ تومان</span>
                                    <del>۲۵۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/s7.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/s7.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>
                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">کفش کژوال مردانه</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۱۹۰۰۰۰ تومان</span>
                                    <del>۲۶۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="_Content/images/s8.jpg" alt="" class="pro-image-front">
                                <img src="_Content/images/s8.jpg" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">مشاهده محصول</a>
                                    </div>
                                </div>
                                <span class="product-new-top">جدید</span>

                            </div>
                            <div class="item-info-product ">
                                <h4>
                                    <a href="single.html">کفش پاشنه بلند زنانه</a>
                                </h4>
                                <div class="info-product-price">
                                    <span class="item_price">۱۴۰۰۰۰ تومان</span>
                                    <del>۱۹۰۰۰۰</del>
                                </div>
                                <div class="snipcart-details hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="submit" name="submit" value="افزودن به سبد خرید" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>