<?php include ('../layout/header.php'); ?>

<?php $arr=include'../source/data.php';?>
<div class="container-fluid">
<div class="container list_tools">
	<div class="row">
		<div class="col-sm-1 list-col"></div>
		<div class="col-sm-5 list-col tool">

		<form method="POST">
			Сортировка 
			<select name="opt" id="opt" style="border-style: solid; border-width: 2px; border-radius: 3px; border-color: #d8cdce; width: 135px; height:30px; padding: 0; margin:0; font-size: 16px; " onchange="this.form.submit()">
				<option value="популярные"> 
					популярные
				</option>
				<option value="по названию">
					по названию
				</option>
				<option value="по рейтингу">
					по рейтингу
				</option>
				
			</select>
		</form>
		<?php 
			if(isset($_POST['opt'])){
				if($_POST['opt'] == "по названию"){
					usort($arr, function($a, $b){
    					return ($a['name'] > $b['name']);
					});
				}
				else if($_POST['opt'] == "по рейтингу"){
					usort($arr, function($a, $b){
    					return ($b['rate'] - $a['rate']);
					});
				}
				else if($_POST['opt'] == "популярные"){
					
				}
			}
		?>

		<script type="text/javascript">
			var val = document.getElementById('opt');
			val.value="<?php echo $_POST['opt']; ?>";
		</script>

		</div>
		<div class="col-sm-5 list-col tool">
			
		</div>
		<div class="col-sm-1 list-col"></div>
	</div>
</div>
</div>
<div class="container-fluid">
	<?php foreach ($arr as $item => $value): ?>
		
		<div class="container-fluid list_item">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-3">
					<div class="row list_photo">
						<?php echo '<img src="'.$value["gallery"][0].'" height="250px" width="300px">'; ?>
					</div>
				</div>
				
				<div class="col-sm-7 info_list">
					<div class="row list_name">
						<a href="view.php?id_found=<?php echo $value["id"]; ?>"><?php echo $value["name"]; ?></a>
					</div>
					<div class="row list_it">
						Кухня: <?php echo $value["cuisine"]; ?>
					</div>
					<div class="row list_it">
						Адрес: <?php echo $value["address"]; ?>
					</div>
					<div class="row list_it">
						Рейтинг: <?php echo $value["rate"]/10; ?>/5
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>

<?php include ('../layout/footer.php'); ?>