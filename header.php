<?php
 session_start();
 require_once 'dbconnect.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }?>

<html>
<head>
	<title>Vehicle Trading System | <!--Do Something smart here--> </title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="shortcut icon" type="image/x-icon" href="tinkerbots.png" />
	<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
	h1 {
		font-family: Futura, "Trebuchet MS", Arial, sans-serif;
		font-size: 24px;
		font-style: normal;
		font-variant: normal;
		font-weight: 500;
		line-height: 26.4px;
		color:white;
		text-shadow: -0.5px 0 black, 0 0.5px black, 0.5px 0 black, 0 -0.5px black;
	}
	head
	{
		background:gray;
	}
	h6{
	font-family: Futura, "Trebuchet MS", Arial, sans-serif;
		font-size: 14px;
		font-style: normal;
		font-variant: normal;
		font-weight: 400;
		line-height: 20px;
		color:gray;
	}
	h4 {
		font-family: Futura, "Trebuchet MS", Arial, sans-serif;
		font-size: 14px;
		font-style: normal;
		font-variant: normal;
		font-weight: 500;
		line-height: 15.4px;
		color:white;
		text-shadow: -0.5px 0 black, 0 0.5px black, 0.5px 0 black, 0 -0.5px black;
	}
	
	body{
		background: url(car.png);
		background-size: 1366px 768px; ss
	}
	
	
	.table-hover-cells > tbody > tr > th:hover,
	.table-hover-cells > tbody > tr > td:hover {
	  background-color: rgba(232,232,232,0.4)
	  
	}

	.table-hover-cells > tbody > tr > th.active:hover,
	.table-hover-cells > tbody > tr > td.active:hover,
	.table-hover-cells > tbody > tr.active > th:hover,
	.table-hover-cells > tbody > tr.active > td:hover {
	  background-color: rgba(232,232,232,0.4)
	}

	.table-hover.table-hover-cells > tbody > tr:hover > th:hover,
	.table-hover.table-hover-cells > tbody > tr:hover > td:hover {
	  background-color: rgba(232,232,232,0.4)
	}

	.table-hover.table-hover-cells > tbody > tr.active:hover > th:hover,
	.table-hover.table-hover-cells > tbody > tr.active:hover > td:hover {
	  background-color: rgba(216,216,216,0.4)
	}
	
	.sidenav {
	    height: 100%;
	    width: 0;
	    position: fixed;
	    z-index: 1;
	    top: 0;
	    left: 0;
	    background-color: 111;
	    overflow-x: hidden;
	    transition: 0.5s;
	    padding-top: 60px;
	}

	.sidenav a {
	    padding: 8px 8px 8px 32px;
	    text-decoration: none;
	    font-size: 25px;
	    color: gray;
	    display: block;
	    transition: 0.3s;
	}

	.sidenav a:hover, .offcanvas a:focus{
	    color: #f1f1f1;
	}

	.sidenav .closebtn {
	    position: absolute;
	    top: 0;
	    right: 25px;
	    font-size: 36px;
	    margin-left: 50px;
	}

	@media screen and (max-height: 450px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}
	
	input[type=text] {
	    width: 130px;
	    box-sizing: border-box;
	    border: 2px solid #ccc;
	    border-radius: 4px;
	    font-size: 16px;
		margin:10px;
	    background-color: white;
	    background-image: url('searchicon2.png');
	    background-position: 10px 10px; 
	    background-repeat: no-repeat;
	    padding: 12px 20px 12px 40px;
	    -webkit-transition: width 0.4s ease-in-out;
	    transition: width 0.4s ease-in-out;
	}

	input[type=text]:focus {
	    width: 90%;
	}
	</style>

	<div id="page-wrap">
		<div id="header">
			<div class="row">
				<div class="col-md-2" style="text-align:left; padding-top:25px;padding-left:50px">
					<span style="font-size:30px;cursor:pointer;color:D6D6D6" onclick="openNav()">&#9776;</span>
				</div>
				<div class="col-md-2" style="text-align:left; padding-right:25px">
					<img src="tinkerbots.png" width="120px" height="100px">
				</div>
				<div class="col-md-6" style="padding:10px">
					<h1>Tinker Bot's Vehicle Trading System</h1>
				</div>
				<div class="col-md-2">
			<div class="dropdown" style="padding:15px">
			  <button class="btn btn-primary dropdown-toggle" style = "background-color:#D6D6D6; color:black" type="button" data-toggle="dropdown"><?php 
				  $email = $_SESSION['user'];
				  echo "<h6>Welcome, $email</h6>";
				  ?></button>
			  <ul class="dropdown-menu">
 				  <?php
 				  if ( isset($_SESSION['user'])!="" ) {
 				   echo '<li><a href="/logout.php" class="logout"><h6>Log out</h6></a></li>
 			    <li><a href="/account.php" class="button"><h6>Your Account</h6></a></li>';
 			   }
 			   else{
 				   echo '<li><a class="button" href="/sign_up.php"><h6>Sign Up</h6></a></li>
 				<li><a class="button" href="/login.php"><h6>Log in</h6></a></li>';
 			   }
 				  ?>
			    
			  </ul>
			</div>
		</div>
	</div>
