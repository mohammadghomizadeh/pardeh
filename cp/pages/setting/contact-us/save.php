
<?php
  if(isset($_GET['id'])){
                        $about_id = $_GET['id'];
                        $img_about=$_POST['img_about'];
                        $aboutdescript = $_POST['aboutdescript'];
                        $update = $date->date("Y-m-d", false, false);
                         $aboutcat = 101;
                         if(!empty($_FILES['img_about']['name']))
                         {
                            $aboutimg = $_FILES['img_about']['name'];
                            $uploaddir = 'cp/uploads/about/';
                            $uploadfile = $uploaddir . basename($_FILES['img_about']['name']);
                            move_uploaded_file($_FILES['img_about']['tmp_name'], $uploadfile);
                            $r = $db->run("UPDATE `setting` SET 
                            `description` = '$aboutdescript',
                            `update_at` = '$update',
                            `image` = '$img_about',
                              WHERE `id` = '$about_id '");
                         }
                        }
                         ?>
                               
                         <script>
                         window.location.replace("index.php?page=setting/about-us/edit");
                         </script>
                    