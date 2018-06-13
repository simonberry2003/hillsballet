<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php">
      	<img src="images/Logo.jpg" alt="Hills Ballet School" style="margin-right:3px; padding:0; display:inline; width:32px; height:32px;">
      Hills Ballet School</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li <?php echo ($page == 'about') ? 'class="active"' : '';?>><a href="about.php">About</a></li>
            <li <?php echo ($page == 'locations') ? 'class="active"' : '';?>><a href="location.php">Locations</a></li>
            <li <?php echo ($page == 'timetable') ? 'class="active"' : '';?>><a href="timetable.php">Timetable</a></li>
            <li <?php echo ($page == 'classes') ? 'class="active"' : '';?>><a href="classes.php">Classes</a></li>
            <li <?php echo ($page == 'fees') ? 'class="active"' : '';?>><a href="fees.php">Fees</a></li>
            <li <?php echo ($page == 'safedance') ? 'class="active"' : '';?>><a href="safedance.php">Safe Dance</a></li>
            <li <?php echo ($page == 'contact') ? 'class="active"' : '';?>><a href="contact.php">Contact</a></li>
            <li <?php echo ($page == 'facebook') ? 'class="active"' : '';?>><a href="https://www.facebook.com/tiptoeinthehills" title="Find us on facebook" target="_TOP">Facebook</a></li>
        </ul>
    </div>
  </div>
</nav>

<?php if ($page == 'home'): ?>
<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('images/slider/Harriet and Abbie.jpg');"></div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
<?php endif; ?>
</header>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
    interval: 5000 //changes the speed
})
</script>
