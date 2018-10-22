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
            <?php
            $user = getRealUserIp();
            $resultCart = $db->select("cart","`user_id` = '$user'");
            foreach($resultCart as $rowcart) {

            ?>
            <tr>
                <td>
                    <img src="cp/uploads/products/<?php echo $rowcart['img']; ?>" width="100" height="100" alt="">
                </td>
                <td><?php echo $rowcart['title']; ?></td>
                <td>
                    <?php
                    $pid = $rowcart['product_id'];
                    $rm = $db->select("product","`id` = '$pid'");
                    foreach($rm as $rowm)
                    {
                        echo $rowm['price'];
                    }
                    ?>

                </td>
                <td><?php echo $rowcart['meter']; ?></td>
                <td><?php echo $rowcart['total']; ?></td>
                <td>
                    <a href="delete.php?id=<?php echo $rowcart['id']; ?>" class="btndel"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                </td>
            </tr>

                <?php
            };
            ?>
        </table>

    <table id="tbltotal" style="width:100%" cellspacing="3px">
        <tr>
            <?php
            $ResultTotal = $db->run("SELECT total FROM `cart` WHERE `user_id` = '$user'");
            $toto = 0;
            foreach($ResultTotal as $rowTotal) {
                $toto += $rowTotal['total'];
            }
            ?>
            <td>
               تومان : <?php echo($toto); ?>
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