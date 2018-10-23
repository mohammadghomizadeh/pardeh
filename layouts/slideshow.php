<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="_Content/css/slidshow.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<div id="themeSlider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#themeSlider" data-slide-to="0" class="active"></li>
        <li data-target="#themeSlider" data-slide-to="1"></li>
        <li data-target="#themeSlider" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
    <?php
                    
                    $results = $db->select("setting","`type` = 'slideshow'");
      
                     foreach($results as $row)
                     {
 
                     ?>
        <div class="item <?php echo $row['title']; ?>">
            <div class="imgOverlay"></div>
            <img src="cp/uploads/slideshow/<?php echo $row['image'];?>" alt="First slide">
            <div class="carousel-caption">
                <h3><?php echo $row['description']; ?></h3>
                
            </div>
        </div>
    <?php };?>

    </div>

    <a class="left carousel-control" href="#themeSlider" data-slide="prev">
        <span class="fa fa-chevron-left"></span>
    </a>
    <a class="right carousel-control"href="#themeSlider" data-slide="next">
        <span class="fa fa-chevron-right"></span>
    </a>

    <div class="main-text hidden-xs hidden-sm">
        <div class="col-md-12 text-center">
            <div class="clearfix"></div>
            <div class="carousel-btns">
                <a class="btn btn-md btn-default" href="">خرید کنید</a>
               
            </div>
        </div>
    </div>
</div>