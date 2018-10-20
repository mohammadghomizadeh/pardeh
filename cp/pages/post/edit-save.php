<?php
    $post_title=$_POST['post_title'];
    $editid = $_GET['id'];  
    $post_type = $_POST['post_type'];
    $post_description=$_POST['post_description'];
    $uploaddir = 'uploads/posts/';
    $ctime = $date->date("Y-m-d", false, false);
    /*----image1----*/
    if(!empty($_FILES['post_image1']['name'])){
    $post_image1= $ctime.$_FILES["post_image1"]["name"];
    $upload1=$uploaddir.basename($ctime.$_FILES["post_image1"]["name"]);
    move_uploaded_file($_FILES["post_image1"]["tmp_name"],$upload1);
    $result_editpost = $db->run("UPDATE `post` SET `image` = '$post_image1' WHERE `id` = '$editid'");
    }
$result_editpost=$db->run("UPDATE `post` SET
    `title`=>'$post_title',
    `description`=>'$post_description',
    `type`='$post_type',
    `update_at`= '$ctime'
     WHERE `id` = '$editid'");
?>
<script>
window.location.replace("index.php?page=post/list");
</script>
