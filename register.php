<?php
  require 'db.php';
  session_start();

  $_SESSION['uid']=$_POST['uid'];
  $_SESSION['email']=$_POST['email'];

  $uid=$mysqli->escape_string($_POST['uid']);
  $email=$mysqli->escape_string($_POST['email']);
  $name=$mysqli->escape_string($_POST['name']);
  $ph=$mysqli->escape_string($_POST['phone']);
  $password=$mysqli->escape_string(password_hash($_POST['password'],PASSWORD_BCRYPT));
  $hash=$mysqli->escape_string(md5(rand(0,10000)));

  $result=$mysqli->query("SELECT * FROM user WHERE user_id like '$uid'") or die($mysqli->error());

  if($result->num_rows > 0)
  {
    $_SESSION['userexistsmsg']='User with this email already exists!';
    header('location:index.php');
  }
  else
  {
    $sql="INSERT INTO `user` (`user_id`, `email`, `name`, `password`, `p_no`, `hash`, `active`) VALUES ('$uid', '$email', '$name', '$password', '$ph', '$hash', '0');";

    if($mysqli->query($sql))
    {
      $_SESSION['active']=0;
      $_SESSION['login']=true;
      $_SESSION['emailsentmsg']="Confirmation link has been sent to $email, please verify your account by clicking on the link in the message!";



      header("location: home.php");

    }
    else{
      echo "error";
      header("refresh:5;url=index.php");
    }
  }

 ?>
