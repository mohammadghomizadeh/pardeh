
<?php
  if(isset($_GET['id'])){
                        $setting_id = $_GET['id'];
                        $sitetitle = $_POST['sitetitle'];
                        $sitedescription = $_POST['sitedescription'];
                        $update = $date->date("Y-m-d", false, false);

                             $result = $db->run("UPDATE `setting` SET 
                            `title`='$sitetitle',
                            `description` = '$sitedescription'
                              WHERE `id` = '$setting_id'");
                        }
                         ?>
                              
                         <script>
                         window.location.replace("index.php?page=setting/main-page/edit");
                         </script>
                    