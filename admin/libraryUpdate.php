<?php
error_reporting(0);
	session_start(); 
	if(!isset($_SESSION['admin']))
	header('location:index.php');
require_once('../dbfunction/dbMySql.php');
$con = new db; 

$r=rand(10,100);

	$fileNm=explode(".",$_FILES['lib']['name']);
	$ext = $fileNm[1];
	$imgNm= date("ydmshi").$r.".".$ext;
	$con->librarypic($imgNm);

	move_uploaded_file($_FILES['lib']['tmp_name'],"../images/".$imgNm);		
	
	echo "<script language='javascript'>
	window.location=\"library.php\";
	</script>";
?>