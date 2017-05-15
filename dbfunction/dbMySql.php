<?php
error_reporting(0);
	class db {
	function db()
 		{
	  $conn = mysql_connect('localhost','root','') or die('localhost connection problem'.mysql_error());
	  mysql_select_db('guadb', $conn);
		 }

   function picupload($id,$pic1,$pic2,$pic3,$pic4,$pic5,$pic6)
 		{	
	 	
		 $this->db();
		 $q="INSERT picpass(userId,pic1,pic2,pic3,pic4,pic5,pic6) VALUES('$id','$pic1','$pic2','$pic3','$pic4','$pic5','$pic6')";
		 //die($q);
	  	 mysql_query($q);
		}
	function librarypic($imgNm)
 		{	
	 	
		 $this->db();
		 $q="INSERT librarypic(picname) VALUES('$imgNm')";
		 //die($q);
	  	 mysql_query($q);
		}
	function loghistory($id,$login)
 		{	
	 	
		 $this->db();
		 $q="INSERT loghistory (userId,login) VALUES('$id','$login')";
		 //die($q);
	  	 mysql_query($q);
		}

   function insertById($name,$email,$gender,$dob,$country,$city,$role)
 	{
		$this->db();
	  $res = mysql_query("INSERT user(name,email,gender,dob,country,city,role)VALUES('$name','$email','$gender','$dob','$country','$city','$role')");
	  
	  $result[0]=$res;
	  $result[1]=mysql_insert_id();
	  return $result;
	
 	}
 
 
function select($a)
	{
		$this->db();		
		$q="select ".$a[1]." from ".$a[0];
		if($a[2]!="")
		{
			$q.=" where ".$a[2];
		}
		if(isset($a[3])!="")
		{
			$q.=" order by ".$a[3];
		}
		if(isset($a[4])!="")
		{
			$q.=" limit ".$a[4];
		}
		//die($q);
		$rs=mysql_query($q);
		if(mysql_num_rows($rs)!="")
		{
			while($v=mysql_fetch_assoc($rs))
				{
					$x[]=$v;
				}
				return $x;
		}
		else 
		{
			return $x[0]='NA';
		}
	}//end function

 

  function update($id,$pic1,$pic2,$pic3,$pic4,$pic5,$pic6)
 {
	 
		 
		 $q="UPDATE picpass SET pic1='$pic1', pic2='$pic2', pic3='$pic3', pic4='$pic4', pic5='$pic5', pic6='$pic6' WHERE userId=$id";
		 //die($query);
		  $result = mysql_query($q);
		  
		  return $result;
 	
 }
   function logout($id,$logout)
 {
	 
		 
		 $q="UPDATE loghistory SET logout='$logout' WHERE userId=$id ORDER BY id DESC LIMIT 1";
		 //die($query);
		  $result = mysql_query($q);
		  
		  return $result;
 	
 }
 
  public function delete($table,$id)
 {
	 try{
		 $this->db();
		 $q="DELETE FROM $table WHERE id=".$id;
		 //die($q);
	  $res = mysql_query($q);
	  return $res;
 		}
 	catch (MySQLException $e) {
	echo $e->getMessage();
		}
 }
 

}

?>