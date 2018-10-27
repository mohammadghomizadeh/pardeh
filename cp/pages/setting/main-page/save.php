
<?php
  if(isset($_GET['id'])){
                        $setting_id = $_GET['id'];
                        $sitetitle = $_POST['sitetitle'];
                        $sitedescription = $_POST['sitedescription'];
                        $category_type= $_POST['category_type'];

                             $r= $db->run("UPDATE `setting` SET 
                            `title`='$sitetitle',
                            `description` = '$sitedescription',
                            `type`= '$category_type'
                              WHERE `id` = '$setting_id'");
                        }
                         ?>
                              
                         <script>
                         window.location.replace("index.php?page=setting/main-page/edit");
                         </script>
                    