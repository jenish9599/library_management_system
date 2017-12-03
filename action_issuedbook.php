<!DOCTYPE html>
<html>
<head>
	<title>Search books</title>
	<link rel="stylesheet" type="text/css" href="recycleview.css">

</head>
<body>

<?php

session_start();

if(!isset($_SESSION['user']))
{
    echo "Session Expired";
  
}
else
{
$tempusername = $_SESSION['user']['username'];
//echo $tempusername;
$con= mysqli_connect("127.0.0.1","root","","lms")or     die("Could not connect: " . mysql_error());

$sql="SELECT * FROM issuedbook1 WHERE `username`='$tempusername'";


$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);


while($temp = mysqli_fetch_array( $result ))
{
	$link = "http://localhost/LM/reissue.php/?id=";
	$link = $link. "" .$temp['id'];

	$link2 = "http://localhost/LM/return.php/?id=";
	$link2 = $link2. "" .$temp['id'];

	echo "<div class='divbooks' ><p><img src='book.jpg' alt = 'pic' class='bookimg' ></img>";
	echo "BOOK_NAME : " .$temp['bookname'];
	echo "<br>Author : " .$temp['author'];
	echo "<br>Publication : " .$temp['publication'];
	echo "<br>Catagory : " .$temp['catagory'];
	echo "<br>Issue date : " .$temp['issued_date'];
	echo "<br>Due date : " .$temp['due_date'];
	echo "<br><a href = '$link' class='b_link'><button type='button' class='button' >Reissue</button></a>";
	echo "<a href = '$link2' class='b_link'><button type='button' class='button' >Return</button></a>";
	echo "</p></div>";
	echo "<br>";
	
}

}
?>
</body>
</html>