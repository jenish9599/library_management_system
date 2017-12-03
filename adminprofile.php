<!DOCTYPE html>
<html>
<head>
	<title>My profile - Admin</title>
	<link rel="stylesheet" type="text/css" href="profilepage.css">
</head>
<body >

<?php
session_start();
if(isset($_SESSION["admin"]))
{
/*
echo "<center><h3>" .$_SESSION['admin']['username']. "</h3></center>";
echo "<center><h3>" .$_SESSION['admin']['passwd']. "</h3></center>";
echo "<center><h3>" .$_SESSION['admin']['emailid']. "</h3></center>";
echo "<center><h3>" .$_SESSION['admin']['moblieno']. "</h3></center>";
echo "<center><h3>" .$_SESSION['admin']['admin']. "</h3></center>";
*/
echo "<div>";
echo "Name : " .$_SESSION['admin']['name']. "<br>";
echo "Username : " .$_SESSION['admin']['username']. "<br>";
echo "Email-ID : " .$_SESSION['admin']['emailid']. "<br>";
echo "Moblie No : " .$_SESSION['admin']['moblieno']. "<br>";
echo "Admin-Permission : " .$_SESSION['admin']['admin']. "<br>";
echo "</div>";
}
else
{
	echo "Session expired";
}

?>






</body>
</html>