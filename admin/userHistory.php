<?php
error_reporting(0);
	session_start(); 
	if(!isset($_SESSION['admin']))
	header('location:index.php');
require_once('../dbfunction/dbMySql.php');
$con = new db(); 
$id=$_GET['id'];
$data= $con->select(array('loghistory','*',"userId=$id"));
$email= $con->select(array('user','email',"Id=$id"));
?>
<html>
<head>
	<title>Admin Panel</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body id="profile_body">
	<div id="main_pswrd">
        <div id="header">
        	<ul>
        			<li class="active"><a href="home.php">Home</a></li>
                    <li><a href="viewData.php">View User</a></li>
                    <li><a href="library.php">Picture Library</a></li>
                    <li><a href="logout.php">Log Out</a></li>
        	</ul>
        </div>
        <div id="container">
        	<center><h1><?php echo $email[0]['email'] ?></h1></center>
                           <table align="center" class="table table-striped" id="record">
                                        <tr>
                                            <th>Login Time</th>
                                            <th>Logout Time</th>
                                            
                                        </tr>
                                    <?php
                                 foreach ($data as $i=>$v) 
                                 {
                                    
                                 ?>
                                       <tr>
                                       
                                             
                                             
                                             <td><?php echo $v['login'] ?></td>
                                             <td><?php echo $v['logout'] ?></td>
                                             
                                      </tr>
                                       <?php 
                                 }
                                 ?>
                               </table>
        </div>
     </div>  
</body>
</html>