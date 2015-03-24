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
								<th class="col-md-2">Time</th>
								<th class="col-md-3">Class</th>
                                <th>Venue</th>
							</tr>
							<tr>
								<td class="col-md-2">9.00 - 9.45</td>
								<td class="col-md-4">Pre-Primary/Primary</td>
                                <td class="col-md-3">Mount Lofty Scout Hut</td>
							</tr>
							<tr>
								<td class="col-md-2">9.45 - 10.30</td>
								<td class="col-md-4">Grade 1/2</td>
                                <td class="col-md-3">Mount Lofty Scout Hut</td>
							</tr>
							<tr>
								<td class="col-md-2">10.30 - 11.10</td>
								<td class="col-md-4">Little Tiptoes</td>
                                <td class="col-md-3">Mount Lofty Scout Hut</td>
							</tr>
							<tr>
								<td class="col-md-2">11.15 - 11.55</td>
								<td class="col-md-4">Leap into Dance</td>
                                <td class="col-md-3">Mount Lofty Scout Hut</td>
							</tr>
						</table>
					</div>
					<div class="panel-heading">
						<h3 class="panel-title">Thursday Timetable</h3>
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<tr>
								<th class="col-md-2">Time</th>
								<th class="col-md-4">Class</th>
                                <th class="col-md-3">Venue</th>
							</tr>
                            <tr>
                                <td class="col-md-2">9.15 - 9.55</td>
                                <td class="col-md-4">Leap Into Dance <B>**new**</B></td>
                                <td class="col-md-3">Mount Lofty Scout Hut</td>
                            </tr>
                            <tr>
                                <td class="col-md-2">10.00 - 10.40</td>
                                <td class="col-md-4">Little Tiptoes <B>**new**</B></td>
                                <td class="col-md-3">Mount Lofty Scout Hut</td>
                            </tr>
							<tr>
								<td class="col-md-2">4.00 - 4.45</td>
								<td class="col-md-4">Grade 2 Exam prep/Jazz/Tap/Performance</td>
                                <td class="col-md-3">Aldgate Oval Hall</td>
							</tr>
							<tr>
								<td class="col-md-2">4.45 - 5.30</td>
								<td class="col-md-4">Pre-primary/Primary including Primary Exam Prep</td>
                                <td class="col-md-3">Aldgate Oval Hall</td>
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
