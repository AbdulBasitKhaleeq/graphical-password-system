<?php
error_reporting(0);
	session_start(); 
	if(!isset($_SESSION['admin']))
	header('location:index.php');
 
 
require_once('../dbfunction/dbMySql.php');
$sql = new db;
$id= $_GET['id'];
$sql->delete('librarypic',$id);
$fileNm= $_GET['fileNm'];
header("location:library.php");
