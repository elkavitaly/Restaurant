<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
</style>
</head>
<body>

<div class="header">
  <?php include ('../layout/header.php'); ?>
</div>

<div id="navbar">
  <a class="active" href="javascript:void(0)">Home</a>
  <a href="javascript:void(0)">News</a>
  <a href="javascript:void(0)">Contact</a>
</div>

<div class="content">
 <div class="container-fluid menu" id="navbar">
  <a href="gallery">Галерея</a>
  <a href="review">Обзор</a>
  <a href="Comment">Отзывы</a>
</div>
<div class="container-fluid item">
  <div class="container name_head">
    <div class="row book">
      <div class="col-sm-3 name_item">
        <p><?php echo $arr[$id]['name']; ?></p>
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-2" style="padding-right: 0; padding-left: 31px;">
        <a href="order.php?id_found=<?php echo $arr[$id]['id']; ?>">
          <button type="button" class="btn book_btn">Booking</button>
        </a>
      </div>
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
        <?php if(isset($arr[$id]['gallery'][0])) echo '<img src="'.$arr[$id]['gallery'][1].'" onclick="openModal();currentSlide(2)" height=225px width=100%>'; 
        else echo '<img src="../images/default.png" height=225px width=100%>' ?>  
      </div>
      <div class="row photo_item" >
        <?php if(isset($arr[$id]['gallery'][1])) echo '<img src="'.$arr[$id]['gallery'][2].'" onclick="openModal();currentSlide(3)" height=225px width=100%>'; 
        else echo '<img src="../images/default.png" height=225px width=100%>' ?>
      </div>
    </div>
    <div class="col-sm-3 photo_item">
      <div class="row photo_item">
        <?php if(isset($arr[$id]['gallery'][2])) echo '<img src="'.$arr[$id]['gallery'][3].'" onclick="openModal();currentSlide(4)" height=225px width=100%>'; 
        else echo '<img src="../images/default.png" height=225px width=100%>' ?>
      </div>
      <div class="row photo_item">
        <?php if(isset($arr[$id]['gallery'][3])) echo '<img src="'.$arr[$id]['gallery'][4].'" onclick="openModal();currentSlide(5)" height=225px width=100%>'; 
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
<div class="container-fluid comment">
  <div class="row head_row">
    <div class="container head_rewiew">
      Отзывы
    </div>
  </div>
</div>
</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>
