<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = $db->delete("setting"," `id`= $id");

    if($result)
    {
        ?>
        <script>
            window.location.replace("index.php?page=setting/slideshow/list&action=list");
        </script>
        <?php
    }else
    {
        echo "خطا در حذف  لطفا با پشتیبانی تماس بگیرید";
    }


}else
{
    ?>
    <script>
        window.location.replace("index.php?page=setting/slideshow/list&action=list");
    </script>
    <?php
}
?>