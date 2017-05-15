<?php 
error_reporting(0);
require_once('dbfunction/dbMySql.php'); //include db file

$con = new db; //create object

$sql = new db; //create object 

$uname= $_POST['name']; 
$email= $_POST['email'];
$dob= $_POST['dob'];
$date = explode('/',$dob);
$date= $date[2].'-'.$date[1].'-'.$date[0]; 
$country= $_POST['country'];
$city= $_POST['city'];
$gender= $_POST['gender'];
$role= $_POST['role'];

$result = $sql->select(array('user','*',"email='$email'"));//Duplicate email checking  
	if($result != "NA")
	{	
		die(header("location: index.php?way=error"));//redirecting 
	}

$con = new db();

 $result=$con->insertById($uname,$email,$gender,$dob,$country,$city,$role);//inserting data in user table



$fileNm=explode(".",$_FILES['file1']['name']);//creating name 
$ext1= $fileNm[1];//save extention
$counter=1;
$imgNm[1]= date("Ymdhis").$result[1]."$counter.".$ext1;



$fileNm=explode(".",$_FILES['file2']['name']);
$ext2= $fileNm[1];
$counter=2;
$imgNm[2]= date("Ymdhis").$result[1]."$counter.".$ext2;

$fileNm=explode(".",$_FILES['file3']['name']);
$ext3= $fileNm[1];
$counter=3;
$imgNm[3]= date("Ymdhis").$result[1]."$counter.".$ext3;

$fileNm=explode(".",$_FILES['file4']['name']);
$ext4= $fileNm[1];
$counter=4;
$imgNm[4]= date("Ymdhis").$result[1]."$counter.".$ext4;


if($_FILES['file5']['name']!="")
{
	$fileNm=explode(".",$_FILES['file5']['name']);
	$ext5= $fileNm[1];
	$counter=5;
	$imgNm[5]= date("Ymdhis").$result[1]."$counter.".$ext5;
}
if($_FILES['file6']['name']!="")
{
	$fileNm=explode(".",$_FILES['file6']['name']);
	$ext6= $fileNm[1];
	$counter=6;
	$imgNm[6]= date("Ymdhis").$result[1]."$counter.".$ext6;
}


	 $con->picupload($result[1],$imgNm[1],$imgNm[2],$imgNm[3],$imgNm[4],$imgNm[5],$imgNm[6]);//inserting image name
		
				for ($i=1;$i<=$counter;$i++)//uploading images in folder 
				{
					move_uploaded_file($_FILES['file'.$i]['tmp_name'],"images/".$imgNm[$i]);		
				}
					header('location: index.php?reg=pass');//redirecting index page 

?> 