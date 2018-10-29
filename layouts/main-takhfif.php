<div class="banner-bootom-w3-agileits">
    <div class="container">
        <h3 class="wthree_text_info">تخفیفات
            <span>ویژه</span>
        </h3>
        <?php
                $result = $db->select("category","`type` = 'product' LIMIT 3");
                foreach($result as $rows){
                ?>

        <div class="col-md-4 bb-grids bb-left-agileits-w3layouts">
            <a href="womens.html">
                <div class="bb-left-agileits-w3layouts-inner grid">
                    <figure class="effect-roxy">
                        <img src="cp/uploads/categorys/<?php echo $rows['image']; ?>" alt=" " class="img-responsive" />
                        <figcaption>
                            <h3>
                            <?php echo $rows['title']; ?> 
                            </h3>
                           
                        </figcaption>
                    </figure>
                </div>
            </a>
        </div>
             
       
        
           
            <?php } ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>