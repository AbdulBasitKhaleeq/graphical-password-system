<?php
error_reporting(0);
 session_start();
require_once('../dbfunction/dbMySql.php');
$email= $_POST['email'];
$pass= $_POST['pass'];
$sql = new db;
$result = $sql->select(array('admin','id,name',"email='$email' and pass='$pass'"));
if ( $result == 'NA' ) 
{
	
	header('location: index.php?way=error');
}
else 
 {

	$_SESSION['name']= $result[0]['name'];
	$_SESSION['id']= $result[0]['id'];
	$_SESSION['email']= $result[0]['email'];
	$_SESSION['admin']= 'admin';
	header('location: home.php');	
}

?>