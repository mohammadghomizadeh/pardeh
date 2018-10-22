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