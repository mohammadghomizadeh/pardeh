<?php include('layouts/head-script.php');  ?>
<!-- header -->
<?php include('layouts/header.php'); ?>
<!-- //header-bot -->
<?php include('layouts/main-menu.php'); ?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>پوشاک <span>آقایان</span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">خانه</a><i>|</i></li>
								<li>پوشاک مردانه</li>
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







			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="banner_bottom_agile_info team">
    <div class="container">
        <h3 class="wthree_text_info">
            اخبار سایت
        </h3>
        <?php 
        $resultpost=$db->select("post", "`type` = 'news'");
        foreach ($resultpost as $row) {
       ?>
        <div class="inner_w3l_agile_grids">
            <div class="col-md-3 team-grids">
                <div class="thumbnail team-w3agile">
                    <img src="cp/uploads/posts/<?php echo $row['image']; ?>" class="img-responsive" alt="<?php echo $row['title'] ?>">
                    <div class="social-icons team-icons right-w3l fotw33">
                        <div class="caption">
                            <h4><a href="post-single.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h4>
                            <p><?php echo substr($row['description'],100); ?></p>
                        </div>
                    <a href="index.php?page=post-single">    <input class="btn btn-raised btn-raised btn-primary" type="submit" id="submit" name="submit" value="نمایش"> </a>
                    </div>
                </div>
            </div>
        <?php }; ?>
            
            
            
                      
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
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
