<?php

  require 'db.php';
  session_start();

  $uid=$mysqli->escape_string($_POST['uid']);
  $result=$mysqli->query("SELECT * FROM user WHERE user_id like '$uid'");

  if($result->num_rows == 0)
  {
    $_SESSION['usernotfoundmsg'] = "User with that email doesn't exist!";
    echo "error1";
    header("refresh:5;url=index.php");
  }
  else{
    $user=$result->fetch_assoc();
    if(password_verify($_POST['password'], $user['password']))
    {
      $_SESSION['email']=$user['email'];
      $_SESSION['uid']=$user['user_id'];
      $_SESSION['active']=$user['active'];
      $_SESSION['login']= true;

      header("location:home.php");

    }
    else
    {
      $_SESSION['wrongpwmsg']="You have entered wrong password, try again!";
      echo "error2";
      header("refresh:5;url=index.php");
    }
  }
 ?>
