<!DOCTYPE html>
<html>
<head>
	<title>action_adminlogin</title>
</head>
<body>

<?php

$con= mysqli_connect("127.0.0.1","root","","lms")or     die("Could not connect: " . mysql_error()); 

$username=$_POST['username']; 
$passwd=$_POST['passwd'];

$sql="SELECT * FROM users WHERE username='$username' and passwd='$passwd' and admin='1'";


$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

if($count == 0)
{
	 session_start();
	 $_SESSION["message"]="Invalid Admin-name or Password";
	 header("location:adminlogin.php");
} 
else{
	session_start();
	$_SESSION['admin'] = mysqli_fetch_array( $result );
	header("location:admin_main.php");
}
   
	
   // echo $row ['username'] . "---" . $row ['passwd'];
   // echo "<br>" ;}



?>


</body>
</html>