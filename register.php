<?php
?>
<html>

 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>


<body class="bg-info" bgcolor="#d0d2e2" >
<form action="insert.php" name="input" method="post">


 
	<h3 style="size:34;"> 
	          <span class="glyphicon glyphicon-plus"></span>
				Registration </h3>

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
    <input type="submit" value="Submit" class="btn btn-primary " >

</p>

<!-- Login page -->
<a href="login.php"  class="text-white bg-dark"> Already an user?. Login here. </a>


</form>
</body>
</html>

