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
	<title>Change Order</title>
    <script language="javascript" src="jquery/jquery-1.10.2.min.js"></script>

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
        <div align="center" id="container">
        <h1 id="heading_pswrd"><p align="center">Change Password Order</p></h1>
        	<p align="center">Select Images In New Order</p>
           <?php 
		   			if(isset($_GET["g"])=="error")
						{
							echo"<center><label style:color'#F00'>Please select Image one time only</label></center> <br/>";
						}
			?>
        			<img class="imgs" src="<?php echo "images/".$result[0]['pic1'] ?>"  height="100px" width="100px"/>	
                  <img  class="imgs" src="<?php echo "images/".$result[0]['pic2'] ?>" height="100px" width="100px" />
           		  <img class="imgs" src="<?php echo "images/".$result[0]['pic3'] ?>" height="100px" width="100px" />
                  <img class="imgs" src="<?php echo "images/".$result[0]['pic4'] ?>" height="100px" width="100px" />
                <?php
				if ($result[0]['pic5']!=""){
                
				?>
                         <img class="imgs" src="<?php echo "images/".$result[0]['pic5'] ?>" height="100px" width="100px" />
                           
                        
                <?php
					}
					if ($result[0]['pic6']!=""){
				?>
                     <img class="imgs" src="<?php echo "images/".$result[0]['pic6'] ?>" height="100px" width="100px" />
                        
                   
                <?php
				}
				?>
            <br/><br/><br/>
            		 <form method="post" action="changeOrderPass.php">
                        <input type="hidden" style="width:100%;" id="pass" name="pass"/>
                        <center><input id="btn_pswrd_order"  type="submit" value="Update"> </center>
               		 </form>
                    </div>
                    </div>
        <script>
$(document).ready(function(){ 
if($('#pass').val()!="")
$('#pass').val('');
$('.imgs').css('cursor','pointer');

$('.imgs').click(function(){
	$(this).fadeTo(1000, 0.4);
	var src =   $(this).attr('src').split('/');
	var name;
	
	 name = (src[1]);
	
	 
	var pass = $('#pass').val();
	var newpass = pass.concat(name);
	var newpass = newpass.concat('/');
	$('#pass').val(newpass);
	
	});

}); 


 </script> 
</body>
</html>