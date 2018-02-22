<?php
?>
<html>
<body bgcolor="#d0d2e2">
<form action="insert.php" name="input" method="post">


	<h2 style="color:brown"> Registration </h2>

    <p>
	<label for="User name">User Name  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;:</label>


        <input type="text" name="name" id="Name">
    </p>
    <p>
   
	<label for="Email">Email  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; :</label>

	<input type="text" name="email" id="email">
    </p>
    <p>

	<label for="password"> password  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;   :</label>

	<input type="password" name="passwd" id="passwd">
</p>
	
<p>
	<label for="password"> Re-enter password:</label>
	<input type="password" name="passwd1" id="passwd1">
</p>	    

<p>
    <input type="submit" value="Submit">

</p>

<!-- Login page -->
<a href="login.php"> Already an user?. Login here. </a>


</form>
</body>
</html>
