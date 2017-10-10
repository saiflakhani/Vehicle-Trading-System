<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tinkerbots";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
echo "\nConnected successfully";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = 'Select * FROM carDatabase';
$result = mysqli_query($conn,$query);
$array = ['Hatchback','Coupe','SUV','Sedan','Convertible','Minivan'];
for($x = 1;$x<=7268;$x++)
{
	$random_value = rand(4,150)*10000;
	echo $random_value;
	echo '<br>';
	$query = "UPDATE carDatabase SET Price = ".$random_value." WHERE ID =".$x;
	$result = mysqli_query($conn,$query);
	if($result==false)
	{
		echo 'hello';
	}else
	{
		echo 'hi';
	}
}


?>