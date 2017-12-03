<!DOCTYPE html>
<html>
<head>
	<title>Library Management Login Page</title>

<link rel="stylesheet" type="text/css" href="loginbox.css">
<link rel="stylesheet" type="text/css" href="h_bar.css">
<style type="text/css">
    body{
        background-image:url(lib_img.jpg);
        background-size: 1380px 700px;
        background-repeat: no-repeat;
    }
</style>
	
</head>
<body>

<div class="invalid">
<?php
session_start();
if(isset($_SESSION["message"]))
{
echo "<br><br><center><h3>" .$_SESSION['message']. "</h3></center>";
unset($_SESSION['message']);
}
?>
</div>

    <ul>
    <!-- <li><a href="index.php">Home</a></li> -->
    <li><a class="active" href="login.php">User LogIn</a></li>
    <li><a href="signup.php">User SignUp</a></li>
    <li><a href="adminlogin.php">Admin LogIn</a></li>
    </ul>


	<form action="action_login.php" method="post" >
  
  	<div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passwd" required>

    <br>
    <button type="submit" name="submit">Login</button>
  </div>


</form>

</body>
</html>