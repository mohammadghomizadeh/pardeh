<?php
$id = $_GET['id'];
$db->delete("product","`id`= '$id'");
?>
<script>
    window.location.replace("index.php?page=product/list");
</script>

