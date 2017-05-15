<?php 
error_reporting(0);
	session_start();
	if(isset($_SESSION['id'])){
	header('location:profile.php');
}
?>

<html>
<head>
	<title>GUA</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
	<div>
	<div id="main_head">
    	<div id="left_main">
        	<p><h1>Graphical User Athentication</h1></p> <br>
			<p><a href="http://localhost/gua/admin/index.php" target="_blank">Admin Login</a></p>
			
        </div>
        <div id="right_main">
        	<form action="paswrd.php" method="post">
            	<table>
                  <th>Register User Login</th>
                <tr>
                <td>
            	 <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email Address" autofocus/><br/>
                 <label id="error" style="color: #C00">
                 
				<?php
                    if(isset($_GET["email"])=="error")
                    {
                        echo"Invalid Email";
                    }
                  if(isset($_GET["pass"])=="error")
                    {
                        echo"Invalid Password";
                    }
				 if(isset($_GET["reg"])=="pass")
                    {
                        echo"You are Successfully Registered";
                    }
                ?>
                </label>
                </td>
                <td>
               		<input id="btn_login" type="submit" value="Proceed"/>
          		 </td>
                 </tr> 
                 </table>
            </form>
            
        </div>
    </div>
    
      		<div>
			<table align="center"> 
         		<form method="post" action="createUser.php" enctype="multipart/form-data">
        			<h2 align="center" id="tb_heading1">Enter Details</h2>
         		<tr>
         			<td>Full Name</td>
         			<td><input type="text"   name="name" required  ></td>
         		</tr>
       	 		<tr>
         			<td>Email</td>
            		<td> <input type="text"   name="email" required autofocus></td>
                		<?php
							if(isset($_GET["way"])=="error")
							{
							echo"<tr><td></td><td><label style='color: #C00'>Email is already exist</label></td></tr><br/>";
							}
							?>
            			</tr>
             			<tr>
             				<td>Gender</td>
                			<td id="radio_btn"><input type="radio" name="gender" value="Male" required  /> Male<br/>
        					<input type="radio" name="gender" value="Female"   />Female</td>
             			</tr>
             			<tr>
       						<td>Date Of Birth</td>
                			<td><input type="date"  name="dob"  required  ></td>
						<tr>
            			</tr>
            				<td>Role</td>
                			<td><input type="text"  name="role" required  autofocus></td>
            			</tr>
            			<tr>
            				<td>Country</td>
                			<td><input type="text"  name="country" required  /></td>
            			</tr>
            			<tr>
            				<td>City</td>
                			<td><input type="text"  name="city"   required  /> </td>
             			</tr>       
        				<tr>
    						<td colspan="2"><label for="picPass">Upload Images for Password With Sequence </label></td>
						</tr>
                        <tr>
                            <td><input type="file"  name="file1" id="image1" required  accept="image/*"/></td>
                        
                            <td><input type="file" name="file2" id="image2" required accept="image/*"/></td>
                        </tr>
                        <tr>
                            <td><input type="file" name="file3"id="image3" required  accept="image/*"/></td>
                            
                            <td><input type="file" name="file4"id="image4" required  accept="image/*"/></td> 
                        </tr>
                        <tr>
                            <td><input type="file" name="file5"  id="image5" accept="image/*"  /></td>
                            
                            <td><input type="file" name="file6" id="image6" accept="image/*" /></td>
                        </tr>
                   
                    </table>
                    
 		 
                    <center><button id="btn_pswrd">SignUp</button></center>
               </form>
          </div>
       </div>
</body>
</html>