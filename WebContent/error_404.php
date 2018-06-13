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
	<?php $page="" ?>
	<?php include "menu.php" ?>
	<div class="panel panel-primary">
		<div class="container">
			<div class="panel-body">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Error 404 - Page not found</h3>
					</div>
					<div class="panel-body">
						<p>This might be because:
						<li>You have typed the web address incorrectly, or
						<li>the page you were looking for may have been moved,
							updated or deleted.
							<p>To return to the main site use the links above.
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
