<?php
	error_reporting(0);
	session_start(); 
	if(!isset($_SESSION['admin']))
	header('location:index.php');
require_once('../dbfunction/dbMySql.php');
$sql = new db(); 
$data= $sql->select(array('user','*'));
if ( $data == 'NA' ) 
{
	
	header('location: showData.php?way=error');
}

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
        	<h1 align="center"><p>User Data</p></h1>
        	<?php
					if(isset($_GET["way"])=="error")
					{
						echo"<label>Data Not Availible</label><br/>";
					}
						?>
                		<table align="center" id="record">
                                <tr>
                                    <th>User Name</th>
                                    <th>E-mail</th>
                                    <th>Date of Birth</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Gender</th>
                                    <th>Role</th>
                                    <th>login History</th>
                                </tr>
                            <?php
                         foreach ($data as $i=>$v) 
                         {
                            
                            
                              ?>
                               <tr>
                                     <td><?php echo $v['name']; ?></td>
                                     <td><?php echo $v['email'] ?></td>
                                     <td><?php echo $v['dob'] ?></td>
                                     <td><?php echo $v['country'] ?></td>
                                     <td><?php echo $v['city'] ?></td>
                                     <td><?php echo $v['gender'] ?></td>
                                     <td><?php echo $v['role'] ?></td>
                                     <td><a href="userHistory.php?id=<?php echo $v['id'] ?>">History</a></td>
                              </tr>
                                                <?php 
                         }
                         ?>
                       </table>
        </div>
    </div>
</body>
</html>