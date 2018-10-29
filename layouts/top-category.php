<div class="banner_bottom_agile_info">
    <div class="container">
        <div class="banner_bottom_agile_info_inner_w3ls">
                <?php
                $result = $db->select("category","`type` = 'product' LIMIT 2");
                foreach($result as $rows){
                ?>
            <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                <figure class="effect-roxy">
                    <img src="cp/uploads/categorys/<?php echo $rows['image']; ?>" alt="<?php echo $rows['title']; ?>" class="img-responsive" />
                    <figcaption>
                        <h3>
                        <?php echo $rows['title']; ?>
                         </h3>
                        <p>از مجموعه ما دیدن فرمایید</p>
                    </figcaption>
                </figure>
            </div>
            <?php }; ?>
         
            <div class="clearfix"></div>
        </div>
                
    </div>
</div>