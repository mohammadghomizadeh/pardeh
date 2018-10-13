<?php
if(isset($_GET['id']))
{
    include('config/db.php');
    $portfolio_id = $_GET['id'];
    $r = $db->delete("portfolio","`id` = '$portfolio_id'");
    if($r)
    {
        ?>                    
        <script>
        window.location.replace("index.php?page=portfolio/list");
        </script>
    <?php
    }
}

?>