<!DOCTYPE html>
<html>
<head>
	<title>Search books</title>
	<link rel="stylesheet" type="text/css" href="recycleview.css">
	<link rel="stylesheet" type="text/css" href="searchbox.css">	

	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-searchi.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

</head>
<body>

<form action="adminissued.php" method="POST">
<div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search Book..." name="box" />
        <input type="submit" value="GO">
        <div class="result"></div>
</div>
</form>


<?php

session_start();

if(!isset($_SESSION['admin']))
{
    echo "Session Expired";
  
}
else
{
//$tempusername = $_SESSION['user']['username'];
//echo $tempusername;
$con= mysqli_connect("127.0.0.1","root","","lms")or     die("Could not connect: " . mysql_error());

//$sql="SELECT * FROM issuedbook WHERE 1";
if(!isset($_POST['box']))
{
$sql="SELECT * FROM issuedbook1 WHERE 1";
}
else
{
	$temp =$_POST['box'];
	$sql="SELECT * FROM issuedbook1 WHERE `username`='$temp'";	
}


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
	echo "<br>Username : " .$temp['username'];
	echo "<br><a href = '$link' class='b_link'><button type='button' class='button' >Reissue</button></a>";
	echo "<a href = '$link2' class='b_link'><button type='button' class='button' >Return</button></a>";
	echo "</p></div>";
	echo "<br>";
	
}

}
?>
</body>
</html>