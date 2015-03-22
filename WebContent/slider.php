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
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/slider/Harriet and Abbie.png" />
    </div>
    <div class="item">
      <img src="images/slider/First Position web.png" />
    </div>
    <div class="item">
      <img src="images/slider/Heads Turned.png" />
    </div>
    <div class="item">
        <img src="images/slider/First position2.png" />
    </div>
    <div class="item">
        <img src="images/slider/Beatrice 5th.png" />
    </div>
    <div class="item">
        <img src="images/slider/feet.png" />
    </div>
    <div class="item">
        <img src="images/slider/Harriet 5th.png" />
    </div>
    <div class="item">
        <img src="images/slider/pointe.png" />
    </div>
    <div class="item">
        <img src="images/slider/Zoe.png" />
    </div>
    <div class="item">
        <img src="images/slider/feetjumble.png" />
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