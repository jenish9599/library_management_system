<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>

<link rel="stylesheet" type="text/css" href="loginbox.css">


</head>
<body style="background:url(background2.jpg);">

<!--<?php
session_start();
if(isset($_SESSION["message"]))
{
echo "<center><h3>" .$_SESSION['message']. "</h3><center>";
unset($_SESSION['message']);
}
?>-->

<?php

if(!isset($_SESSION['admin']))
{
    echo "Session Expired";
  
}

else {

	echo '<form action="action_insert.php" method="post" >
  
  	<div class="container">
    <label><b>Book Name</b></label>
    <input type="text" placeholder="Enter Book Name" name="bookname" id="bookname"  required>

    <br>
    <label><b>Author</b></label>
    <input type="text" placeholder="Enter Author Name" name="author" id="author"  required>

    <br>
    <label><b>Publication</b></label>
    <input type="text" placeholder="Enter Publication Name" name="publication" id="publication"  required>

    <br>
    <label><b>Catagory</b></label>
    <input type="text" placeholder="Enter Catagory" name="catagory" id="catagory"  required>

    <br>
    <button type="submit" name="submit">Add Book</button>
  </div>


</form>';
}

?>



</body>
</html>