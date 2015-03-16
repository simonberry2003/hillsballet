<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php">HBS</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li <?php echo ($page == 'home') ? 'class="active"' : '';?>><a href="home.php">Home</a></li>
            <li <?php echo ($page == 'classes') ? 'class="active"' : '';?>><a href="classes.php">Classes</a></li>
            <li <?php echo ($page == 'fees') ? 'class="active"' : '';?>><a href="fees.php">Fees</a></li>
            <li <?php echo ($page == 'timetable') ? 'class="active"' : '';?>><a href="timetable.php">Timetable</a></li>
            <li <?php echo ($page == 'locations') ? 'class="active"' : '';?>><a href="location.php">Locations</a></li>
            <li <?php echo ($page == 'contact') ? 'class="active"' : '';?>><a href="contact.php">Contact</a></li>
            <li <?php echo ($page == 'register') ? 'class="active"' : '';?>><a href="register.php">Register</a></li>
            <li <?php echo ($page == 'about') ? 'class="active"' : '';?>><a href="about.php">About</a></li>
            <li <?php echo ($page == 'facebook') ? 'class="active"' : '';?>><a href="https://www.facebook.com/tiptoeinthehills" title="Find us on facebook" target="_TOP">Facebook</a></li>
        </ul>
    </div>
  </div>
</nav>
