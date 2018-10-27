<?php
if(isset($_POST['login']))
{
    include ('cp/config/db.php');
    $txtusername = $_POST['username'];
    $txtpassword = $_POST['password'];

    $resultLogin = $db->select("user","`username` = '$txtusername' AND `password` = '$txtpassword'");
    foreach($resultLogin as $row) {
        $username = $row['username'];
        $password = $row['password'];
        $name = $row['name'];
        $id = $row['id'];
    }
    if($username = $txtusername){
        if($password = $txtpassword)
        {
            session_start();
            $_SESSION['userlogin'] = true;
            $_SESSION['id'] = $id;
            header("Location:cp/");

        }else
        {
            session_start();
            $_SESSION['userlogin'] = false;
            header("Location:login.php");
        }
    }
  }

 if(isset($_POST['submitmail']))
  {

$to = "info.asiaweb@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);


      $name = $_POST['txtname'];
      $email = $_POST['txtemail'];
      $subject = $_POST['txtsubject'];
      $msg = $_POST['txtmsg'];


      if(!$mail->Send()) {
          echo "خطا:پیام شما ارسال نشد » " . $mail->ErrorInfo;
      } else {
          echo "پیام ارسال شد!";
      }
  }