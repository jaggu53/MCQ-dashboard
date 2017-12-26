<?php
require 'db.php';
$category_db=$_POST["category_home"];
$qt_db = $mysqli->escape_string($_POST['qt']);
$opt1_db = $mysqli->escape_string($_POST['opt1']);
$opt2_db = $mysqli->escape_string($_POST['opt2']);
$opt3_db = $mysqli->escape_string($_POST['opt3']);
$opt4_db = $mysqli->escape_string($_POST['opt4']);
$ans_db=$_POST['answer_home'];
$sql="INSERT INTO `question` (`sub`, `question`, `1`, `2`, `3`, `4`, `ans`) VALUES ('$category_db','$qt_db','$opt1_db','$opt2_db','$opt3_db','$opt4_db','$ans_db')";
$result = $mysqli->query($sql);
$dummy=$result;
if($result === TRUE){header('Refresh:0;url=http://mymcqcom.000webhostapp.com/home.php'); echo "<script type='text/javascript'>alert('submitted successfully!')</script>";}
else{header('Refresh:0;url=http://mymcqcom.000webhostapp.com/home.php'); echo "<script type='text/javascript'>alert('ERROR!!!')</script>";}

?>
