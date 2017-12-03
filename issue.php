<!DOCTYPE html>
<html>
<head>
	<title>Issue</title>
</head>
<body style="background:url(background2.jpg);">



<?php

$temp =  $_GET['bookname'];
session_start();
$con= mysqli_connect("127.0.0.1","root","","lms")or     die("Could not connect: " . mysql_error());

// //echo $temp;
// Array ( [seconds] => 48 [minutes] => 29 [hours] => 14 [mday] => 20 [wday] => 1 [mon] => 11 [year] => 2017 [yday] => 323 [weekday] => Monday [month] => November [0] => 1511206188 )

$sql1="SELECT * FROM books WHERE bookname='$temp'";

$result1=mysqli_query($con,$sql1);
$count=mysqli_num_rows($result1);

//echo $count;

$index  = mysqli_fetch_array( $result1);
$tempvari= $index['id'];
$book = $index['bookname'];
$author = $index['author'];
$catagory = $index['catagory'];
$publication = $index['publication'];
$pic =$index['pic'];

$mydate = getdate();
//$datenext = $mydate[mday] + 10;

$date = date("Y-m-d");

//$nextdate = strtotime(date("Y-m-d", strtotime($date)) . " +15 days");
//echo "" .$nextdate;
$td=strtotime("+15 Days");
$nextdate = date("Y-m-d", $td);

//echo $nextdate;
$d = $mydate['mday'];
$m = $mydate['mon'];
$y = $mydate['year'];

$today = "";
$today = $today. "" .$y;
$today = $today. "-" .$m;
$today = $today. "-" .$d;//$idate = $mydate[mday] . "/" .$mydate[mon] . "/" .$mydate[year];
//$ddate = $datenext . "/" .$mydate[mon] . "/" .$mydate[year];
//echo $today;


if($count == 1)
{
	//delete from both
	$del1 = "delete from books where `bookname`='$temp' and `id`='$tempvari'";
	$del2 = "delete from tempbooks where `bookname`='$temp'"; 


	if(mysqli_query($con,$del1) && mysqli_query($con,$del2))  
		echo "";
	else  
		die("Could not delete: " . mysql_error()); 
}
else
{
	$del1 = "delete from books where `bookname`='$temp' and `id`='$tempvari'";


		if(mysqli_query($con,$del1) )  
		echo "";
		else  
		die("Could not delete: " . mysql_error()); 
}

$tempuser = $_SESSION['user']['username'];


$qry = "INSERT INTO `issuedbook1` (`id`, `bookname`, `author`, `publication`, `catagory`, `pic`,`username`,`issued_date`,`due_date`) VALUES ('$tempvari','$book','$author','$publication','$catagory','$pic','$tempuser','$today','$nextdate')";


if(mysqli_query($con,$qry)){
	// session_start();
	//  $_SESSION["message"]="SignUp Sucessfully,Now you can LogIN";
	//  header("location:login.php");
	echo "Book Issued Sucessfully";
	// echo "inserted in issuedbook";
	 } 
	else{  
	 // session_start();
	 // $_SESSION["message"]="Username already exist";
	 // header("location:signup.php");
		echo "Book Not Issued";
		// echo " NOT inserted in issuedbook";
	}



	mysqli_close($con);
	

?>


</body>
</html>