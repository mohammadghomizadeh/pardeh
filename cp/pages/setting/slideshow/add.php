

 </br></br></br></br></br></br>
        <form  method="POST" action="index.php?page=setting/slideshow/save" enctype="multipart/form-data">
        <!--image1-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <label for="slide_title">عنوان اسلاید</label>
                <input id="slide_title" class="form-control" name="slide_title" type="text"> 
                    <label for="file"> تصاویر اسلاید شو</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">بارگذاری</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image_slide" name="image_slide">
                            <label class="custom-file-label" for="image_slide">تصویر اسلاید شو</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="uploads/blank.png" id="img_slide" height="100" width="150">
            </div>
            <script type="text/javascript">
                function readURL1(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#img_slide').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $("#image_slide").change(function(){
                    readURL1(this);
                });
            </script>
        </div>
        <!-- EndImage1 -->
        <div class="form-group">
                <input class="btn btn-raised btn-raised btn-primary" type="submit" id="submit" name="submit" value="ارسال"> 
			</div>
        </div>

   