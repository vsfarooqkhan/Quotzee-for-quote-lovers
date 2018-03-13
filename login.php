<?php
?>

<html>

<head>
  <title>QUoTZee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body  bgcolor="blue" class="bg-dark">
<div class="container">
<div class="jumbotron">
<h1 style="color:#720b3d;font-family:chiller"> QUoTZee </h1>
</div>

<form action="loggin.php" action="homepage.php" name="login" method="post">

<div class="col-xs-2">
	<label for="usr">Name:</label>
	<input type="text" name="name" class="form-control" /><br />

	<label for="usr">Password:</label>
	<input type="password" name="passwd" class="form-control" /><br />


	<input type="submit" name="submit" class="btn btn-primary">
<br />

<h4 style="color:#10198c"> Not a user yet ? <br/> <a href="register.php" class="btn btn-link btn-lg " > Click here to register </a>  </h4>
<a href="quotzee.php"><span class="glyphicon glyphicon-home btn-md">Back to Home. </span></a>
</div>
</div>
</form>

</body>
</html>
