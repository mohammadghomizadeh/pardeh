
<div class="coupons">
    <div class="coupons-grids text-center">
        <div class="w3layouts_mail_grid">
        <?php
                    $result = $db->select("setting","`type` = 'main-page' LIMIT 4" );
                    foreach($result as $row){
                ?>
            <div class="col-md-3 w3layouts_mail_grid_left ">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out ">
                <i class="fa fa-gift" aria-hidden="true"></i>
                </div>
             
                <div class="w3layouts_mail_grid_left2">
                    <h3 id="sitetitle" name="sitetitle"><?php echo $row['title'];?></h3>
                    <p id="sitedescription" name="sitedescription"><?php echo $row['description'];?></p>
                </div>
            </div>
            <?php }; ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
                 