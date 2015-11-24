<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
    <li data-target="#carousel" data-slide-to="4"></li>
    <li data-target="#carousel" data-slide-to="5"></li>
    <li data-target="#carousel" data-slide-to="6"></li>
    <li data-target="#carousel" data-slide-to="7"></li>
    <li data-target="#carousel" data-slide-to="8"></li>
    <li data-target="#carousel" data-slide-to="9"></li>
    <li data-target="#carousel" data-slide-to="10"></li>
    <li data-target="#carousel" data-slide-to="11"></li>
    <li data-target="#carousel" data-slide-to="12"></li>
    <li data-target="#carousel" data-slide-to="13"></li>
    <li data-target="#carousel" data-slide-to="14"></li>
    <li data-target="#carousel" data-slide-to="15"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/slider/Harriet and Abbie.jpg" />
    </div>
    <div class="item">
      <img src="images/slider/First Position web.jpg" />
    </div>
    <div class="item">
      <img src="images/slider/Image 1.jpg" />
    </div>
    <div class="item">
      <img src="images/slider/Heads Turned.jpg" />
    </div>
    <div class="item">
      <img src="images/slider/Image 2.jpg" />
    </div>
    <div class="item">
        <img src="images/slider/First position2.jpg" />
    </div>
    <div class="item">
      <img src="images/slider/Image 3.jpg" />
    </div>
    <div class="item">
        <img src="images/slider/Beatrice 5th.jpg" />
    </div>
    <div class="item">
      <img src="images/slider/Image 4.jpg" />
    </div>
    <div class="item">
        <img src="images/slider/feet.jpg" />
    </div>
    <div class="item">
      <img src="images/slider/Image 5.jpg" />
    </div>
    <div class="item">
        <img src="images/slider/Harriet 5th.jpg" />
    </div>
    <div class="item">
        <img src="images/slider/pointe.jpg" />
    </div>
    <div class="item">
      <img src="images/slider/Image 6.jpg" />
    </div>
    <div class="item">
        <img src="images/slider/Zoe.jpg" />
    </div>
    <div class="item">
        <img src="images/slider/feetjumble.jpg" />
    </div>
  </div>
  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> 
<br>
<script>
  $(document).ready(function() {  
         $("#carousel").swiperight(function() {  
              $(this).carousel('prev');  
                });  
           $("#carousel").swipeleft(function() {  
              $(this).carousel('next');  
       });  
    });  
</script>