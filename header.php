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
	h6{
		color:white;
		font-family: times;
	}
	h4{
		color:white;
		font-family: times;
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
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Browse Vehicles</a></li>
      <li><a href="#">Sell your vehicle</a></li>
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
	</div>
	
	
	<table class="table table-bordered">
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
        <tr><td>Manufacturer</td></tr>
        <tr><td>Kilometers Run</td></tr>
        <tr><td>Price</td></tr>
      
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
	
	
	
</body>
					
	