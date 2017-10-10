

<?php
 ob_start();
 session_start();
 // it will never let you open index(login) page if session is set
 
 ?>

<html>
<head>
	<title>Vehicle Trading System | <!--Do Something smart here--> </title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="shortcut icon" type="image/x-icon" href="https://cdn.css-tricks.com/favicon.ico" />
	<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	h1{
		color:white;
		font-family: times;
		text-shadow : -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	}
	
	h3{
		color:white;
		font-family: times;
		text-shadow : -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
		padding-left :30px;
	}
	h4{
		color:white;
		font-family: times;
		padding-left :10px;
		text-shadow : -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	}
	</style>
<body background="gradientnew.jpg">
	<div id="page-wrap">
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
			    <li><a href="/logout.php" class="button">Log out</a></li>
			    <li><a href="/account.php" class="button">Your Account</a></li>
			    <li><a class="button" href="/sign_up.php">Sign Up</a></li>
				<li><a class="button" href="/login.php">Log in</a></li>
			  </ul>
			</div>
		</div>
	</div>
</div>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TinkerBots</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/header.php">Home</a></li>
      <li><a href="#">Browse Vehicles</a></li>
      <li><a href="/sellCar.php">Sell your vehicle</a></li>
      <li><a href="#">Find Car by Specification</a></li>
    </ul>
  </div>
</nav>
			
		<div id="main">
			<noscript>This site just doesn't work, period, without JavaScript</noscript>
			<!-- IF LOGGED IN -->

			          <!-- Content here -->

			   <!-- IF LOGGED OUT -->

			          <!-- Alternate content here -->
		</div>
		<p><h3>CONTACT US :<br></h3></p>
		
		<form class="form-horizontal" style="padding:10px" method="post">
		  <div class="form-group">
		    <h4>&nbsp;&nbsp;&nbsp; Toll Free : 18000666</h4></label>
		  </div>
		  <div class="form-group">
		    <h4>&nbsp;&nbsp;&nbsp; Email : tinkerbots@gmail.com</h4></label>
		  </div>

</form>
</div>
</body>
</html>
