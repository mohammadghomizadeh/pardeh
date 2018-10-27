</br></br></br></br></br>
<div class="box-header with-border">
              <h3 class="box-title">تنظیمات صفحه اصلی</h3>
            </div>
            <hr>
            <hr>
          
            <form method="POST" action="index.php?page=setting/main-page/save&id=<?php echo $row['id']; ?>" enctype="multipart/form-data">
            <?php
                $result = $db->select("setting","`type` = 'main-page' LIMIT 4");
                foreach($result as $row){
                ?>
                <div class="form-group">
                    <label>سرویس ها</label>
                    <input type="text" class="form-control"  name="sitetitle" id="sitetitle" value="<?php echo $row['title']; ?>">
                    <textarea  cols="100" rows="10" name="sitedescription" id="sitedescription"><?php echo $row['description']; ?></textarea>
                </div>
              
            <?php
                };
            ?>
            
           
            <!----------image bottom slider -------->
            
            <div class="form-group">
                 <label for="companyName">تصویر زیر اسلایدر سمت راست</label>
                </div>
                <div class="form-group">
                    <label for="category_type">دسته بندی </label>
                     <select id="category_type" name="category_type" class="form-control">
                     <?php
                $result = $db->select("category","`type` = 'product'");
                foreach($result as $rows){
                ?>
                        <option value="product"><?php echo $rows['title']; ?></option>
                        <?php };?>
                    </select>
                </div>
                <div class="form-group">
                 <label for="companyName">تصویر زیر اسلایدر چپ </label>
                </div>
             
                <div class="form-group">
                    <label for="category_type">دسته بندی </label>
                     <select id="category_type" name="category_type" class="form-control">
                     <?php
                $result = $db->select("category","`type` = 'product'");
                foreach($result as $rows){
                ?>
                        <option value="product"><?php echo $rows['title']; ?></option>
                        <?php };?>
                    </select>
                </div>
                 <!----------end image bottom slider -------->
                  <!----------main counter -------->




                   <!----------end main counter -------->
                      <!----------takhfif -------->

<div class="form-group">
                 <label for="companyName">تصویر تخفیف راست اولی</label>
                </div>
                <div class="form-group">
                    <label for="category_type">دسته بندی </label>
                     <select id="category_type" name="category_type" class="form-control">
                     <?php
                $result = $db->select("category","`type` = 'product'");
                foreach($result as $rows){
                ?>
                        <option value="product"><?php echo $rows['title']; ?></option>
                        <?php };?>
                    </select>
                </div>
                <div class="form-group">
                 <label for="companyName">تصویر تخفیف راست دومی</label>
                </div>
             
                <div class="form-group">
                    <label for="category_type">دسته بندی </label>
                     <select id="category_type" name="category_type" class="form-control">
                     <?php
                $result = $db->select("category","`type` = 'product'");
                foreach($result as $rows){
                ?>
                        <option value="product"><?php echo $rows['title']; ?></option>
                        <?php };?>
                    </select>
                </div>
                <div class="form-group">
                 <label for="companyName">تصویر تخفیف چپ </label>
                </div>
             
                <div class="form-group">
                    <label for="category_type">دسته بندی </label>
                     <select id="category_type" name="category_type" class="form-control">
                     <?php
                $result = $db->select("category","`type` = 'product'");
                foreach($result as $rows){
                ?>
                        <option value="product"><?php echo $rows['title']; ?></option>
                        <?php };?>
                    </select>
                </div>

                   <!----------end takhfif -------->
<button type="submit" class="btn btn-raised btn-raised btn-primary">
            <i class="fa fa-check-square-o"></i> ذخیره
        </button>


  </form>