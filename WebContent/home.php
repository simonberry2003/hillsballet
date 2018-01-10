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
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>About Us</h4>
                    </div>
                    <div class="panel-body">
						<p>Hills Ballet School is a friendly, local dance school based in Aldgate/Stirling area of the beautiful Adelaide Hills. 
						We teach children as young as 18 months, building strong movement foundations and having lots of fun! 
						Originally starting as a ballet school we are now proud offer to tap, musical theatre and contemporary classes as well 
						as adult dance classes. Please see our classes for more information on the different styles.</p>
						<p>We invite you to take a look at our website and Facebook page, email us or give us a call to find out more information.</p>
                        <a href="/about.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>Classes</h4>
                    </div>
                    <div class="panel-body">
                        <p>Hills Ballet School offers dance classes for girls and boys from eighteen months of age</p>
						<p>
							Our classes are currently located at the Mount Lofty Scout Hut,
							Aldgate and the Aldgate Oval Hall, please see our <a
								href="/location.php">locations</a> page for more details.
						</p>
                        <a href="/classes.php" class="btn btn-default">Learn More</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>Timetable</h4>
                    </div>
                    <div class="panel-body">
                        <p>Our 2018 timetable is now available.</p>
                        <a href="/timetable.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>Home School Partnerships</h4>
                    </div>
                    <div class="panel-body">
                        <p>We are delighted to be able to offer a bespoke Home-school Performing Arts service to families or groups of families.</p>
                        <a href="/homeschool.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>Schools</h4>
                    </div>
                    <div class="panel-body">
                        <p>We offer high quality workshops and lessons supporting and facilitating the Performing Arts objectives of the Australian Curriculum.</p>
                        <a href="/schools.php" class="btn btn-default">Learn More</a>
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
