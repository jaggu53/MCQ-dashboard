<?php
  require 'db.php';
  session_start();
  if(!isset($_SESSION['uid'])){
    $_SESSION['login']=false;
  }
  else
  {
    $_SESSION['login']=true;
  }
  if($_SESSION['login'])
  {
    header('location:home.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="container-fluid" >
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4" id="form">
        <ul class="nav nav-tabs">
          <li class="tab active"><a data-toggle="tab" href="#login">LOGIN</a></li>
          <li class="tab"><a data-toggle="tab" href="#signup">SIGNUP</a></li>
        </ul>
        <div class="tab-content">
          <div id="login" class="tab-pane fade in active">
            <form action="login.php" method="post" style="margin-top:10px;">
              <input type="text" class="input" placeholder="User ID" name="uid" required /><br />
              <p class="msg">
                <?php
                if( isset($_SESSION['usernotfoundmsg']) AND !empty($_SESSION['usernotfoundmsg']) )
                  {  echo $_SESSION['usernotfoundmsg'];}
                ?>
              </p>
              <input type="password" class="input" placeholder="Password" name="password" required/><br />
              <p class="msg">
                <?php
                if( isset($_SESSION['wrongpwmsg']) AND !empty($_SESSION['wrongpwmsg']) )
                  {  echo $_SESSION['wrongpwmsg'];}
                ?>
              </p>
              <a href="#" style="text-align:right;display:block;font-size:12px;">Forgot&nbsp;password?</a><br />
              <div style="text-align:center;">
                <button class="button" name="login">Login</button><br />
                <p class='msg'>
                  <?php echo $_SESSION['login']; ?>
                </p>
              </div>
            </form>
          </div>
          <div id="signup" class="tab-pane fade">
            <form action="register.php" method="post" style="margin-top:10px;" method="post" >
              <input type="text" class="input" placeholder="Name" name="name" required/><br />
              <input type="text" class="input" placeholder="User ID" name="uid" required/><br />
              <input type="email" class="input" placeholder="Email Address" name="email" required/><br />
              <input type="password" class="input" placeholder="Password" name="password" required/><br />
              <input type="password" class="input" placeholder="Confirm Password" name="password2" required/><br />
              <input type="number" class="input" placeholder="Phone number" name="phone" required/><br />
              <p class="msg">
                <?php
                if( isset($_SESSION['userexistsmsg']) AND !empty($_SESSION['userexistsmsg']) )
                  {  echo $_SESSION['userexistsmsg'];}
                ?>
              </p>
              <div style="text-align:center;">
                <button class="button" name="register">Sign Up</button><br />

              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
</body>
</html>
