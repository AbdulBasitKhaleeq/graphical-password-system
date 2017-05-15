<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['user']))
	header('location:index.php');
require('dbfunction/dbMySql.php');
$sql = new db; 
$id = $_SESSION['id'];

//die(print_r($result));
if(isset($_GET['action'])=='update')
{
	move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_POST['img']);
	header('location: profile.php?g=update');
}
?>

<html>
<head>
	<title>Upload Image</title>
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
        <form enctype="multipart/form-data" method="post" action="uploadpic.php?action=update">    
    <table align="center">
    <tr>
    <td><img height="100px"  width="100px" src="images/<?php echo $_GET['img'] ?>"></td>
    </tr>
    <tr>
    <td><input type="file" name="file" id="file" /></td>
    </tr>
    
    <tr>
    <td>
    <input type="hidden"  name="img" value="<?php echo $_GET['img']; ?> "/>
<button class="btn btn-primary "  type="submit" value="Update"> Update</button>
</td>
    </tr>
    </table>
    </form>	

    </div>
  </div>
</body>
</html>