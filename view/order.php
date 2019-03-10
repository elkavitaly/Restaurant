<?php include ('../layout/header.php'); ?>

<?php 
	$arr=include('../source/data.php'); 
	if(isset($_SESSION['id_found'])){
		$id=$_SESSION['id_found']; 
	}
	else if(isset($_GET['id_found'])){
		$id=$_GET['id_found'];
		unset($_GET['id_found']);
	}
?>

<div class="container-fluid">
	<div class="container order_head">
		Оформить заказ
	</div>
	<div class="container">
		<form method="POST" action="result.php" style="padding: 0; margin: 0;">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class=" container rest">
					Ресторан: <?php echo $arr[$id]['name']; ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-4">
				<label>Время</label>
				<input class="input_order" list="times" name="time" value="<?php if(isset($_SESSION['time'])) echo $_SESSION['time']; ?>" type="text"></input>
				<datalist id="times">
					<?php for ($i=9; $i < 24; $i++) { 
						echo '<option>'.$i.':00</option>';
					} ?>
				</datalist>
			</div>
			<div class="col-sm-4">
				<label>Фамилия</label>
				<input type="text" class="input_order" name="last_name_form" value="<?php if($_SESSION['status']=='logged' && isset($_SESSION['user']['user_surname'])) echo $_SESSION['user']['user_surname']; ?>" required autocomplete="off">
			</div>
			<div class="col-sm-2"></div>
		</div>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-4">
				<label>Дата</label>
				<input class="input_order" name="date" id="date_today" value="<?php if(isset($_SESSION['date'])) echo $_SESSION['date']; ?>" type="date"></input>
			</div>
			<div class="col-sm-4">
				<label>E-mail</label>
				<input type="email" class="input_order" name="email" value="<?php if($_SESSION['status']=='logged' && isset($_SESSION['user']['email'])) echo $_SESSION['user']['email']; ?>" required>
			</div>
			<div class="col-sm-2"></div>
		</div>
		<div class="row">
			<div class="col-sm-5"></div>
			<div class="col-sm-2">
				<button class="btn btn_order" name="btn" type="submit">Заказать</button>
			</div>
		</div>
		</form>
	</div>
</div>
</div>

<?php 
	if(isset($_POST['fist_name_form'])){
		header('Location: main.php');
	}
 ?>

<?php include ('../layout/footer.php'); ?>