</div>
	


<nav class="navbar navbar-default" style="margin:10px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TinkerBots</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Your Messages</a></li>
      <li><a href="#">Sell your vehicle</a></li>
      <li><a href="#">Find Car by Specification</a></li>
    </ul>
  </div>
</nav>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#" data-toggle="modal" data-target="#myModal">Filter Cars</a>
  <a href="#">About Us</a>
  <a href="#">News</a>
  <a href="#">Contact Us</a>
</div>	
			
		<div id="main">
			<noscript>This site just doesn't work, period, without JavaScript</noscript>
			<!-- IF LOGGED IN -->

			          <!-- Content here -->

			   <!-- IF LOGGED OUT -->

			          <!-- Alternate content here -->
		</div>
	</div>
	</head>
	<body>
	<input type="text" name="search" placeholder="Search..">
	<table class="table table-hover-cells">
	    <tbody>
	      <?php
		  	$images_from_db = array('alto.png','zen.png','alto.png','zen.png','alto.png','zen.png','alto.png','zen.png','alto.png','zen.png','alto.png','zen.png','alto.png','zen.png','alto.png','zen.png','alto.png','zen.png','alto.png','zen.png','alto.png','zen.png','alto.png','zen.png','alto.png','zen.png','alto.png','zen.png','alto.png','zen.png','alto.png','zen.png');
			$counter = 0;
			echo '<tr>';
			foreach($images_from_db as $key=>$value)
			{
				$counter++;
				echo '<td>';
				echo '<div class="row"><div class="col-md-7">';
				echo '<img src="';
				echo $value;
				echo '" width="120px" height="100px"></div><div class="col-md-5"><h4>Car Name</h4></div></div><table class="table table-striped">
        <tr><td><h6>Manufacturer</h6></td></tr>
        <tr><td><h6>Kilometers Run</h6></td></tr>
        <tr><td><h6>Price</h6></td></tr>
		<tr><td><h6>Year</h6></td></tr>
		<tr><td><h6>Fuel</h6></td></tr>
      
    </table></td>';
				
				if($counter%4 == 0)
				{
					echo '</tr><tr>';
				}
			}
			echo '</tr>';
			
			
			?>
	    </tbody>
	  </table>
	</div>
	</div>
	<script>
	function openNav() {
	    document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
	    document.getElementById("mySidenav").style.width = "0";
	}
	</script>
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h6 class="modal-title">Filter Price</h6>
	      </div>
	      <div class="modal-body">
			<label class="radio-inline"><input type="radio" name="optradio">< 2 Lac</label>
			<label class="radio-inline"><input type="radio" name="optradio">2 - 4 Lac</label>
			<label class="radio-inline"><input type="radio" name="optradio">4 - 6 Lac</label>
			<label class="radio-inline"><input type="radio" name="optradio">6 - 9 Lac</label>
			<label class="radio-inline"><input type="radio" name="optradio">9 - 12 Lac</label>
			<label class="radio-inline"><input type="radio" name="optradio">> 12 Lac</label>
	      </div>
	      <div class="modal-header">
	        <h6 class="modal-title">Filter Kilometers</h6>
	      </div>
	      <div class="modal-body">
			<label class="radio-inline"><input type="radio" name="optradio">< 10k</label>
			<label class="radio-inline"><input type="radio" name="optradio">10 - 20k</label>
			<label class="radio-inline"><input type="radio" name="optradio">20 - 30k</label>
			<label class="radio-inline"><input type="radio" name="optradio">30 - 40k</label>
			<label class="radio-inline"><input type="radio" name="optradio">40 - 50k</label>
			<label class="radio-inline"><input type="radio" name="optradio">> 50k</label>
	      </div>
	      <div class="modal-header">
	        <h6 class="modal-title">Filter Car Type</h6>
	      </div>
	      <div class="modal-body">
			<label class="radio-inline"><input type="radio" name="optradio">Hatchback</label>
			<label class="radio-inline"><input type="radio" name="optradio">Coupe</label>
			<label class="radio-inline"><input type="radio" name="optradio">SUV</label>
			<label class="radio-inline"><input type="radio" name="optradio">Sedan</label>
			<label class="radio-inline"><input type="radio" name="optradio">Convertible</label>
			<label class="radio-inline"><input type="radio" name="optradio">Minivan</label>
	      </div>
	      <div class="modal-header">
	        <h6 class="modal-title">Filter Car Age</h6>
	      </div>
	      <div class="modal-body">
			<label class="radio-inline"><input type="radio" name="optradio">< 1 year</label>
			<label class="radio-inline"><input type="radio" name="optradio">2 years</label>
			<label class="radio-inline"><input type="radio" name="optradio">3 years</label>
			<label class="radio-inline"><input type="radio" name="optradio">4 years</label>
			<label class="radio-inline"><input type="radio" name="optradio">5 years</label>
			<label class="radio-inline"><input type="radio" name="optradio">6 years and above</label>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>
	
</body>
					
	