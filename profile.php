<?php 
error_reporting(0);
session_start();
if(!isset($_SESSION['user']))
	header('location:index.php');
require_once('dbfunction/dbMySql.php');
	$id = $_SESSION['id'];
	$sql = new db;	
	$result=$sql->select(array('user','*',"id=$id"));
	//die(print_r($result));
	$dob = $result[0]['dob'];
	$date = explode('-',$dob);
	$date = $date[2].'/'.$date[1].'/'.$date[0]; 
?>
<html>
<head>
	<title>GUA</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body id="profile_body">
<div id="main_pswrd">
        <div id="header">
        	<ul>
        			<li class="active"><a href="profile.php">Profile</a></li>
                    <li><a href="changeOrder.php">Change Password Order</a></li>
                    <li><a href="changePic.php">Change Password</a></li>
                    <li><a href="logout.php">Log Out</a></li>
        	</ul>
        </div>
        <div id="container">
        	<h1 id="heading_pswrd"><p align="center">Profile</p></h1>
        		<?php
						if(isset($_GET["g"])=="update")
						{
							echo"<center><label>Password Channged Succesfully</label></center>";
						}
						
						
                	?>
              <table align="center">
                    <tr>
                    <td>Full Name</td>
                    <td><?php  echo $result[0]['name'];?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php  echo $result[0]['email'];?></td>
                </tr>
                <tr>
                    <td>Date Of Birth</td>
                    <td><?php  echo $date?></td>
                </tr>
                <tr>
                    <td>Contry</td>
                    <td><?php  echo $result[0]['country'];?> </td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><?php  echo $result[0]['city'];?></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><?php  echo $result[0]['gender'];?></td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td><?php  echo $result[0]['role'];?></td>
                </tr>
                
               
    	</table>
        </div>
        </div>
    
</body>
</html>