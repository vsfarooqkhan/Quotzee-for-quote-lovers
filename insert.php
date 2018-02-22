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
$email=$_POST['email'];
$passwd=$_POST['passwd'];
$passwd1=$_POST['passwd1'];


//Checking password match
if($name=="")
{
	echo '<p> Name should not be empty. <a href="register.php"> Register again. </a> </p>';
}
elseif($email=="")
{
	echo '<p> Email should not be empty. <a href="register.php"> Register again. </a> ';
}
else
{
if($passwd== $passwd1)
{
//Inserting into table 
	mysqli_query($conn, "insert into register(name, email,passwd,passwd1) values('$name','$email','$passwd','$passwd1')");


	echo '<h2 style="color:blue" > Welcome... </br> Your registration success. </h2> ';
	echo '<a href ="login.php "> Click here to login . </a>';

//closing mysqli conneciton
mysqli_close($conn);
}


else 
	{
// If passwords doesn't match
	echo '<h3 stye="color:blue"> password doesnt match </h1>';
	echo '<a href="register.php "> Try again</a>';


	
}
}
// closing mysqli connection
mysqli_close($conn);

?>
