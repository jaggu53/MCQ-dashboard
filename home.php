
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
        <li><a type="button" class="btn btn-primary btn-lg" href="stats.php">View&nbsp;Stats</a></li>&nbsp;&nbsp;
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

<!--header-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>


    <div class="col-md-8">
      <p>
        <!--Question added successfully -->
      </p>
      <h3 class="text">Add&nbsp;Question&nbsp;<button id="arrow" type="button" class="btn btn-info btn-lg dropdown-toggle" data-toggle="collapse" data-target="#form1">
          <span class="caret"></span>
        </button>
      </h3>

        <!--ADD QUESTIONS-->
        <div id="form1" class="collapse">

            <div class="tab-pane fade in active">
              <form action="question.php" method="post" autocomplete="off" style="margin-top:10px;">
                <div id="category">
                  <p class="text">Select&nbsp;category&nbsp;

      		<select name="category_home" style="background-color:#333333">
      			<option value="A" selected>A</option>
      			<option value="B">B</option>
      			<option value="C">C</option>
      			<option value="D">D</option>
      		</select></p>
        </div>
        <br />
                <input type="text" name="qt"  class="form-control" id="inputdefault" placeholder="Enter question" required/><br />
                <br />
                <input type="text" name="opt1" class="form-control" id="inputdefault" placeholder="Option 1" required/><br />
                <input type="text" name="opt2" class="form-control" id="inputdefault" required placeholder="Option 2"/><br />
                <input type="text" name="opt3" required class="form-control" id="inputdefault" placeholder="Option 3"/><br />
                <input type="text" name="opt4" required class="form-control" id="inputdefault" placeholder="Option 4"/><br />

                <div id="category"><p class="text">
                  Correct&nbsp;option

      		<select name="answer_home" style="background-color:#333333">
      			<option value="1" selected>1</option>
      			<option value="2">2</option>
      			<option value="3">3</option>
      			<option value="4">4</option>
      		</select></p>
        </div>
        <br />

                <button type="submit" name="man_upload" class="btn btn-primary btn-block">Upload</button><br />
              </form>
            </div>
          </div>
      <!--ADD QUESTIONS-->
      <!--DROPDOWN-->

      <br /><br />
      <h3 class="text">upload&nbsp;via&nbsp;doc&nbsp;&nbsp;
          <button type="button" class="btn btn-info">upload</button>
      </h3>


    </div>


    <div class="col-md-2"></div>
  </div>
</div>
<!--DROPDOWN-->

  </div>
  <!--header-->
</body>
</html>
