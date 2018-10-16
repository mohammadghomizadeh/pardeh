

<?php
$id = $_GET['id'];
$resultproduct = $db->select("product","`id` = '$id'");
foreach($resultproduct as $rowedit) {
    ?>
    <form class="form" method="POST" action="index.php?page=product/edit-save&id=<?php echo $rowedit['id']; ?>" enctype="multipart/form-data">
        <div class="form-body">
            </br></br>
            <h4 class="form-section"><i class="ft-user"></i> ویرایش محصول </h4>

            <div class="form-group">
                <label for="product_title">نام محصول</label>
                <input id="product_title" class="form-control" name="product_title" value="<?php echo $rowedit['title']; ?>" type="text">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="product_category"> دسته بندی محصولات</label>
                        <select id="product_category" name="product_category" class="form-control">
                            <?php
                            $resultcategory = $db->select("category","`type` = 'product'");
                            foreach($resultcategory as $rowcategory)
                            {
                                ?>

                                <option value="<?php echo $rowcategory['id'];?>"><?php echo $rowcategory['title'];?></option>
                                <?php
                            }
                                ?>
                        </select>
                    </div>
                </div>

            </div>
            <div class="form-group">
                <label for="product_price">قیمت محصول(ریال)</label>
                <div class="input-group">

                    <div class="input-group-prepend">
                        <span class="input-group-text">000.</span>
                    </div>
                    <input value="<?php echo $rowedit['price']; ?>" type="text" class="form-control" id="product_price"
                           aria-label="Amount (to the nearest dollar)" name="product_price">
                    <div class="input-group-append">
                        <span class="input-group-text">ریال</span>
                    </div>
                </div>
            </div>
            <!-- image1 -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="file"> تصویر اصلی</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">بارگزاری</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="product_image1" name="product_image1">
                                <label class="custom-file-label" for="product_image1">انتخاب تصویر محصول</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="uploads/products/<?php echo $rowedit['image1']; ?>" id="img_product1" height="100" width="150">
                </div>
                <script type="text/javascript">
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#img_product1').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    $("#product_image1").change(function () {
                        readURL(this);
                    });
                </script>
            </div>
            <!-- EndImage1 -->
            <hr>
            <!-- image2 -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="file"> تصویر اصلی</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">بارگزاری</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="product_image2" name="product_image2">
                                <label class="custom-file-label" for="product_image2">انتخاب تصویر محصول</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="uploads/products/<?php echo $rowedit['image2']; ?>" id="img_product2" height="100" width="150">
                </div>
                <script type="text/javascript">
                    function readURL2(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#img_product2').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    $("#product_image2").change(function () {
                        readURL2(this);
                    });
                </script>
            </div>
            <!-- EndImage1 -->
            <hr>
            <!-- image3 -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="file"> تصویر اصلی</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">بارگزاری</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="product_image3" name="product_image3">
                                <label class="custom-file-label" for="product_image3">انتخاب تصویر محصول</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="uploads/products/<?php echo $rowedit['image3']; ?>" id="img_product3" height="100" width="150">
                </div>
                <script type="text/javascript">
                    function readURL3(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#img_product3').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    $("#product_image3").change(function () {
                        readURL3(this);
                    });
                </script>
            </div>
            <!-- EndImage3 -->
            <hr>
            <!-- image4 -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="file"> تصویر اصلی</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">بارگزاری</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="product_image4" name="product_image4">
                                <label class="custom-file-label" for="product_image4">انتخاب تصویر محصول</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="uploads/products/<?php echo $rowedit['image4']; ?>" id="img_product4" height="100" width="150">
                </div>
                <script type="text/javascript">
                    function readURL4(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#img_product4').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    $("#product_image4").change(function () {
                        readURL4(this);
                    });
                </script>
            </div>
            <!-- EndImage4 -->
            <div class="form-group">
                <label for="product_description">توضیحات محصول</label>
                <textarea id="product_description" rows="5" class="form-control" name="product_description">
                    <?php echo $rowedit['description']; ?>
                </textarea>
            </div>
        </div>

        <div class="form-actions">

            <button type="submit_editsave" class="btn btn-raised btn-raised btn-primary">
                <i class="fa fa-check-square-o"></i> ذخیره
            </button>
        </div>
    </form>
    <?php
}
?>