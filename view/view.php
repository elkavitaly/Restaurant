<div class="header">
<?php include ('../layout/header.php'); $_SESSION['page']='view'; ?>
</div>
<?php 
	$arr=include('../source/data.php'); 
	
	if(isset($_GET['id_found'])){
		$id=$_GET['id_found'];
		unset($_GET['id_found']);
	}
	else if(isset($_SESSION['id_found'])){
		$id=$_SESSION['id_found'];
		unset($_SESSION['id_found']);
	}
	else
		echo "id not found";
?>
<div class="content">
<div class="container-fluid menu" id="navbar">
	<div class="row" style="padding: 0; margin: 0;">
	<div class="col-sm-1 menu_col1"><a href="#gallery" id="1" onclick="reference(this)">Галерея</a></div>
	<div class="col-sm-1 menu_col1"><a href="#review" id="2" onclick="reference(this)">Обзор</a></div>
	<div class="col-sm-1 menu_col1"><a href="#comment" id="3" onclick="reference(this)">Отзывы</a></div>
	
	
	<div class="col-sm-2"></div>
	<div class="col-sm-2" style="padding: 0 0 0 58px;">
	<a href="order.php?id_found=<?php echo $arr[$id]['id']; ?>">
		<button type="button" class="btn book_btn">Booking</button>
	</a>
	</div>
	</div>
</div>
<a name="gallery"></a>
<div class="container-fluid item">

	<div class="container name_head">
		<div class="row book">
			<div class="col-sm-3 name_item">
				<p><?php echo $arr[$id]['name']; ?></p>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
	<div class="container rev_pict">
	<div class="row" style="margin: 0; padding: 0" >
		<div class="col-sm-6 photo_item">
			<div class="container photo_item">
		 		<?php echo '<img src="'.$arr[$id]['gallery'][0].'" onclick="openModal();currentSlide(1)" height=454px width=100%>'; ?>
			</div>
		</div>
		<div class="col-sm-3 photo_item">
			<div class="row photo_item">
				<?php if(isset($arr[$id]['gallery'][1])) echo '<img src="'.$arr[$id]['gallery'][1].'" onclick="openModal();currentSlide(2)" height=225px width=100%>'; 
				else echo '<img src="../images/default.png" height=225px width=100%>' ?>	
			</div>
			<div class="row photo_item" >
				<?php if(isset($arr[$id]['gallery'][2])) echo '<img src="'.$arr[$id]['gallery'][2].'" onclick="openModal();currentSlide(3)" height=225px width=100%>'; 
				else echo '<img src="../images/default.png" height=225px width=100%>' ?>
			</div>
		</div>
		<div class="col-sm-3 photo_item">
			<div class="row photo_item">
				<?php if(isset($arr[$id]['gallery'][3])) echo '<img src="'.$arr[$id]['gallery'][3].'" onclick="openModal();currentSlide(4)" height=225px width=100%>'; 
				else echo '<img src="../images/default.png" height=225px width=100%>' ?>
			</div>
			<div class="row photo_item">
				<?php if(isset($arr[$id]['gallery'][4])) echo '<img src="'.$arr[$id]['gallery'][4].'" onclick="openModal();currentSlide(5)" height=225px width=100%>'; 
				else echo '<img src="../images/default.png" height=225px width=100%>' ?>
			</div>
		</div>
	</div>
	</div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
  	<?php for ($i=0; $i < 5 ; $i++): ?>
  	<div class="mySlides">
      	<img src="<?php echo $arr[$id]['gallery'][$i]; ?>"  style="width:600px; height: 400px;">
    </div>
	<?php endfor; ?>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    
    <div class="container-fluid" >
    <!-- Thumbnail image controls -->
    <?php for ($i=0; $i < 5; $i++): ?>
	    <div class="column">
	      <img class="demo" src="<?php echo $arr[$id]['gallery'][$i]; ?>" width=100% height=140px onclick="currentSlide(<?php echo $i+1; ?>)" >
	    </div>
	<?php endfor; ?>
	</div>
  </div>
</div>

