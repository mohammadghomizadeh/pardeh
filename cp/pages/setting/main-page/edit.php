</br>
</br>

<div class="card-block">
            <p>هر تب برای نمایش بخشی از تنظیمات صفحه اصلی است </p>
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">سرویس ها</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">دسته بندی زیر اسلایدر</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false">دسته بندی صفحه اصلی</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">غیرفعال</a>
              </li>
            </ul>
            <div class="tab-content px-1 pt-1">
              <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
              <hr>
           
           
            <form method="POST" action="index.php?page=setting/main-page/save" enctype="multipart/form-data">
            <?php
                $result = $db->select("setting","`type` = 'main-page' LIMIT 4");
                foreach($result as $row){
                ?>
                <div class="form-group">
                    <label>سرویس ها</label>
                    <input type="text" class="form-control"  name="sitetitle" id="sitetitle" value="<?php echo $row['title']; ?>">
                    <textarea  cols="100" rows="10" name="sitedescription" id="sitedescription"><?php echo $row['description']; ?></textarea>
                </div>
                <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
                <?php
                };
            ?>
                <button type="submit" id="submit-save" name="submit-save" class="btn btn-raised btn-raised btn-primary">
            <i class="fa fa-check-square-o"></i> ذخیره
        </button>  
               </form>
           
                        </div>
                <!----------image bottom slider -------->
              <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">

<form method="POST" action="index.php?page=setting/main-page/save&id=<?php echo $row['id']; ?>" enctype="multipart/form-data">

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
    <button type="submit" id="submit-add" name="submit-add" class="btn btn-raised btn-raised btn-primary">
<i class="fa fa-check-square-o"></i> ذخیره
</button>
    </form>
    
              </div>
                    <!----------end image bottom slider --------> 
              <div class="tab-pane" id="tab3" aria-labelledby="base-tab3">
                  <!----------takhfif -------->
<form method="POST" action="index.php?page=setting/main-page/save&id=<?php echo $row['id']; ?>" enctype="multipart/form-data">
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
    <button type="submit" id="submit-takhfif" name="submit-takhfif" class="btn btn-raised btn-raised btn-primary">
            <i class="fa fa-check-square-o"></i> ذخیره
        </button>
</form>

                   <!----------end takhfif -------->

              </div>
            </div>
          </div>
</br></br></br></br></br>

<div class="box-header with-border">
              <h3 class="box-title">تنظیمات صفحه اصلی</h3>
            </div>
      
            
                  <!----------main counter -------->




                   <!----------end main counter -------->
                      

  