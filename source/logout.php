<?php session_start(); ?>
<?php 
		
	if(isset($_POST['logout'])){
		$_SESSION['status']='unlogged';
		header('Location: ../view/main.php');
	} 
		
?>