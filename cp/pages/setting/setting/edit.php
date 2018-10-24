</br></br></br></br></br>
<div class="box-header with-border">
              <h3 class="box-title">تنظیمات سایت</h3>
            </div>
            <hr>
            <hr>
            <?php
                $result = $db->select("setting","`type` = 'setting'");
                foreach($result as $row){
                ?>
            <form method="POST" action="index.php?page=setting/setting/save&id=<?php echo $row['id']; ?>" enctype="multipart/form-data">

<div class="form-group">
    <label>عنوان سایت </label>
    <input type="text" class="form-control"  name="sitetitle" id="sitetitle" value="<?php echo $row['title']; ?>">
</div>
<div class="form-group">
    <label>توضیحات سایت</label>
    <input type="text" class="form-control"  name="sitedescription" id="sitedescription" value="<?php echo $row['description']; ?>">
</div>

<div class="form-group">
    <label>لوگوی سایت</label>
    <input type="file" class="form-control"  name="sitelogo" id="sitelogo" value="<?php echo $row['logo']; ?>">
    <img src="uploads/site/<?php echo $row['logo']; ?>"  width="100" height="100">
</div>
<div class="form-group">
    <label>آیکون سایت</label>
    <input type="file" class="form-control"  name="siteicon" id="siteicon" value="<?php echo $row['icon']; ?>">
    <img src="uploads/site/<?php echo $row['icon']; ?>" width="40" height="40">
</div>
<label>اسکریپت هدر</label>
<div class="form-group">
    <textarea  cols="100" rows="10" name="headerscript" id="headerscript"><?php echo $row['headscript']; ?></textarea>
</div>
<label>اسکریپت فوتر</label>
<div class="form-group">
    <textarea  cols="100" rows="10" name="footerscript" id="footerscript"><?php echo $row['footerscript']; ?></textarea>
</div>
    
<button type="submit" class="btn btn-raised btn-raised btn-primary">
            <i class="fa fa-check-square-o"></i> ذخیره
        </button>
</form>
<?php

};
    ?>
