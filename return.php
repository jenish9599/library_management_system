<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background:url(background2.jpg);">





<?php
$tempid =  $_GET['id'];


$con= mysqli_connect("127.0.0.1","root","","lms")or     die("Could not connect: " . mysql_error());

$sql = "SELECT * FROM issuedbook1 WHERE id='$tempid'";

$result=mysqli_query($con,$sql);


$temp  = mysqli_fetch_array($result);
$a = $temp['bookname'];
$b = $temp['author'];
$c = $temp['publication'];
$d = $temp['catagory'];
$e =$temp['pic'];


$qry1 = "INSERT INTO `books` (`id`, `bookname`, `author`, `publication`, `catagory`, `pic`) VALUES ('$tempid', '$a', '$b', '$c', '$d', '$e')";

$qry2 = "INSERT INTO `tempbooks` (`bookname`, `author`, `publication`, `catagory`, `pic`) VALUES ('$a', '$b', '$c', '$d', '$e')";

$del = "delete from issuedbook1 where `id`='$tempid'";

if(mysqli_query($con,$qry1))
{
	if(mysqli_query($con,$qry2))
	{
		echo "";
	}
	else
	{
		echo "";
	}
}
else
{
	echo "error";
}

if(mysqli_query($con,$del))
	{
		echo "<h4>book returned</h4>";
	}
	else
	{
		echo "error in book return";
	}

?>



</body>
</html>