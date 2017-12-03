<!DOCTYPE html>
<html>
<head>
	<title>Library Details</title>
	<link rel="stylesheet" type="text/css" href="profilepage.css">
</head>
<body>
<?php
$con= mysqli_connect("127.0.0.1","root","","lms")or     die("Could not connect: " . mysql_error());

$sql="SELECT * FROM tempbooks WHERE 1";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

$sql2="SELECT * FROM books WHERE 1";
$result2=mysqli_query($con,$sql2);
$count2=mysqli_num_rows($result2);

$sql3="SELECT * FROM issuedbook1 WHERE 1";
$result3=mysqli_query($con,$sql3);
$count3=mysqli_num_rows($result3);

$sql4="SELECT * FROM users WHERE `admin`='0'";
$result4=mysqli_query($con,$sql4);
$count4=mysqli_num_rows($result4);

$sql5="SELECT * FROM users WHERE `admin`='1'";
$result5=mysqli_query($con,$sql5);
$count5=mysqli_num_rows($result5);



echo "<div>";
echo "Total No of Books : " . $count . "<br>";
echo "Available copies : " . $count2 . "<br>";
echo "Issued copies : " . $count3 . "<br>";
echo "No of Students : " . $count4 . "<br>";
echo "No of Admin : " . $count5 . "<br>";
echo "</div>";


?>



</body>
</html>