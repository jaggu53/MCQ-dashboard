<?php
  require 'db.php';
  session_start();
  if(!$_SESSION['login'])
   {
     header('location:index.php');
   }
 ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#333333">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="home.php"><b>MCQ-DASHBOARD</b></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li><button type="button" class="btn btn-primary btn-lg" href="#">View&nbsp;Stats</button></li>&nbsp;&nbsp;
        <li>
          <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle btn-lg" type="button" data-toggle="dropdown"><?php echo $_SESSION['uid']; ?>
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Logout</a></li>
          </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
        <h2 style="text-align:center;color:white">QUESTIONS UPLOADED</h2><br /><br />
      </div>
      <div class="col-md-3">
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
        <?php
            $result=$mysqli->query("SELECT * FROM `subject`;");
            $n=$result->num_rows;
            echo "<table class=\"table table-responsive table-dark\">
            <tr>
              <th style=\"text-align: center\">
                Subject
              </th>
              <th style=\"text-align: center\">
                Questions
              </th>
            </tr>";
            for($i=1;$i<=$n;$i++)
            {
              $result=$mysqli->query("SELECT `sub_name` FROM `subject` WHERE `sub_id`='$i'");
              $user=$result->fetch_assoc();
              $subname=$user['sub_name'];
              $res=$mysqli->query("SELECT COUNT(`question`) AS `que` FROM `question` WHERE `sub` LIKE '$subname'");
              $no=$res->fetch_assoc();
              echo
              "<tr>
                <td>".
                $user['sub_name']
                ."</td>
                <td>".
                $no['que']
                ."</td>
              </tr>";
            }
            echo "</table>";
         ?>
      </div>
      <div class="col-md-3">
    </div>
  </div>
</body>
</html>
