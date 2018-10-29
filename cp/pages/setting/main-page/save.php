
<?php
if(isset($_POST['submit-save']))
{
   $main_id = $_POST['id'];
   $sitetitle = $_POST['sitetitle'];
   $sitedescription = $_POST['sitedescription'];
   $r= $db->run("UPDATE `setting` SET 
                `title`='$sitetitle',
                 `description` = '$sitedescription'
                   WHERE `id` = '$main_id'");
                        }
?>
 <?php
if(isset($_POST['submit-add']))
{
   $cat_id = $_GET['id'];
   $category_type= $_POST['category_type'];
   $r= $db->run("UPDATE `setting` SET 
                 `type`= '$category_type'
                   WHERE `id` = '$cat_id'");
                        }

 ?>
 <?php
if(isset($_POST['submit-takhfif']))
{
   $cat_id = $_GET['id'];
   $category_type= $_POST['category_type'];
   $r= $db->run("UPDATE `setting` SET 
                 `type`= '$category_type'
                   WHERE `id` = '$cat_id'");
                        }

  ?>
                         
   