<!DOCTYPE html>
<html>
<head>
	<title>My profile - User</title>
	<link rel="stylesheet" type="text/css" href="profilepage.css">
</head>
<body>

<?php
session_start();
if(isset($_SESSION["user"]))
{
/*
echo "<center><h3>" .$_SESSION['user']['username']. "</h3></center>";
echo "<center><h3>" .$_SESSION['user']['passwd']. "</h3></center>";
echo "<center><h3>" .$_SESSION['user']['emailid']. "</h3></center>";
echo "<center><h3>" .$_SESSION['user']['moblieno']. "</h3></center>";
echo "<center><h3>" .$_SESSION['user']['admin']. "</h3></center>";
*/
echo "<div>";
echo "Name : " .$_SESSION['user']['name']. "<br>";
echo "Username : " .$_SESSION['user']['username']. "<br>";
echo "Email-ID : " .$_SESSION['user']['emailid']. "<br>";
echo "Moblie No : " .$_SESSION['user']['moblieno']. "<br>";
echo "Admin-Permission : " .$_SESSION['user']['admin']. "<br>";
echo "</div>";
}
else
{
	echo "Session expired";
}

?>






</body>
</html>