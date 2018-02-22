<?php
$servername="localhost:3306";
$username="root";
$password="aaaa0000";
$dbname="register";

//connecting with mysqli server
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(mysqli_connect_errno())
{
	echo "Failed to connect" . mysqli_connect_error();
}

//getting datas from register form 
$name=$_POST['name'];
$title=$_POST['title'];
$post=$_POST['post'];



// Inserting into table 
mysqli_query($conn, "insert into feed(name,title,post) values('$name','$title','$post')");


//closing mysqli conneciton
mysqli_close($conn);
?>
<html>
<body>
<h3 style="color:pink"> Posted. Thank you! </h2>
<a href="homepage.php"> Go back to home page </a>
</body>
</html>
