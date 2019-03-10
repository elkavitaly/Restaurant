<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Booking</title>
		<link rel="icon" type="image/png" href="../images/icon 	.png" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link href="https://fonts.googleapis.com/css?family=Oswald|Sanchez|Sigmar+One|Lalezar" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
	</head>

	<body>
		<div class="container-fluid">
			<?php 
				ini_set('display_errors', 1);
				error_reporting(E_ALL);
			?>
		</div>	
		<header>
		  	<div class="container-fluid" >
		  		<div class="row text-center text-red row_header">
		  			<div class="col-sm-2"><a href="main.php"><img src="../images/logo4.png" align="Left" width="200" height="70"></a></div>
		  			<!-- <div class="col-sm-1 head_el"><a href="list.php"><img src="../images/list.png" height="40px" width="40px"></a></div> -->
					<div class="col-sm-2 head_link"><a href="../view/main.php#popular">Популярные</a></div>
					<div class="col-sm-2 head_link"><a href="list.php">Рестораны</a></div>
					<div class="col-sm-2 head_link"><a href="main.php#stock">Акции</a></div>
		  			<div class="col-sm-1"></div>
		  			<?php if($_SESSION['status']!='logged'): ?>
			  			<div class="col-sm-1 head_el"><a href="../login/sign up.php"><button type="button" class="btn sing_up">Sign up</button></a></div>
			  			<div class="col-sm-1 head_el"><a class="hvr-fade" href="../login/sign in.php"><button type="button" class="btn sing_in">Sign in</button></a></div>
		  			<?php else: ?> 
		  				<div class="col-sm-1" style="font-size: 18px; width: 100%;">Hello, <?php if(isset($_SESSION['user_name'])) echo $_SESSION['user_name']; else echo 'Vitaly'; ?></div>
			  			<div class="col-sm-1 head_el"><form method="POST" action="../source/logout.php"><button type="submit" name="logout" class="btn sing_up">Log out</button></form></div>			  			
		  			<?php endif; ?> 
		  		</div>
		  	</div>
		</header>
