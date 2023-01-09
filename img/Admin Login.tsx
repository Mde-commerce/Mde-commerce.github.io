<?php
include ("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Panel</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="img/style.css">
</head>
<body bgcolor="grey">
<div class ="container">
	<div class="myform">
 		<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
				<h2>ADMIN LOGIN</h2>
			<input type="text" placeholder="AdminName" name="AdminName"><br>
			<br>
			<input type="password" placeholder="AdminPass" name="AdminPass"><br><br>
			<center><button type="submit" class="btn btn-primary" name="login">LOGIN</button></center>
		</form>
	</div>
	
</div>
<?php

function input_filter($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
if(isset($_POST['login']))
{
	$AdminName=input_filter($_POST['AdminName']);
	$AdminPass=input_filter($_POST['AdminPass']);

	$AdminName=mysqli_real_escape_string($con,$AdminName);
	$AdminPass=mysqli_real_escape_string($con,$AdminPass);

print_r($query="SELECT * FROM `admin_login` WHERE 'Admin_Name' =? AND 'Admin_Password'=?");
if($stmt=mysqli_prepare($con,$query))
{
	mysqli_stmt_bind_param($stmt,"ss",$AdminName,$AdminPass);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);
	if(mysqli_stmt_num_rows($stmt)==1)
	{
		session_start();
		$_SESSION['AdminLoginId']=$AdminName;
		header("location: Admin Panel.php");
	}
	else
	{
	echo"<script>alert('invalid Admin Name or Password');</script>";
	}

	mysqli_stmt_close($stmt);
}
else
{
	echo"<script>alert('sql query cannot be prepared');</script>";

}
}
?>
</body>
</html>