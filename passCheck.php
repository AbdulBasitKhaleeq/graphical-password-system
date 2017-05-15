<?php
error_reporting(0);
session_start();
require_once('dbfunction/dbMySql.php');
$con = new db; 
$imgPass =  explode('/',$_POST['pass']);
$q = "pic1='$imgPass[0]' and pic2='$imgPass[1]' and pic3='$imgPass[2]' and pic4='$imgPass[3]' and pic5='$imgPass[4]' and pic6='$imgPass[5]'"; 
$result = $con->select(array('picpass','userId',"$q"));

if ( $result == 'NA' ) 
{
	
	header('location: index.php?pass=error');
}
else 
 {
	 $q = $result[0]['userId'];
	$data = $con->select(array('user','id,name,email,dob,country,city,gender,role',"id=$q")); 
	$_SESSION['name'] = $data[0]['name'];
	$_SESSION['email'] = $data[0]['email'];
	$_SESSION['dob'] = $data[0]['dob'];
	$_SESSION['id'] = $data[0]['id'];
	$_SESSION['country'] = $data[0]['country'];
	$_SESSION['city'] = $data[0]['city'];
	$_SESSION['gender'] = $data[0]['gender'];
	$_SESSION['role'] = $data[0]['role']; 
	$_SESSION['user'] = 'user'; 
	$id=$_SESSION['id'];
	
$con2 = new db; 
	date_default_timezone_set("Asia/Karachi"); 
	 $con2->loghistory($id,date("Y-m-d h:i:s"));
	
	header('location:profile.php');
}  

?> 