<?php
error_reporting(0);
session_start();
	if(!isset($_SESSION['user']))
	header('location:index.php');
require_once('dbfunction/dbMysql.php');
    $sql = new db;	
	$imgPass =  explode('/',$_POST['pass']);
	$id= $_SESSION['id'];
	
	if(count($imgPass)==count(array_count_values($imgPass))){
		
	   $sql->update($id,$imgPass[0],$imgPass[1],$imgPass[2],$imgPass[3],$imgPass[4],$imgPass[5]);
	
	header('location: profile.php?g=update');
	}
	else{
		
	die(header("location: changeOrder.php?g=error"));
}
	  
?> 