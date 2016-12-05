<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<?php include "includes.php" ?>
<?php include "head.html" ?>
</head>
<body>
	<?php $page="contact" ?>
	<?php include "menu.php" ?>
	
	<div class="container">
	    <div class="row">
		    <div class="col-lg-12">
	        	<h1 class="page-header">Contact Us</h1>
	    	</div>
	        <div class="col-md-8">
	            <!-- Embedded Google Map -->
	            <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
	            	src="https://maps.google.com.au/maps?q=18+Churinga+Rd,+aldgate,+south+australia&amp;ie=UTF8&amp;hq=&amp;hnear=18+Churinga+Rd,+Aldgate+South+Australia+5154&amp;ll=-35.017105,138.728079&amp;spn=0.005522,0.011689&amp;t=m&amp;z=14&amp;output=embed">
	            </iframe>
	        </div>
	        <!-- Contact Details Column -->
	        <div class="col-md-4">
	            <h3>Contact Details</h3>
	            <p><i class="fa fa-phone"></i> 
	                <abbr title="Phone">P</abbr>: 0481 393 698</p>
	            <p><i class="fa fa-envelope-o"></i> 
	                <abbr title="Email">E</abbr>: <a href="mailto:info@hillsballetschool.com.au">info@hillsballetschool.com.au</a>
	            </p>
				<div class="fb-page" data-href="https://www.facebook.com/tiptoeinthehills/" data-tabs="timeline" data-width="300" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/tiptoeinthehills/" class="fb-xfbml-parse-ignore"><a target="_TOP" href="https://www.facebook.com/tiptoeinthehills/">Hills Ballet School</a></blockquote></div>
	        </div>
	    </div>

		<br>	    
		<?php include "register2.php" ?>
			    
    </div>
	
	<div class="panel-footer">
		<?php include "footer.html" ?>
	</div>
</body>
</html>
