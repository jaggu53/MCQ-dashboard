
<?php
  require 'db.php';
  session_start();
  $_SESSION['login']=false;
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

  <script type = "text/javascript" >

     function preventBack(){window.history.forward();}

      setTimeout("preventBack()", 0);

      window.onunload=function(){null};

  </script>
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
              <input type="text" class="input" placeholder="User ID" name="uid"/><br />
              <p class="msg">
                <?php
                if( isset($_SESSION['usernotfoundmsg']) AND !empty($_SESSION['usernotfoundmsg']) )
                  {  echo $_SESSION['usernotfoundmsg'];}
                ?>
              </p>
              <input type="password" class="input" placeholder="Password" name="password"/><br />
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
              <input type="text" class="input" placeholder="Name" name="name"/><br />
              <input type="text" class="input" placeholder="User ID" name="uid"/><br />
              <input type="email" class="input" placeholder="Email Address" name="email"/><br />
              <input type="password" class="input" placeholder="Password" name="password"/><br />
              <input type="password" class="input" placeholder="Confirm Password" name="password2"/><br />
              <input type="number" class="input" placeholder="Phone number" name="phone"/><br />
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
