<?php
require 'db.php';
session_start();

$_SESSION['login']=false;
session_unset();
session_destroy();
header("location: index.php");
?>
