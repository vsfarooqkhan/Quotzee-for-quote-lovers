<?PHP

echo '<h1 style="color:#720b3d"> QUoTZee </h1>';

echo '<br />';


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

echo' <h3 style="color:green"> Welcome to Quotzee. <br> You can post your quotes and read others here<br/><br/> <br /> <br />';

echo "welcome ".$name;

echo '<a href="post.php" > Post your new quote here </a> <br/>';
//Selecting datas from feed table
$sql = "SELECT * FROM feed";

$result = mysqli_query($conn,$sql)or die(mysqli_error());

echo '<table>';
echo '<tr><th>name</th><th>Post</th></tr>';

while($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    
    $post = $row['post'];
   

    echo '<tr><td style="width: 200px;">'.$name.'</td><td style="width: 600px;">'.$post.'</td></tr>';
} 

echo ' <br/> </table>';
mysqli_close($conn);
echo '<a href="logout.php"> Logout </a>';

?>
