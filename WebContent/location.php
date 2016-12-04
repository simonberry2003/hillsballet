<!DOCTYPE html>
<html lang="en">
<head>
<?php include "includes.php" ?>
<?php include "head.html" ?>
</head>
<body>
	<?php $page="locations" ?>
	<?php include "menu.php" ?>
	
	<div class="container">
	  	<div class="row">
		    <div class="col-lg-12">
	        	<h1 class="page-header">Locations</h1>
			    <?php include "alert.php" ?>
	    	</div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>Aldgate Oval Hall</h4>
                    </div>
                    <div class="panel-body">
						<iframe width="500" height="350" frameborder="0" scrolling="no"
							marginheight="0" marginwidth="0"
							src="https://maps.google.com.au/maps?q=18+Churinga+Rd,+aldgate,+south+australia&amp;ie=UTF8&amp;hq=&amp;hnear=18+Churinga+Rd,+Aldgate+South+Australia+5154&amp;ll=-35.017105,138.728079&amp;spn=0.005522,0.011689&amp;t=m&amp;z=14&amp;output=embed"></iframe>
						<br />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>Mount Lofty Scout Hut</h4>
                    </div>
                    <div class="panel-body">
						<iframe width="500" height="350" frameborder="0" scrolling="no"
							marginheight="0" marginwidth="0"
							src="https://maps.google.com.au/maps?q=Pine+St+%26+Milan+Tce+Stirling,+SA+5152&amp;ie=UTF8&amp;hq=&amp;hnear=South+Australia&amp;ll=-35.014282,138.722782&amp;spn=0.005523,0.011689&amp;t=m&amp;z=14&amp;output=embed"></iframe>
						<br />
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
