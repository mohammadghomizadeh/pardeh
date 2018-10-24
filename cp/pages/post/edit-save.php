<?php
    $post_title=$_POST['post_title'];
    $editid = $_GET['id'];  
    $post_type = $_POST['post_type'];
    $post_description=$_POST['post_description'];
    $uploaddir = 'uploads/posts/';
    $ctime = $date->date("Y-m-d", false, false);

    if(!empty($_FILES['post_image']['name'])){
    $post_image= $ctime.$_FILES["post_image"]["name"];
    $upload=$uploaddir.basename($ctime.$_FILES["post_image"]["name"]);
    move_uploaded_file($_FILES["post_image"]["tmp_name"],$upload);
    $result_editpost = $db->run("UPDATE `post` SET `image` = '$post_image' WHERE `id` = '$editid'");
    }
$result_editpost=$db->run("UPDATE `post` SET
    `title`='$post_title',
    `description`='$post_description',
    `type`='$post_type',
    `update_at`= '$ctime'
     WHERE `id` = '$editid'");
?>
<script>
window.location.replace("index.php?page=post/list");
</script>
