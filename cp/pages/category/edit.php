

<?php
$id = $_GET['id'];
$resultcategory = $db->select("category","`id` = '$id'");
foreach($resultcategory as $rowedit) {
    ?>
    <form class="form" method="POST" action="index.php?page=category/save&id=<?php echo $rowedit['id']; ?>" enctype="multipart/form-data">
        <div class="form-body">

            <h4 class="form-section"><i class="ft-file-text"></i>ویرایش دسته بندی</h4>

            <div class="form-group">
                <label for="companyName">عنوان دسته بندی</label>
                <input type="text" id="category_title" class="form-control" value="<?php echo $rowedit['title'];  ?>" name="category_title">
            </div>
            <div class="form-group">
                <label for="category_type">دسته بندی اصلی</label>
                <select id="category_type" name="category_type" class="form-control">
                    <option value="product">محصولات</option>
                    <option value="portfolio">نمونه کار</option>
                    <option value="news">اخبار</option>
                    <option value="article">مقاله</option>
                </select>
            </div>
            <div class="row">


                <div class="col-md-6">
                    <div class="form-group">
                        <label>Select File</label>
                        <input type="file" class="form-control-file" id="category_image" name="category_image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                        <img src="uploads/categorys/<?php if(empty($rowedit['image'])){echo "blank.php";}else{echo $rowedit['image'];} ?>" id="category_img" name="category_img" width="200" height="160" alt="">
                        <script type="text/javascript">
                            function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function (e) {
                                        $('#category_img').attr('src', e.target.result);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                            $("#category_image").change(function(){
                                readURL(this);
                            });
                        </script>



                    </div>
                </div>
            </div>

        </div>

        <div class="form-actions">

            <button type="submit" id="submitedit" name="submitedit" class="btn btn-raised btn-raised btn-primary">
                <i class="fa fa-check-square-o"></i> ذخیره
            </button>
        </div>
    </form>
    <?php
}
?>