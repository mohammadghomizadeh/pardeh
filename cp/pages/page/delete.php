<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $result = $db->delete("page","`id` = '$id'");
    if($result)
    {
        ?>


        <script>window.location.replace("index.php?page=page/list");</script>
<?php

    }else
    {
        ?>


        <script>window.location.replace("index.php?page=page/list");</script>
        <?php
    }
}