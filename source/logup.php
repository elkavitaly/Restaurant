<?php session_start(); ?>
<?php 
		$_SESSION['status']='logged';
		$_SESSION['user']['user_name']=$_POST['name'];
		$_SESSION['user']['user_surname']=$_POST['surname'];
		$_SESSION['user']['email']=$_POST['email'];
		header('Location: ../view/main.php');
?>