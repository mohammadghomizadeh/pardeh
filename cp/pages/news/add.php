
	<form class="form" method="POST" action="index.php?page=news/save" enctype="multipart/form-data">
							<div class="form-body">
                            </br></br>
								<h4 class="form-section"><i class="ft-user"></i> افزودن خبر </h4>

								<div class="form-group">
									<label for="news_title">عنوان</label>
									<input id="news_title" class="form-control" name="news_title" type="text">
								</div>

								<div class="row">
									<div class="col-md-6">
									
										<div class="form-group">
											<label for="projectinput5"> دسته  خبر</label>
											
											<select id="news_cat_id" name="news_cat_id" class="form-control">
											<?php

											  $resultcat = $db->select("category","`type` = 'news'");
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
                            <input type="file" class="custom-file-input" id="news_image1" name="news_image1">
                            <label class="custom-file-label" for="news_image1">انتخاب تصویر محصول</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="uploads/blank.png" id="news_img1" height="100" width="150">
            </div>
            <script type="text/javascript">
                function readURL1(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#news_img1').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $("#news_image1").change(function(){
                    readURL1(this);
                });
            </script>
        </div>
        <!-- EndImage1 -->
		<hr>
		<div class="form-group">
			<label for="news_description">توضیحات خبر</label>
			<textarea id="news_description" rows="5" class="form-control" name="news_description"></textarea>
		</div>
		</div>
			<div class="form-group">
                <input class="btn btn-raised btn-raised btn-primary" type="submit" id="submit" name="submit" value="ارسال"> 
			</div>
							
</form>