
<?php
  if(isset($_GET['id'])){
                        $setting_id = $_GET['id'];
                        $sitetitle = $_POST['sitetitle'];
                        $sitelogo = $_FILES['sitelogo']['name'];
                        $siteicon = $_FILES['siteicon']['name'];
                        $headerscript = $_POST['headerscript'];
                        $footerscript = $_POST['footerscript'];
                        $sitedescription = $_POST['sitedescription'];
                        $update = $date->date("Y-m-d", false, false);
                       
                         if(!empty($sitelogo) && !empty($siteicon))
                         {
                            $uploaddir = 'uploads/logo/';
                            $uploadfile1 = $uploaddir . basename($_FILES['sitelogo']['name']);
                            move_uploaded_file($_FILES['sitelogo']['tmp_name'], $uploadfile1);

                            $uploadfile2 = $uploaddir . basename($_FILES['siteicon']['name']);
                            move_uploaded_file($_FILES['siteicon']['tmp_name'], $uploadfile2);
                           
                            $r = $db->run("UPDATE `setting` SET 
                            `logo` = '$sitelogo'
                            `icon`='$siteicon'
                            `title`='$sitetitle'
                            `description` = '$sitedescription',
                            `update_at` = '$update',
                            `headscript`='$headerscript',
                            `footerscript`='$footerscript'
                              WHERE `id` = '$setting_id'");
                         
                        }
                         $r = $db->run("UPDATE `setting` SET 
                            `title`='$sitetitle'
                            `description` = '$sitedescription',
                            `update_at` = '$update',
                            `headscript`='$headerscript',
                            `footerscript`='$footerscript'
                              WHERE `id` = '$setting_id '");
                        }
                         ?>
                              
                         <script>
                         window.location.replace("index.php?page=setting/setting/edit");
                         </script>
                    