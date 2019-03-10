<?php
	$arr=include'../source/data.php';
	if(isset($_POST['place']) && isset($_POST['date']) && isset($_POST['time']) && $_POST['place']!=""){
		$link="";
		$result="";
		foreach ($arr as $item => $value) {
			if($_POST['place']==$value['name']){
				$link=$value['link'];
				$result=$item;
				break;
			}
		}
		if($result!=""){
			$_SESSION['id_found']=$result;
			$_SESSION['date']=$_POST['date'];
			$_SESSION['time']=$_POST['time'];
			header('Location: ../view/view.php');
		}
		else
			header('Location: ../view/main.php');
	}
?>