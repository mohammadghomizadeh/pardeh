
<form class="form" method="POST" action="index.php?page=page/save" enctype="multipart/form-data">
    <div class="form-body">
        </br></br>
        <h4 class="form-section"><i class="ft-user"></i> افزودن صفحه </h4>

        <div class="form-group">
            <label for="page_title">عنوان</label>
            <input id="page_title" class="form-control" name="page_title" type="text">
        </div>
        <div class="col-md-6 col-12">
            <div class="px-6">
                <p>محل قرار گیری صفحه:</p>
                <fieldset class="form-group position-relative">
                    <select class="form-control form-control-md" id="page_type" name="page_type">
                        <option selected="">منوی اصلی یا منوی فوتر ؟</option>
                        <option value="head">منوی اصلی</option>
                        <option value="footer">منوی فوتر</option>
                    </select>
                </fieldset>
            </div>
        </div>


        <hr>
        <div class="form-group">
            <label for="page_description">محتوا</label>
            <textarea id="page_content" rows="5" class="form-control" name="page_content"></textarea>
        </div>
    </div>
    <div class="form-group">
        <input class="btn btn-raised btn-raised btn-primary" type="submit" id="addpage" name="addpage" value="ارسال">
    </div>

</form>