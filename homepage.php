<?PHP




$servername = "localhost:3306";
$username = "root";
$password = "aaaa0000";
$dbname="register";


// Create connection
$conn=mysqli_connect($servername, $username, $password,$dbname);
if (mysqli_connect_errno())
{
   echo "Connection failed: " . mysqli_connect_error();
}



$name= $_POST['name'];

//Title 


echo'
	<div class="container">

  	<div class="jumbotron">
	<h1 style="color:#720b3d"> QUoTZee </h1>
	
	 <h3 style="color:green"> Welcome to Quotzee. <br> You can post your quotes and read others here<br/><br/> ';

//Bootstrap 
echo '<head>
  <title>QUoTZee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>';
echo '<body>';

echo '<a href="post.php" class="btn btn-lg btn-primary"> Post your new quote here </a> <br />	<br/>';

//Selecting datas from feed table
$sql = "SELECT * FROM feed";

$result = mysqli_query($conn,$sql)or die(mysqli_error());

// Table creation and headers
echo '	
	  <input class="form-control" id="myInput" type="text" placeholder="Search or filter" > ';

echo '<table class="table table-hover table-striped">';
echo '<thead><tr>
	<th>Name </th>
	
	<th>Post</th>
	</tr> 
</thead>';



//Fetching datas from table
while($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    
    $post = $row['post'];
   

    echo '	
	    <tbody id="myTable">
    <tr>	    
	<td style="width: 200px;">'.$name.'</td>	
	<td style="width: 600px;">'.$post.'</td>
    </tr>';

}


echo ' <br/> <tbody> </table>';
echo'

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
';

mysqli_close($conn);
echo '<a href="logout.php"> Logout </a>
	</div> </div>';

?>
