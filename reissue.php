<!DOCTYPE html>
<html>
<head>
	<title>Reissue</title>
</head>
<body>





<?php
$tempid =  $_GET['id'];
/*Array ( [seconds] => 48 [minutes] => 29 [hours] => 14 [mday] => 20 [wday] => 1 [mon] => 11 [year] => 2017 [yday] => 323 [weekday] => Monday [month] => November [0] => 1511206188 )*/

$con= mysqli_connect("127.0.0.1","root","","lms")or     die("Could not connect: " . mysql_error());




$d=strtotime("+15 Days");
$nextdate = date("Y-m-d", $d);

// echo $nextdate;
$qry = "update issuedbook1 set due_date='$nextdate' where id='$tempid'";

if(mysqli_query($con,$qry)){
	echo "<h4>Due date extended 15 days from Today</h4>";
} 
else
{
	echo "error";
}

?>

</body>
</html>