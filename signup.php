<!DOCTYPE html>
<html>
<head>
	<title>User SignUp Page</title>


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



	<script type = "text/javascript">

		
		

		function valid()
		{	
			var letters = /^[A-Za-z]+$/;
			var numbers = /^[0-9]+$/;
			var mobile = document.getElementById("mobile").value;
			var name = document.getElementById("name").value;
			var password = document.getElementById("passwd").value;
			var confirmpassword = document.getElementById("confirmpasswd").value;



			if(mobile.length != 10)
			{
				
				alert("Enter Proper Mobile Number !!");
				document.getElementById("mobile").focus();
				return false;
			}
			else if(!mobile.match(numbers))
			{
				alert("Enter Proper Mobile Number !!");
				document.getElementById("mobile").focus();
				return false;	
			}
			
			if(password != confirmpassword)
			{
				alert("Password and Confirm Password Field do not match  !!");
				document.getElementById("confirmpasswd").focus();
				return false;
			}
		
		return true;
		}

	</script>

	<ul>
	<!-- <li><a href="index.php">Home</a></li> -->
    <li><a href="login.php">User LogIn</a></li>
    <li><a class="active" href="signup.php">User SignUp</a></li>
    <li><a href="adminlogin.php">Admin LogIn</a></li>
    </ul>




	<form action="action_signup.php" method="post" >
  
  	<div class="container">
    <label><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name"  required>

    <br>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <br>
	<label><b>Email-ID</b></label>
    <input type="email" placeholder="Enter Email Id" name="emailid" required>

    <br>
	<label><b>Mobile No</b></label>
    <input type="text" placeholder="Enter Mobile no" name="mobile" id="mobile" required>

    <br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passwd" id="passwd" required>

     <br>
    <label><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="confirmpasswd" id="confirmpasswd" required>

    <br>
    <button type="submit" name="submit" onclick="return valid()">SignUp</button>
  </div>


</form>



</body>
</html>