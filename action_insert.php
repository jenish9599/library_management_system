<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body style="background:url(background2.jpg);">





<?php



$con= mysqli_connect("127.0.0.1","root","","lms")or     die("Could not connect: " . mysql_error()); 
$a = $_POST['bookname']; 
$b = $_POST['author']; 
$c = $_POST['publication']; 
$d = $_POST['catagory']; 





//mysqli_select_db($con,"LMS")or     die("Could not select db: " . mysql_error());
// $qry = "insert into studentdb(enrol,name) values(".$_POST['txtname'].",'".$_POST['txtname']."')"; 

//$qry = "INSERT INTO `users` (`name`, `username`, `emailId`, `passwd`, `mobileNo`, `Admin`) VALUES (".$_POST['name'].", ".$_POST['username'].", ".$_POST['emailid'].", ".$_POST['passwd'].", ".$_POST['mobile'].", '0')";


// $qry = "INSERT INTO users (name, username, emailid, passwd, moblieno, admin) VALUES (".$_POST['name'].",".$_POST['username'].",".$_POST['emailid'].",".$_POST['passwd'].",".$_POST['mobile'].",'0')";

//$qry = "INSERT INTO `books` (''`username`, `emailid`, `passwd`, `moblieno`, `admin`) VALUES ('$a','$b','$c','$d','$e','0')";


$qry1 = "INSERT INTO `books` (`id`, `bookname`, `author`, `publication`, `catagory`, `pic`) VALUES (NULL, '$a', '$b', '$c', '$d', 'pic')";

$qry2 = "INSERT INTO `tempbooks` (`bookname`, `author`, `publication`, `catagory`, `pic`) VALUES ('$a', '$b', '$c', '$d', 'pic')";


if(mysqli_query($con,$qry1))
{
	if(mysqli_query($con,$qry2))
	{
		echo "<h4>Inserted new book</h4>";
	}
	else
	{
		echo "<h4>book updated</h4>";
	}
}
?>


</body>
</html>