<?php
	error_reporting(0);
	session_start(); 
	if(!isset($_SESSION['admin']))
	header('location:index.php');
 
require_once('../dbfunction/dbMySql.php');
$con = new db; 
$result = $con->select(array('librarypic','picname,id'));

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
        		<h1 align="center"><p>Picture Library</p></h1>
        
                		<form action="libraryUpdate.php" method="post" enctype="multipart/form-data" >
                        <table align="center">
                        <tr>
                        <td>
                        <input type="file" name="lib" id="lib"  required  />
                        </td>
                        <td>
                        <button id="btn_admin_gallery" type="submit">Upload New Image</button>
                        </td>
                        </tr>
                        </table>
                        </form>
                    <?php
					foreach($result as $k=>$v)
					{	
					?>
              	<div id="pic_select_library" >
              		<img id="library_img_del" class="img"  src="../images/<?php echo $v['picname']?> " width="100px" height="100px"/>
             		
                    <a href="delete.php?id=<?php echo $v['id']?>&fileNm=<?php echo $v['picname']?>" ><p id="library_pic"> Delete </p></a>
                </div>
				 <?php	
					}
				 ?> 
           </div>
       </div>
</body>
</html>