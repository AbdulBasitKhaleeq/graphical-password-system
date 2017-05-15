<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['user']))
	header('location:index.php');
require_once('dbfunction/dbMySql.php');
//print_r($_POST);

$con = new db; 
$id=$_SESSION['id'];
date_default_timezone_set("Asia/Karachi");
$date=date("Y-m-d h:i:s");
$con->logout($id,$date );

session_destroy(); 
header('location:index.php');
die();
?> 

