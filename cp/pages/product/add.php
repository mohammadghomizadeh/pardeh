


<form class="form" method="POST" action="index.php?page=product/save" enctype="multipart/form-data">
    <div class="form-body">
        </br></br>
        <h4 class="form-section"><i class="ft-user"></i> افزودن محصول جدید</h4>

        <div class="form-group">
            <label for="product_title">نام محصول</label>
            <input id="product_title" class="form-control" name="product_title" type="text">
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product_category"> دسته بندی محصولات</label>
                    <select id="product_category" name="product_category" class="form-control">

                        <option value="1">پرده2</option>
                        <option value="2">پرده 3</option>
                        <option value="3">پرده4</option>
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
                <input type="text" class="form-control" id="product_price" aria-label="Amount (to the nearest dollar)" name="product_price">
                <div class="input-group-append">
                    <span class="input-group-text">ریال</span>
                </div>
            </div>
        </div>

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
        <div class="form-group">
            <label for="file">تصویر دوم محصول</label>
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
        <div class="form-group">
            <label for="file">تصویر سوم محصول</label>
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
        <div class="form-group">
            <label for="file">تصویر چهارم محصول</label>
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
        <div class="form-group">
            <label for="product_description">توضیحات محصول</label>
            <textarea id="product_description" rows="5" class="form-control" name="product_description"></textarea>
        </div>
    </div>

    <div class="form-actions">
        <button type="submitcancel" class="btn btn-raised btn-raised btn-warning mr-1">
            <i class="ft-x"></i> لغو
        </button>
        <button type="submit_addsave" class="btn btn-raised btn-raised btn-primary">
            <i class="fa fa-check-square-o"></i> ذخیره
        </button>
    </div>
</form>