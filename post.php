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
<body>
		<div class="container">
		<div class="jumbotron">
		<h2 style="color:#aa1cdd;"> QUoTZee</h2>
		<form method="POST" action="quote.php">
		
		<div class="col-xs-2">
        <label for="ex1">
			<span class="glyphicon glyphicon-user"></span>
			User name :</label>
        <input class="form-control" id="name"  type="text" name="name"> 
		</div>
		<br /> <br> <br>
		<div class="col-xs-2">
        <label for="ex1"> 
			<span class="glyphicon glyphicon-heart"></span>
			Title : </label>
        <input class="form-control" id="title" name="title" type="text">
		</div>
		<br /> <br>
		<br>
<label for="post"> 
		<span class="glyphicon glyphicon-pencil"></span>
	Post your quote: 
</label> <br>
			<textarea rows="8" cols="80" name="post"  id="post">
		</textarea>
		<br />

			<input type="submit" class="btn btn-success" name="submit">
	<br>
	<a href="homepage.php" class="btn btn-info btn-md">
		<span class="glyphicon glyphicon-fast-backward"></span>  Back to home .</a>

		</form>
	</body>
</html>

