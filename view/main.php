<?php session_start(); $_SESSION['page']='main'; ?>
<?php include ('../layout/header.php');
	$arr=include ('../source/data.php'); ?>
	
	<div class="main">
		<div class="search_head">
			Найди столик на любой случай
		</div>

		<div class="container search_elem">	
			<form method="POST">
				<div class="row" style="padding: 0; margin: 0;">
					<div class="col-sm-5 name_place">
						<input type="text" name="place" list="restaurants" autofocus autocomplete="off" class="form_in" placeholder="Enter the restaurant"></input>
						<datalist id="restaurants">
							<?php foreach ($arr as $item => $value): ?>
						  		<option>
						  			<?php echo $value['name']; ?>
						  		</option>
							<?php endforeach; ?>
						</datalist>
					</div>

					<div class="col-sm-3 date_place">
						<input class="date_in" name="date" id="date_today" type="date"></input>
					</div>
					<div class="col-sm-2 date_place ">
						<input class="date_in"  list="times" name="time" id="time_today" type="text" placeholder="9:00"></input>
						<datalist id="times">
							<?php for ($i=9; $i < 24; $i++) echo '<option>'.$i.':00</option>';?>
						</datalist>
					</div>
					<div class="col-sm-2">
						<button class="btn submit" name="btn" type="submit">Search</button>
					</div>
				</div>
			</form>
			<?php include("../source/search.php"); ?>
		</div>

		<div id="myCarousel" class="carousel slide" >

			<ul class="carousel-indicators">
		    	<li class="item1 active"></li>
		   		<li class="item2"></li>
		    	<li class="item3"></li>
		  	</ul>
		  	
		  <!-- The slideshow -->
		  	<div class="carousel-inner">
		    	<div class="carousel-item active" style="padding: 0; margin: 0;">
		      		<img class="slide_image" src="../images/r4.jpg"  width="100%" height="595">
		    	</div>
		    	<div class="carousel-item">
		      		<img class="slide_image" src="../images/r5.jpg" width="100%" height="595">
		   		</div>
		    	<div class="carousel-item">
		      		<img class="slide_image" src="../images/r3.jpg" width="100%" height="595">
		    	</div>
		  	</div>
		</div>
		<a id="popular"></a>
		<div class="container-fluid popular">
			<div class="container-fluid popular_head">
				<p>Популярные места</p>
			</div>
			<div class="container popular_table">
				<?php $ind=1; for ($i=1; $i < 4; $i++): ?>
					<div class="row">
						<?php for ($j=1; $j < 4; $j++): ?>
							<div class="col-sm-4 pop_place">
								<a href="view.php?id_found=<?php echo $arr[$ind]['id']; ?>">	
									<img class="pop_img" src="<?php echo $arr[$ind]['gallery'][0]; ?>" height="170px" width="300px" >
									<div class="picture_name"><?php echo $arr[$ind]['name']; ?></div>
								</a>
							</div>
						<?php $ind++; endfor; ?>
					</div>
				<?php endfor; ?>
			</div>
		</div>
		<a id="stock"></a>
		<div class="container-fluid stock">
			<div class="container-fluid popular_head">
				<p>Акции</p>
			</div>
			<div class="container stock_text">
				В данный момент акций нет
			</div>
		</div>
	</div>
<script type="text/javascript">
	$('.picture_name').mouseover(function(e){
		this.parentNode.getElementsByClassName('pop_img')[0].style.transform = "scale(0.95)";
	})
	$('.picture_name').mouseleave(function(e){
		this.parentNode.getElementsByClassName('pop_img')[0].style.backgroundColor = "black";
	})

	$('.picture_name').mouseleave(function(e){
		this.parentNode.getElementsByClassName('pop_img')[0].style.transform = "scale(1)";
	})
</script>
<?php include ('../source/script.php'); ?>
<?php include ('../layout/footer.php'); ?>