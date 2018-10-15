<form class="form" method="POST" action="index.php?page=portfolio/save" enctype="multipart/form-data">
							<div class="form-body">
                            </br></br>
								<h4 class="form-section"><i class="ft-user"></i> افزودن نمونه کار</h4>

								<div class="form-group">
									<label for="portfolio_title">عنوان</label>
									<input id="portfolio_title" class="form-control" name="portfolio_title" type="text">
								</div>

								<div class="row">
									<div class="col-md-6">
									
										<div class="form-group">
											<label for="projectinput5"> دسته نمونه کار</label>
											
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

								<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text"> تصویر اول</span>
											</div>
											<div class="custom-file">
												<input class="custom-file-input" name="portfolio_image1" id="portfolio_image1" type="file">
												<label class="custom-file-label" for="portfolio_image1"> انتخاب فایل</label>
											</div>
										</div>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text"> تصویر دوم</span>
											</div>
											<div class="custom-file">
												<input class="custom-file-input" name="portfolio_image2" id="portfolio_image2" type="file">
												<label class="custom-file-label" for="portfolio_image2"> انتخاب فایل</label>
											</div>
										</div>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text"> تصویر سوم</span>
											</div>
											<div class="custom-file">
												<input class="custom-file-input" name="portfolio_image3" id="portfolio_image3" type="file">
												<label class="custom-file-label" for="portfolio_image3">انتخاب فایل</label>
											</div>
										</div>

								<div class="form-group">
									<label for="portfolio_description">توضیحات نمونه کارها</label>
									<textarea id="portfolio_description" rows="5" class="form-control" name="portfolio_description"></textarea>
								</div>
							</div>

						
								
								<div class="form-group">
                                        <input class="btn btn-raised btn-raised btn-primary" type="submit" id="submit" name="submit" value="ارسال"> 
										
                                        </div>
							
						</form>