<?php 
error_reporting(0);
session_start();
if(!isset($_SESSION['user']))
	header('location:index.php');
require('dbfunction/dbMySql.php');
$sql = new db; 
$id = $_SESSION['id'];
$result = $sql->select(array('picpass','*',"userId=$id"));

?>

<html>
<head>
	<title>Change Password</title>
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
        <h1 id="heading_pswrd"><p align="center">Change Picture Password</p></h1>
       <table align="center" id="change_pic_tb" >
           
            <tr>           
                <td> <img class="imgs" src="<?php echo "images/".$result[0]['pic1'] ?>"  height="100px" width="100px"/>
                <a href="uploadPic.php?num=1&img=<?php echo $result[0]['pic1'] ?> ">Change  </a></td>
                	
                <td> <img  class="imgs" src="<?php echo "images/".$result[0]['pic2'] ?>" height="100px" width="100px" />
               		<a href="uploadPic.php?num=2&img=<?php echo $result[0]['pic2'] ?> ">Change  </a>
                </td>
           		 <td> <img class="imgs" src="<?php echo "images/".$result[0]['pic3'] ?>" height="100px" width="100px" />
           			 <a href="uploadPic.php?num=3&img=<?php echo $result[0]['pic3'] ?> ">Change  </a></td>
            
            
            	<td> <img class="imgs" src="<?php echo "images/".$result[0]['pic4'] ?>" height="100px" width="100px" />
            		<a href="uploadPic.php?num=4&img=<?php echo $result[0]['pic4'] ?> ">Change  </a>
            	</td>
                <?php if ($result[0]['pic5']!="")
				{?>
                        <td> <img class="imgs" src="<?php echo "images/".$result[0]['pic5'] ?>" height="100px" width="100px" /><br/>
                           <a href="uploadPic.php?num=5&img=<?php echo $result[0]['pic5'] ?> ">Change  </a>
                        </td>
                 <?php }?>
                <?php if ($result[0]['pic5']!="")
				{?>
                    <td> <img class="imgs" src="<?php echo "images/".$result[0]['pic6'] ?>" height="100px" width="100px" />
                        <a href="uploadPic.php?num=6&img=<?php echo $result[0]['pic6'] ?> ">Change  </a>
                    </td>
                    <?php }?>
                
            </tr>
        </table>
        </div>
      </div>
</body>
</html>