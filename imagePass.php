<?php
error_reporting(0);
require_once('dbfunction/dbMySql.php');
$sql = new db;

$email = $_POST['email'];

$result = $sql->select(array('user','id',"email='$email'"));
	if ( $result == 'NA' ) 
	{
		header('location: index.php?email=error');
	}
$id= $result[0]['id'];
$userPics =  $sql-> select(array('picpass','pic1,pic2,pic3,pic4,pic5,pic6',"userId='$id'"));

	for($i=1;$i<=6;$i++)
	{
		if($userPics[0]["pic$i"]!="")
		{
		$picpassimg[$i]= $userPics[0]["pic$i"];
	
		}
	}


 $totalimages = count($picpassimg);
 $library = $sql->select(array('librarypic','picname','','rand()','31'));

for($i=$totalimages+1;$i<=30;$i++ )
{
	 if($library[0]["picname"]!="")
	{
	$picpassimg[$i]= $library[$i]["picname"];

	}
} 

shuffle($picpassimg);

?>