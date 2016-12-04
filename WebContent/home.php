<!DOCTYPE html>
<html lang="en">
<head>
<?php include "includes.php" ?>
<?php include "head.html" ?>
</head>
<body>
	<?php $page="home" ?>
	<?php include "menu.php" ?>
	
	<div class="container">
	  	<div class="row">
		    <div class="col-lg-12">
	        	<h1 class="page-header">Welcome to Hills Ballet School</h1>
				<p>Welcome to Hills Ballet School located in the beautiful
				Adelaide Hills. We are a South Australian family owned ballet
				school sharing the love of dance with children.</p>
			    <?php include "alert.php" ?>
	    	</div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>About Us</h4>
                    </div>
                    <div class="panel-body">
						<p>We offer a range of dynamic and specialised ballet classes
							to suit dancers from the age of eighteen months.</p>
						<p>We would love you to join us at Hills Ballet School and are
							currently taking enrolments for 2017.</p>
						<p>
							If you would like to come along for a trial lesson or to find our
							more information, please feel free to <a
								href="mailto:info@hillsballetschool.com.au?Subject=Info"
								target="_top">contact us</a>.
						</p>
							                        
                        <a href="/about.php" class="btn btn-default">Learn More</a>
						
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>Classes</h4>
                    </div>
                    <div class="panel-body">
                        <p>Hills Ballet Schoool offers dance classes for girls and boys from eighteen months of age</p>
						<p>
							Our classes are currently located at the Mount Lofty Scout Hut,
							Aldgate and the Aldgate Oval Hall, please see our <a
								href="/location.php">locations</a> page for more details.
						</p>
                        <a href="/classes.php" class="btn btn-default">Learn More</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>Timetable</h4>
                    </div>
                    <div class="panel-body">
                        <p>Our 2017 timetable is now available.</p>
                        <a href="/timetable.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
	    </div>
	</div>
		
	<div class="panel-footer">
		<?php include "footer.html" ?>
	</div>
</body>
</html>
