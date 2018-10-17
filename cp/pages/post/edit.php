<?php
				$id = $_GET['id'];
				$rpost = $db->select("post","`id` = '$id'");
				foreach($rpost as $redit) {
					?>
                     <form class="form" method="POST" action="index.php?page=post/edit-save&id=<?php echo $redit['id']; ?>" enctype="multipart/form-data">
							<div class="form-body">
                            </br></br>
								<h4 class="form-section"><i class="ft-user"></i> ویرایش مطلب</h4>

								<div class="form-group">
									<label for="post_title">عنوان</label>
									<input id="post_title" class="form-control" value="<?php echo $redit['title']; ?>" name="post_title" type="text">
								</div>

								<div class="form-group">
                                    <label for="cat_post">دسته مطالب</label>
                                        <select id="cat_post" name="cat_post" class="form-control">
                                            <option value="news">اخبار</option>
                                            <option value="article">مقاله</option>
                                        </select>
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
                            <input type="file" class="custom-file-input" id="post_image1" name="post_image1">
                            <label class="custom-file-label" for="post_image1">انتخاب تصویر محصول</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="uploads/posts/<?php echo $redit['image']; ?>" id="post_img1" height="100" width="150">
            </div>
            <script type="text/javascript">
                function readURL1(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#post_img1').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $("#post_image1").change(function(){
                    readURL1(this);
                });
            </script>
        </div>
        <!-- EndImage1 -->
		<hr>
       
			<div class="form-group">
					<label for="post_description">توضیحات مطلب</label>
					<textarea id="post_description" rows="5" class="form-control" name="post_description">
						<?php echo $redit['description']; ?>
					</textarea>
								</div>
							</div>
								<div class="form-group">
                                        <input class="btn btn-raised btn-raised btn-primary" type="submit" id="submit" name="submit" value="ارسال"> 
										
                                        </div>
							
						</form>
						<?php
				}; ?>