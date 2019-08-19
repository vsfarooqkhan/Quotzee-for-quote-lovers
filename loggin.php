<?php

echo '<head>
  <title>QUoTZee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head> ';




$servername = "localhost:3306";
$username = "root";
$password = "********";
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
	

	echo ' <div class="container"> <div class= "jumbotron">';
	echo ' <div class="alert alert-danger"><h4 style="color:#063072"> <b>Sorry. User name  or password incorrect</b> </h4></div>';
	echo '<br />';
	echo '<a href="login.php" class = "btn btn-primary btn-lg">Click here to login again</a>'; 
	echo '<br/> </div> </div>';
	
	}




?>
