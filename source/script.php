<script>
$(document).ready(function(){
    // Activate Carousel with a specified interval
    $("#myCarousel").carousel({interval: 5000});
        
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    
    // Enable Carousel Controls
    $(".carousel-control-prev").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".carousel-control-next").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>

<script>
    var date=new Date();
	document.getElementById('date_today').valueAsDate = date;
    var min=date.getMinutes();
    var hour=date.getHours();
    if(min<10){
        min="0"+min;
    }
    if(hour<10){
        hour="0"+hour;
    }
    document.getElementById('time_today').value =hour+":00";

</script>