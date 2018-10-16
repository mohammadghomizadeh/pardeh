<?php
$id = $_GET['id'];
$db->delete("category","`id`= '$id'");
?>
<script>
    window.location.replace("index.php?page=category/list");
</script>

