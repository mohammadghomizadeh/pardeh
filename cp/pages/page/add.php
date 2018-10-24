
<form class="form" method="POST" action="index.php?page=page/save" enctype="multipart/form-data">
    <div class="form-body">
        </br></br>
        <h4 class="form-section"><i class="ft-user"></i> افزودن صفحه </h4>

        <div class="form-group">
            <label for="page_title">عنوان</label>
            <input id="page_title" class="form-control" name="page_title" type="text">
        </div>



        <hr>
        <div class="form-group">
            <label for="page_description">محتوا</label>
            <textarea id="page_description" rows="5" class="form-control" name="page_description"></textarea>
        </div>
    </div>
    <div class="form-group">
        <input class="btn btn-raised btn-raised btn-primary" type="submit" id="submit" name="submit" value="ارسال">
    </div>

</form>