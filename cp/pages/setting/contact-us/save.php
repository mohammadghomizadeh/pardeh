
<?php
  if(isset($_GET['id'])){
                        $contact_id = $_GET['id'];
                        $address=$_POST['address'];
                        $tell=$_POST['tell'];
                        $map=$_POST['map'];
                        $email = $_POST['email'];
                        $update = $date->date("Y-m-d", false, false);
                       
                       
                            $r = $db->run("UPDATE `setting` SET 
                            `address` = '$address',
                            `email` = '$email',
                            `phone` = '$tell'
                            `map`='$map'
                              WHERE `id` = '$contact_id '");
                         }
                     
                        
                         ?>
                               
                         <script>
                        window.location.replace("index.php?page=setting/contact-us/edit");
                         </script>
                    