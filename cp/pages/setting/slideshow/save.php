<?php

if(isset($_POST['submit']))
{
    try{
        $img = $_FILES['image_slide']['name'];
        if(!empty($img))
        {
            $slide_title=$_POST['slide_title'];
            $slide_desc=$_POST['slide_desc'];
            $img = $_FILES['image_slide']['name'];
            $uploaddir = 'uploads/slideshow/';
            $uploadfile = $uploaddir . basename($_FILES['image_slide']['name']);
            move_uploaded_file($_FILES['image_slide']['tmp_name'], $uploadfile);
            $db->insert("setting",array(
                'title'=>$slide_title,
                'description'=>$slide_desc,
                'image' => $img,
                'type' => 'slideshow',
                'create_at' => $update
            ));
            ?>
            <script>
                window.location.replace("index.php?page=setting/slideshow/list");
            </script>
            <?php
        };


    }
    catch(Exception $e){
        echo "error";
    }
}
else
{
    echo "لطفا تصویری بارگزاری کنید";
}
?>