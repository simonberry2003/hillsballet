<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "includes.php" ?>
	<?php include "head.html" ?>
	<link rel="stylesheet" href="css/timetablejs.css">
	<script src="js/timetable.js"></script>
</head>
<body>
	<?php $page="timetable" ?>
	<?php include "menu.php" ?>
	
	<div class="container">
	  	<div class="row">
		    <div class="col-lg-12">
	        	<h1 class="page-header">2019 Timetable</h1>
			    <?php include "alert.php" ?>
	    	</div>
			<?php include "timetable/monday.html" ?>
			<?php include "timetable/tuesday.html" ?>
			<?php include "timetable/wednesday.html" ?>
			<?php include "timetable/thursday.html" ?>
			<?php include "timetable/friday.html" ?>
			<?php include "timetable/saturday.html" ?>
		</div>
	</div>
	
	<div class="panel-footer">
		<?php include "footer.html" ?>
	</div>
</body>
</html>
