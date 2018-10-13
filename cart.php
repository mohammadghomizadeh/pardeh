<?php include('layouts/head-script.php');  ?>
<!-- header -->
<?php include('layouts/header.php'); ?>
<!-- //Modal2 -->
<?php include('layouts/main-menu.php'); ?>
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
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
<!-- Content --------------------------------------------->

<div class="cartshop">

    <table style="width:100%" cellspacing="3px">
        <tr>
            <th>تصویر</th>
            <th>نام محصول</th>
            <th>قیمت واحد</th>
            <th>متراژ</th>
            <th>قیمت</th>
            <th>عملیات</th>
        </tr>
        <tr>
            <td>
                <img src="_Content/images/b5.jpg" width="100" height="100" alt="">
            </td>
            <td>کیف مجلسی زنانه با چرم هندی</td>
            <td>1800000</td>
            <td>50متر</td>
            <td>185700000</td>
            <td>
                <button type="submit" class="btndel"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
            </td>
        </tr>


    </table>
    <table id="tbltotal" style="width:100%" cellspacing="3px">
        <tr>
            <td>
               قیمت کل : <span>15419564546 تومان</span>
            </td>

        <tr class="btninput">
            <td>
                <input type="submit" name="submit-pay" id="submit-pay" value="پرداخت نهایی">
                <input type="submit" name="submit-gotoshop" id="submit-gotoshop" value="بازگشت به فروشگاه">
            </td>
        </tr>
    </table>

</div>
<br>
<br>
<br>
<br>
<br>

<!-- End-Content --------------------------------------------->
<!--/Start-Service-->
<?php include('layouts/service.php'); ?>
<!--End-Service-->
<!-- footer -->
<?php include('layouts/footer.php'); ?>
<!-- End-Footer -->