<?php
if(isset($_GET['id']))
{

    $post_id = $_GET['id'];
    $r = $db->delete("post","`id` = '$post_id'");
    if($r)
    {
        ?>                    
        <script>
        window.location.replace("index.php?page=post/list");
        </script>
    <?php
    }
}

?>