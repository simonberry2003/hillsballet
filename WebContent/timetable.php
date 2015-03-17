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
	<?php $page="timetable" ?>
	<?php include "menu.php" ?>
	<div class="panel panel-default">
		<div class="container">
			<div class="panel-body">
				<?php include "slider.php" ?>
				<div class="panel panel-default">
					<?php include "alert.php" ?>
					<div class="panel-heading">
						<h3 class="panel-title">Saturday Timetable</h3>
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<tr>
								<th>Time</th>
								<th>Class</th>
							</tr>
							<tr>
								<td>9.00 - 9.45</td>
								<td>Pre-Primary/Primary</td>
							</tr>
							<tr>
								<td>9.45 - 10.30</td>
								<td>Grade 1/2</td>
							</tr>
							<tr>
								<td>10.30 - 11.10</td>
								<td>Little Tiptoes</td>
							</tr>
							<tr>
								<td>11.15 - 11.55</td>
								<td>Leap into Dance</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Thursday Timetable</h3>
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<tr>
								<th>Time</th>
								<th>Class</th>
							</tr>
							<tr>
								<td>4.00 – 4.45</td>
								<td>Grade 2 Exam prep/Jazz/Tap/Performance</td>
							</tr>
							<tr>
								<td>4.45 – 5.30</td>
								<td>Pre-primary/Primary including Primary Exam Prep</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Examination Classes</h3>
					</div>
					<div class="panel-body">
						Additional classes for exam preparation are available. Please <a
							href="mailto:info@hillsballetschool.com.au?Subject=Info"
							target="_top">contact us</a> for more information.
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
