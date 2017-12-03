<!DOCTYPE html>
<html>
<head>
	<title>action_signup</title>
</head>
<body>
<?php

$con= mysqli_connect("127.0.0.1","root","","lms")or     die("Could not connect: " . mysql_error()); 
$a = $_POST['name']; 
$b = $_POST['username']; 
$c = $_POST['emailid']; 
$d = $_POST['passwd']; 
$e = $_POST['mobile']; 



//mysqli_select_db($con,"LMS")or     die("Could not select db: " . mysql_error());
// $qry = "insert into studentdb(enrol,name) values(".$_POST['txtname'].",'".$_POST['txtname']."')"; 

//$qry = "INSERT INTO `users` (`name`, `username`, `emailId`, `passwd`, `mobileNo`, `Admin`) VALUES (".$_POST['name'].", ".$_POST['username'].", ".$_POST['emailid'].", ".$_POST['passwd'].", ".$_POST['mobile'].", '0')";


// $qry = "INSERT INTO users (name, username, emailid, passwd, moblieno, admin) VALUES (".$_POST['name'].",".$_POST['username'].",".$_POST['emailid'].",".$_POST['passwd'].",".$_POST['mobile'].",'0')";

$qry = "INSERT INTO `users` (`name`, `username`, `emailid`, `passwd`, `moblieno`, `admin`) VALUES ('$a','$b','$c','$d','$e','0')";

if(mysqli_query($con,$qry)){
	session_start();
	 $_SESSION["message"]="SignUp Sucessfully,Now you can LogIN";
	 header("location:login.php");
	 } 
	else{  
	 session_start();
	 $_SESSION["message"]="Username already exist";
	 header("location:signup.php");
	}

mysqli_close($con);

?>
</body>
</html>