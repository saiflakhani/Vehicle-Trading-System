
<!DOCTYPE html>
<?php
ob_start();
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/style.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<style>
	*,
	*:before,
	*:after {
	  box-sizing: border-box;
	}
	body {
	  padding: 1em;
	  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
	  font-size: 15px;
	  background:url(car.png);
	  background-size: 1440px 900px;
	  
	  
	}
	h4 {
	  color: black;
	}
	h1
	{
		color:white;
	}
	input,
	input[type="radio"] + label,
	input[type="checkbox"] + label:before,
	select option,
	select {
	  width: 100%;
	  padding: 1em;
	  line-height: 1.4;
	  background-color: #f9f9f9;
	  border: 1px solid #e5e5e5;
	  border-radius: 3px;
	  -webkit-transition: 0.35s ease-in-out;
	  -moz-transition: 0.35s ease-in-out;
	  -o-transition: 0.35s ease-in-out;
	  transition: 0.35s ease-in-out;
	  transition: all 0.35s ease-in-out;
	}
	input:focus {
	  outline: 0;
	  border-color: #64ac15;
	}
	input:focus + .input-icon i {
	  color: #7ed321;
	}
	input:focus + .input-icon:after {
	  border-right-color: #7ed321;
	}
	input[type="radio"] {
	  display: none;
	}
	input[type="radio"] + label,
	select {
	  display: inline-block;
	  width: 50%;
	  text-align: center;
	  float: left;
	  border-radius: 0;
	}
	input[type="radio"] + label:first-of-type {
	  border-top-left-radius: 3px;
	  border-bottom-left-radius: 3px;
	}
	input[type="radio"] + label:last-of-type {
	  border-top-right-radius: 3px;
	  border-bottom-right-radius: 3px;
	}
	input[type="radio"] + label i {
	  padding-right: 0.4em;
	}
	input[type="radio"]:checked + label,
	input:checked + label:before,
	select:focus,
	select:active {
	  background-color: #7ed321;
	  color: #fff;
	  border-color: #64ac15;
	}
	input[type="checkbox"] {
	  display: none;
	}
	input[type="checkbox"] + label {
	  position: relative;
	  display: block;
	  padding-left: 1.6em;
	}
	input[type="checkbox"] + label:before {
	  position: absolute;
	  top: 0.2em;
	  left: 0;
	  display: block;
	  width: 1em;
	  height: 1em;
	  padding: 0;
	  content: "";
	}
	input[type="checkbox"] + label:after {
	  position: absolute;
	  top: 0.45em;
	  left: 0.2em;
	  font-size: 0.8em;
	  color: #fff;
	  opacity: 0;
	  font-family: FontAwesome;
	  content: "\f00c";
	}
	input:checked + label:after {
	  opacity: 1;
	}
	select {
	  height: 3.4em;
	  line-height: 2;
	}
	select:first-of-type {
	  border-top-left-radius: 3px;
	  border-bottom-left-radius: 3px;
	}
	select:last-of-type {
	  border-top-right-radius: 3px;
	  border-bottom-right-radius: 3px;
	}
	select:focus,
	select:active {
	  outline: 0;
	}
	select option {
	  background-color: #7ed321;
	  color: #fff;
	}
	.input-group {
	  margin-bottom: 1em;
	  zoom: 1;
	}
	.input-group:before,
	.input-group:after {
	  content: "";
	  display: table;
	}
	.input-group:after {
	  clear: both;
	}
	.input-group-icon {
	  position: relative;
	}
	.input-group-icon input {
	  padding-left: 4.4em;
	}
	.input-group-icon .input-icon {
	  position: absolute;
	  top: 0;
	  left: 0;
	  width: 3.4em;
	  height: 3.4em;
	  line-height: 3.4em;
	  text-align: center;
	  pointer-events: none;
	}
	.input-group-icon .input-icon:after {
	  position: absolute;
	  top: 0.6em;
	  bottom: 0.6em;
	  left: 3.4em;
	  display: block;
	  border-right: 1px solid #e5e5e5;
	  content: "";
	  -webkit-transition: 0.35s ease-in-out;
	  -moz-transition: 0.35s ease-in-out;
	  -o-transition: 0.35s ease-in-out;
	  transition: 0.35s ease-in-out;
	  transition: all 0.35s ease-in-out;
	}
	.input-group-icon .input-icon i {
	  -webkit-transition: 0.35s ease-in-out;
	  -moz-transition: 0.35s ease-in-out;
	  -o-transition: 0.35s ease-in-out;
	  transition: 0.35s ease-in-out;
	  transition: all 0.35s ease-in-out;
	}
	.container {
	  max-width: 38em;
	  padding: 1em 3em 2em 3em;
	  margin: 0em auto;
	  background-color: #fff;
	  border-radius: 4.2px;
	  box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
	}
	.row {
	  zoom: 1;
	}
	.row:before,
	.row:after {
	  content: "";
	  display: table;
	}
	.row:after {
	  clear: both;
	}
	.col-half {
	  padding-right: 10px;
	  float: left;
	  width: 50%;
	}
	.col-half:last-of-type {
	  padding-right: 0;
	}
	.col-third {
	  padding-right: 10px;
	  float: left;
	  width: 33.33333333%;
	}
	.col-third:last-of-type {
	  padding-right: 0;
	}
	@media only screen and (max-width: 540px) {
	  .col-half {
	    width: 100%;
	    padding-right: 0;
	  }
	}
	</style>

