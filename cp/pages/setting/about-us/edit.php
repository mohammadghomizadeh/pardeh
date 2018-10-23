</br></br></br></br></br></br>
<div class="box-header with-border">
              <h3 class="box-title">ویرایش  درباره ما</h3>
            </div>
            <hr>
      <form method="POST" action="index.php?page=setting/about-us/edit&id=<?php echo $row['id'];  ?>" enctype="multipart/form-data">
           
              </div>
                <div class="form-group">
                <label>متن درباره ما</label>
                <?php
                    $result = $db->run("SELECT * FROM `setting` WHERE `type` = 'aboutus' LIMIT 1");
                    foreach($result as $row){
                ?>
                <textarea id="editor" name="editor" rows="10" cols="80">
                <?php echo $row['description'];?>
                </textarea>
                <?php }; ?>
                </div>
                <div class="form-group">
                <input class="btn bg-olive btn-flat margin" type="submit" value="ثبت تغییرات"> 
              </div>
              
</form>
