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
      include ('cp/config/db.php');
      $name = $_POST['txtname'];
      $email = $_POST['txtemail'];
      $subject = $_POST['txtsubject'];
      $msg = $_POST['txtmsg'];

      $mail->SetFrom($from, $name);
      $mail->AddReplyTo($from, $name);

      $mail->AddAddress('info.asiaweb@gmail.com', "Your Name");
      $mail->Subject = $subject;
      $mail->IsHTML(true);
      $body = '<html><body>';
      $body .= '<p style="direction:rtl;font-family:tahoma;">'.$msg.'</p>';
      $body .= "</body></html>";

      $mail->MsgHTML($body);
      $mail->AltBody= $msg;

      if(!$mail->Send()) {
          echo "خطا:پیام شما ارسال نشد » " . $mail->ErrorInfo;
      } else {
          echo "پیام ارسال شد!";
      }
  }