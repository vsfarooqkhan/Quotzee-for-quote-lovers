<?php

$servername = "localhost:3306";
$username = "root";
$password = "aaaa0000";
$dbname="register";

session_start();
// Create connection
$conn=mysqli_connect($servername, $username, $password,$dbname);



if (mysqli_connect_errno())
{
	echo "Connection failed: " . mysqli_connect_error();
}


$name = $_POST['name'];
$passwd = $_POST['passwd'];

// Checking login credentials
$qry = "Select * from register where name ='".$name."' and passwd = '".$passwd."'";
$rs = mysqli_query($conn, $qry);

$numRows = mysqli_num_rows($rs);

if($numRows > 0)
{
	echo "Login success";
	header('Location: homepage.php'); 

} else {	
	

	echo '<h4 style="color:blue"> Sorry . Try again. </h4>';
	
	echo '<h4 style="color:#063072"> <b>User name  or password incorrect</b> </h4>';
	echo '<br />';
	echo '<a href="login.php">Click here to login again</a>'; 
	echo '<br/>';
	
	}




?>
