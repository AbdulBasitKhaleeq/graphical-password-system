<?php
error_reporting(0);

require_once("imagePass.php");
?>
<html>
<head>
<script language="javascript" src="jquery/jquery-1.10.2.min.js"></script>
	<title>Password</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body id="main_pswrd">
	<div id="main_div">
	<h1 id="heading_pswrd"><p align="center">Password</p></h1>
    	<div id="main_pass_select">
        	<div id="pass_select_row">
                 <?php 
		for ($i=0;$i<=29;$i++)
		{
			
	 	?>
        <div id="pic_select" >
      <img class="imgs" id="img" src="<?php echo "images/$picpassimg[$i]"; ?>" width="100px" height="100px"/>
        </div>
         <?php
		}
		 ?> 
                    <form action="passCheck.php" method="post"/> 
                    <input type="hidden" id="pass" name="pass" style="width:500px;" /> 
        			</div>
    					<center><button id="btn_pswrd">LogIn</button></center>
            		</div>
       </form>               
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