<body>
	
		<div id="header">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-6">
					<h1>Tinker Bot's Vehicle Trading System</h1>
				</div>
				<div class="col-md-2">
			<div class="dropdown" style="padding-top:15px">
			  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Account Actions<span class="caret"></span></button>
			  <ul class="dropdown-menu">
				  <?php
				  if ( isset($_SESSION['user'])!="" ) {
				   echo '<li><a href="/logout.php" class="logout">Log out</a></li>
			    <li><a href="/account.php" class="button">Your Account</a></li>';
			   }
			   else{
				   echo '<li><a class="button" href="/sign_up.php">Sign Up</a></li>
				<li><a class="button" href="/login.php">Log in</a></li>';
			   }
				  ?>
			    
			    
			  </ul>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">TinkerBots</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="/header.php">Home</a></li>
	      <li><a href="#">Browse Vehicles</a></li>
	      <li class="active"><a href="#">Sell your vehicle</a></li>
	      <li><a href="#">Find Car by Specification</a></li>
	    </ul>
	  </div>
	</nav>
	
	<h1>Sell your car</h1> 
  
<div class="container">
  <form method="post">
    <div class="row">
      <h4>Account</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Full Name" name="fullName"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" placeholder="Email Adress" name="email"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Password" name="pwd"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="DD" name="DD"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="MM" name="MM"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="YYYY" name="YYYY"/>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <h4>Payment Details</h4>
      <div class="input-group col-md-12">
        <input type="radio" name="payment-method" value="card" id="payment-method-card" checked="true"/>
        <label for="payment-method-card"><i class="fa fa-cc-visa"></i>Credit Card</label>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Card Number" name="cardNo"/>
        <div class="input-icon"><i class="fa fa-credit-card"></i></div>
      </div>
      <div class="col-half">
        <div class="input-group input-group-icon">
          <input type="text" placeholder="Card CVC" name="cvc"/>
          <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
	    </div>
      </div>
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
    </div>
	<button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
  
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tinkerbots";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "\nConnected successfully";
	if(isset($_POST['submit']))
	{
			$fullName=$_POST['fullName'];
			$email= $_POST['email'];
			$dd=$_POST['DD'];
			$mm = $_POST['MM'];
			$yyyy = $_POST['YYYY'];
			$cardNo = $_POST['cardNo'];
			$cvc = $_POST['cvc'];
			$dob = $yyyy."-".$mm."-".$dd;
			$sql = "INSERT INTO sellerInfo(FullName,DOB,Email,CardNumber,CVC) VALUES ('$fullName','$dob','$email','$cardNo','$cvc')";
			if ($res = mysqli_query($conn, $sql)) {
				echo 'SUCCESS';
				header("Location: sellCar2.php");
				exit;
		}
	}
	
	
	
	
	
  ?>
  
  
  
  
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
