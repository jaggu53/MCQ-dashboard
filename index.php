
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
  <div id="form">
    <ul class="nav nav-tabs">
      <li class="tab active"><a data-toggle="tab" href="#login">LOGIN</a></li>
      <li class="tab"><a data-toggle="tab" href="#signup">SIGNUP</a></li>
    </ul>
    <div class="tab-content">
      <div id="login" class="tab-pane fade in active">
        <form style="margin-top:10px;">
          <input type="email" class="input" placeholder="Email Address"/><br />
          <input type="password" class="input" placeholder="Password"/><br />
          <a href="#" style="margin-left:150px;font-size:12px;">Forgot password?</a><br />
          <button type="button" class="button">Login</button><br />
        </form>
      </div>
      <div id="signup" class="tab-pane fade">
        <form style="margin-top:10px;">
          <input type="text" class="input" placeholder="Name"/><br />
          <input type="email" class="input" placeholder="Email Address"/><br />
          <input type="password" class="input" placeholder="Password"/><br />
          <input type="password" class="input" placeholder="Confirm Password"/><br />
          <input type="number" class="input" placeholder="Phone number"/><br />
          <button type="button" class="button">Sign up</button><br />
        </form>
      </div>
    </div>
  </div>
</body>
</html>