<!-- ///////////// -->
<a name="review"></a>
<div class="container-fluid review_cont">
	
	<div class="row head_row">
		<div class="container head_rewiew">
			Обзор
		</div>
	</div>
	<div class="container review">
		<div class="row" style="height: 100%; padding-bottom: 50px;">
			<div class="col-sm-6">
				<div class="container grafik">
					<h3>ВРЕМЯ РАБОТЫ</h3>
					11:00 - 23:00&emsp;Вс</br>
					9:00 - 23:00&emsp;&ensp;Пн - Сб
				</div>
				<div class="container">
					<h3>КУХНЯ</h3>
					<?php echo $arr[$id]['cuisine']; ?>
				</div>
				<div class="container services">
					<h3>ОЦЕНКИ</h3>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					Обслуживание</br>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star "></span>
					<span class="fa fa-star "></span>
					Цена/качество</br>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star "></span>
					Питание</br>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star "></span>
					Атмосфера
				</div>
				<div class="container">
					<h3>МЕСТОПОЛОЖЕНИЕ</h3><?php echo $arr[$id]['address']; ?>
				</div>
			</div>
		
			<div class="col-sm-6">
				<div id="map" style="height: 100%; width: 100%;"></div>
			</div>
		</div>
	</div>	
</div>
<a name="comment"></a>
<div class="container-fluid comment">
	<div class="row head_row">
		<div class="container head_rewiew">
			Отзывы
		</div>
	</div>
	<div class="container-fluid">
		<div class="container first_com">
			Будьте первым, кто оставит отзыв
		</div>
		<div class="container">
			<form>
				<textarea id="area" class="com_text"></textarea></br>
				<input type="button" onclick="comment()" class="btn sing_up" value="Отправить"></input>
			</form>
		</div>
	</div>
</div>
</div>
<?php include ('../layout/footer.php'); ?>
<script type="text/javascript">
	function comment(){
		var el = $("#area").val();
		if(el != ""){
			alert("Ваш отзыв отправлен на проверку");
			$("#area").val("");
		}
		else
			alert("Вы ничего не ввели");
	}
</script>

<script>
	function reference(el){	

		for (var i = 1; i < 4; i++) {
			if(document.getElementById(i+"").classList.contains("active"))
				document.getElementById(i+"").classList.remove("active");
		}
		el.classList.add("active");
	}
</script>


<script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>

<script type="text/javascript">

        // Определяем переменную map
        var map;

        // Функция initMap которая отрисует карту на странице
        function initMap() {

            // В переменной map создаем объект карты GoogleMaps и вешаем эту переменную на <div id="map"></div>
            map = new google.maps.Map(document.getElementById('map'), {
                // При создании объекта карты необходимо указать его свойства
                // center - определяем точку на которой карта будет центрироваться
                center: {lat: 50.007015, lng: 36.237997},
                // zoom - определяет масштаб. 0 - видно всю платнеу. 18 - видно дома и улицы города.
                zoom: 15
            });
            var marker = new google.maps.Marker({

		    // Определяем позицию маркера
		    position: {lat: 50.007015, lng: 36.237997},

		    // Указываем на какой карте он должен появится. (На странице ведь может быть больше одной карты)
		    map: map,
		    title: "<?php echo $arr[$id]['name']; ?>"
		});
	    }
</script>

<script>
window.onscroll = function() {myFunction(); myFunction1()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  	if (window.pageYOffset >= sticky) {
    	navbar.classList.add("sticky")
  	} 
  	else
    	navbar.classList.remove("sticky");
}

function myFunction1() { 
	var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	if (scrollTop >= 70 && scrollTop<580) {
        //document.getElementById("2").classList.remove("active");
        document.getElementById("1").classList.add("activem");
    } 
    else
    	document.getElementById("1").classList.remove("activem");

    if (scrollTop >= 580 && scrollTop<1200) {
        document.getElementById("2").classList.add("activem");
    } 
    else
    	document.getElementById("2").classList.remove("activem");

   	if ( scrollTop >= 1200 && scrollTop<2040) {
        document.getElementById("3").classList.add("activem");
    }
    else
    	document.getElementById("3").classList.remove("activem");

}
</script>

<script>  	
//Light box

// Open the Modal
function openModal() {
  	document.getElementById('myModal').style.display = "block";

}
// Close the Modal
function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);

}

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("demo");
	var captionText = document.getElementById("caption");
	if (n > slides.length) {slideIndex = 1}
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" activel", "");
	}
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " activel";
}
</script>