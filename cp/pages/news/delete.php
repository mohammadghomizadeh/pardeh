<?php
if(isset($_GET['id']))
{

    $news_id = $_GET['id'];
    $r = $db->delete("post","`id` = '$news_id'");
    if($r)
    {
        ?>                    
        <script>
        window.location.replace("index.php?page=news/list");
        </script>
    <?php
    }
}

?>