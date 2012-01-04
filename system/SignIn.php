<?php
	include ("../configuration/configuration.php");

	$username	=$_REQUEST["username"];
	$password	=$_REQUEST["password"];
	
	$que		=mysql_query("SELECT * FROM Account WHERE username='$username' and password='$password'");
	$arr		=mysql_fetch_array($que);
	
	$db_username=$arr["username"];
	$db_password=$arr["password"];
	$level		=$arr["level"];
	$id			=$arr["id"];
	
	if($username==null || $password==null)
	{
		Echo
			"
				<script>
					alert('Username And Password Is Blank');
					location='../form/login.php';
				</script>
			";
	}
	else if($username!=$db_username || $password!=$db_password)
	{
		Echo
			"
				<script>
					alert('Username And Password Is Wrong');
					location='../form/login.php';
				</script>
			";
	}
	else
	{ 
		if($username==$db_username and $password==$db_password)
		{
			session_start();
			$_SESSION[username]	=$db_username;
			$_SESSION[password]	=$db_password;
			$_SESSION[id]		=$id;
			
			header("location:../form/adminpage.php");
		}
	}
?>
