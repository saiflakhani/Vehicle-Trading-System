<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "\nConnected successfully";

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password= 
	echo $email;
}





?>