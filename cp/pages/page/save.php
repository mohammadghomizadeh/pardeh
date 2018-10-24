<?php
if(isset($_POST['addpage']))
{
    $title = $_POST['page_title'];
    $content = $_POST['page_content'];
    $type = $_POST['page_type'];
    $result=$db->insert("page",array(
    "title"=>$title,
    "content"=>$content,
    "type"=>$type
        ));
    if($result)
    {
        ?>
        <script>window.location.replace("index.php?page=page/list");</script>
<?php
    }
}
if(isset($_POST['editsubmit'])){
    $id = $_GET['id'];
    $title = $_POST['page_title'];
    $content = $_POST['page_content'];
    $type = $_POST['page_type'];
    $result=$db->run("UPDATE `page` SET `title` = '$title',`content` = '$content', `type` = '$type' WHERE `id` = '$id'");
    if($result)
    {
        ?>
        <script>window.location.replace("index.php?page=page/list");</script>
        <?php
    }
}