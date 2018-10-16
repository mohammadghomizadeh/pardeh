
<form class="form" method="POST" action="index.php?page=portfolio/category/save" enctype="multipart/form-data">
							<div class="form-body">
                            </br></br>
								<h4 class="form-section"><i class="ft-user"></i> افزودن دسته نمونه کار</h4>

								<div class="form-group">
									<label for="companyName">عنوان</label>
									<input id="companyName" class="form-control" name="company" type="text">
								</div>

							
							<div class="row">
									<div class="col-md-6">
									
										<div class="form-group">
											<label for="projectinput5"> دسته مادر</label>
											
											<select id="portfolio_cat_id" name="portfolio_cat_id" class="form-control">
											<?php

											  $resultcat = $db->select("category","`type` = 'portfolio'");
											  foreach($resultcat as $rows) {
											?>
												<option value="<?php echo $rows["id"];?>" ><?php echo $rows['title']; ?></option>
											<?php }; ?>
											</select>
											  
										</div>
									</div>

								</div>

								<!--image1-->
								<div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="file"> تصویر اصلی</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">بارگذاری</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="portfolio_image1" name="portfolio_image1">
                            <label class="custom-file-label" for="portfolio_image1">انتخاب تصویر محصول</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="uploads/blank.png" id="portfolio_img1" height="100" width="150">
            </div>
            <script type="text/javascript">
                function readURL1(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#portfolio_img1').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $("#portfolio_image1").change(function(){
                    readURL1(this);
                });
            </script>
        </div>
        <!-- EndImage1 -->
                                
							</div>

							<div class="form-group">
                                        <input class="btn btn-raised btn-raised btn-primary" type="submit" id="submit" name="submit" value="ارسال"> 
										
                                        </div>
						</form>