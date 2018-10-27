</br></br></br></br></br>
<div class="box-header with-border">
              <h3 class="box-title">تنظیمات سایت</h3>
            </div>
            <hr>
            <hr>
            <?php
                $result = $db->select("setting","`type` = 'main-page' LIMIT 4");
                foreach($result as $row){
                ?>
            <form method="POST" action="index.php?page=setting/main-page/save&id=<?php echo $row['id']; ?>" enctype="multipart/form-data">

<div class="form-group">
    <label>عنوان اول </label>
    <input type="text" class="form-control"  name="sitetitle" id="sitetitle" value="<?php echo $row['title']; ?>">
    <textarea  cols="100" rows="10" name="headerscript" id="headerscript"><?php echo $row['description']; ?></textarea>
</div>
<div class="form-group">
    <label>عنوان دوم</label>
    <input type="text" class="form-control"  name="sitetitle" id="sitetitle" value="<?php echo $row['title']; ?>">
    <textarea  cols="100" rows="10" name="headerscript" id="headerscript"><?php echo $row['description']; ?></textarea>
</div>

<div class="form-group">
    <label>عنوان سوم</label>
    <input type="text" class="form-control"  name="sitetitle" id="sitetitle" value="<?php echo $row['title']; ?>">
    <textarea  cols="100" rows="10" name="sitedescription" id="sitedescription"><?php echo $row['description']; ?></textarea>
</div>
<div class="form-group">
    <label>عنوان چهارم</label>
    <input type="text" class="form-control"  name="sitetitle" id="sitetitle" value="<?php echo $row['title']; ?>">
    <textarea  cols="100" rows="10" name="sitedescription" id="sitedescription"><?php echo $row['description']; ?></textarea>
</div>
    
<button type="submit" class="btn btn-raised btn-raised btn-primary">
            <i class="fa fa-check-square-o"></i> ذخیره
        </button>
</form>
<?php

};
    ?>
