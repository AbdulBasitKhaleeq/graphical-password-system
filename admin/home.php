<?php
error_reporting(0);
	session_start(); 
	if(!isset($_SESSION['admin']))
	header('location:index.php');
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
        	<h1><p align="center">ADMIN PANEL</p></h1>
        </div>
     </div>
       
</body>
</html>