<?php 
error_reporting(0);
session_start();
if(isset($_SESSION['admin'])){
	header('location:home.php');
}
?>
<html>
<head>
	<title>GUA</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body id="main_admin">
        <h1 id="heading_pswrd"><p align="center">Admin LogIn</p></h1>
        <form  action="loginAdmin.php" method="post">
        <table align="center">
        	<tr>
             	<td><label id="error" >
                 
				<?php
                    if(isset($_GET["way"])=="error")
                    {
                        echo"Invalid Email or Password";
                    }
                   
                ?>
                </label></td>
            </tr>
        	<tr>
            	<td><input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus></td>
            </tr>
            
        	<tr>
            	<td><input type="password" name="pass" class="pas" placeholder="Password" required/></td>
            </tr>
            <tr>
            	<td><input type="submit" class="sub" value="Login" id="btn_admin"/></td>
            </tr>
             
        </table>
        </form>
</body>
</html>