<!DOCTYPE html>
<html>
<head>
	<title>action_login</title>
</head>
<body>

<?php

$con= mysqli_connect("127.0.0.1","root","","lms")or     die("Could not connect: " . mysql_error()); 

$username=$_POST['username']; 
$passwd=$_POST['passwd'];

$sql="SELECT * FROM users WHERE username='$username' and passwd='$passwd'";


$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

if($count == 0)
{
	 session_start();
	 $_SESSION["message"]="Invalid Username or Password";
	 header("location:login.php");
} 
else
{
	session_start();
	$_SESSION["user"] = mysqli_fetch_array( $result );
	header("location:user_main.php");	
}

?>


</body>
</html>