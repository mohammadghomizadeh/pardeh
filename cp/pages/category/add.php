<form class="form" method="POST" action="">
    <div class="form-body">

        <h4 class="form-section"><i class="ft-file-text"></i> افزودن دسته بندی جدید</h4>

        <div class="form-group">
            <label for="companyName">عنوان دسته بندی</label>
            <input type="text" id="category_title" class="form-control" name="category_title">
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

                    <img src="uploads/blank.png" id="category_img" name="category_img" width="200" height="160" alt="">
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

        <button type="submit" id="submitsave" name="submitsave" class="btn btn-raised btn-raised btn-primary">
            <i class="fa fa-check-square-o"></i> ذخیره
        </button>
    </div>
</form>