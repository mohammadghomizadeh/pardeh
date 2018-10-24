</br></br></br></br></br>
<div class="box-header with-border">
              <h3 class="box-title">ویرایش  تماس با ما</h3>
            </div>
            <hr>
            <?php
                     $result = $db->select("setting","`type` = 'contactus' LIMIT 1");
                    foreach($result as $row){
                ?>
      <form method="POST" action="index.php?page=setting/contact-us/save&id=<?php echo $row['id'];?>" enctype="multipart/form-data">
                <div class="form-control">
                <label>متن تماس با ما</label>
                
                <div class="form-group">
                    <label>آدرس </label>
                    <input type="text" class="form-control"  name="address" id="address" value="<?php echo $row['address']; ?>">
                </div>
                <div class="form-group">
                    <label>تلفن تماس </label>
                    <input type="text" class="form-control"  name="tell" id="tell" value="<?php echo $row['phone']; ?>">
                </div>
                <div class="form-group">
                    <label>آدرس ایمیل </label>
                    <input type="text" class="form-control"  name="email" id="email" value="<?php echo $row['email']; ?>">
                </div>

                 <div class="form-group">
			        <label for="map">iframe نقشه با </label>
			        <textarea id="map" rows="5" class="form-control" name="map"><?php echo $row['map']; ?></textarea>
		        </div>
                </div>
    
              
                </div>
                <button type="submit" class="btn btn-raised btn-raised btn-primary">
            <i class="fa fa-check-square-o"></i> ذخیره
        </button>
</form>
<?php }; ?>
