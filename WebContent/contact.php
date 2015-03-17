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
	<div class="panel panel-default">
		<div class="container">
			<div class="panel-body">
				<?php include "slider.php" ?>
				<div class="panel panel-default">
					<?php include "alert.php" ?>
					<div class="panel-heading">
						<h3 class="panel-title">Contact Details</h3>
					</div>
					<div class="panel-body">
						<p>If you would like further information please contact us at:</p>
						<a href="mailto:info@hillsballetschool.com.au?Subject=Info"
							target="_top">info@hillsballetschool.com.au</a>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-footer">
			<?php include "footer.html" ?>
		</div>
	</div>
</body>
</html>
