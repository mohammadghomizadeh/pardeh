
<?php
  if(isset($_GET['id'])){
                        $about_id = $_GET['id'];
                        $aboutdescript = $_POST['aboutdescript'];
                        $update = $date->date("Y-m-d", false, false);
                       
                         if(!empty($_FILES['img_about']['name']))
                         {
                            $img_about = $_FILES['img_about']['name'];
                            $uploaddir = 'uploads/about/';
                            $uploadfile = $uploaddir . basename($_FILES['img_about']['name']);
                            move_uploaded_file($_FILES['img_about']['tmp_name'], $uploadfile);
                            $r = $db->run("UPDATE `setting` SET 
                            `image` = '$img_about'
                              WHERE `id` = '$about_id'");
                         }
                         $r = $db->run("UPDATE `setting` SET 
                            `description` = '$aboutdescript',
                            `update_at` = '$update'
                              WHERE `id` = '$about_id '");
                        }
                         ?>
                              
                         <script>
                         window.location.replace("index.php?page=setting/about-us/edit");
                         </script>
                    