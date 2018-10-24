</br></br></br></br></br>
<div class="box-header with-border">
              <h3 class="box-title">ویرایش  درباره ما</h3>
            </div>
            <hr>
            <?php
                $result = $db->select("setting","`type` = 'aboutus'");
                foreach($result as $row){
                ?>
      <form method="POST" action="index.php?page=setting/about-us/save&id=<?php echo $row['id'];  ?>" enctype="multipart/form-data">
           
              </div>
                <div class="form-control">
                <label>متن درباره ما</label>
               
                <textarea id="aboutdescript" name="aboutdescript" rows="10" cols="80">
                <?php echo $row['description'];?>
                </textarea>
             
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="file"> تصویر </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">بارگذاری</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="img_about" name="img_about">
                            <label class="custom-file-label" for="img_about">انتخاب تصویر </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            <img src="uploads/about/<?php echo $row['image']; ?>" id="image_about" height="100" width="150">
            </div>
            <script type="text/javascript">
                function readURL1(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#image_about').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $("#img_about").change(function(){
                    readURL1(this);
                });
            </script>
        </div>
    
               
                </div>
                <button type="submit" class="btn btn-raised btn-raised btn-primary">
            <i class="fa fa-check-square-o"></i> ذخیره
        </button>
</form>
<?php }; ?>
