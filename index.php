<?php session_start(); 
	$_SESSION['status']='unlogged';
?>
<?php header('Location: /view/main.php'); ?>