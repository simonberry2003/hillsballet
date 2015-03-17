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
	<?php $page="fees" ?>
	<?php include "menu.php" ?>
	<div class="panel panel-default">
		<div class="container">
			<div class="panel-body">
				<?php include "slider.php" ?>
				<div class="panel panel-default">
					<?php include "alert.php" ?>
					<div class="panel-heading">
						<h3 class="panel-title">Fees</h3>
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<tr>
								<th>Length of lesson</th>
								<th>Discount (paid week 1)</th>
								<th>Full Fees</th>
							</tr>
							<tr>
								<td>40/45 minutes</td>
								<td>$100</td>
								<td>$110</td>
							</tr>
							<tr>
								<td>60 minutes</td>
								<td>$130</td>
								<td>$145</td>
							</tr>
							<tr>
								<td>75 minutes</td>
								<td>$195</td>
								<td>$215</td>
							</tr>
							<tr>
								<td>90 minutes</td>
								<td>$260</td>
								<td>$290</td>
							</tr>
						</table>
					</div>
					<div class="panel-heading">
						<h3 class="panel-title">Fee Information</h3>
					</div>
					<div class="panel-body">
						<h3>Family/Multi-class Discount</h3>
						<p>Families with more than one child attending classes or with
							a child attending more than one class will receive a further 5%
							discount.</p>

						<h3>Invoices</h3>
						<p>Families will receive an invoice via email at least 2 weeks
							before payment is due.</p>

						<h3>Payment Deadlines</h3>
						<p>Term Fees are strictly payable within the first week of
							term. All fees paid within this time will receive a discount.
							Fees paid after week 1 will be charged at a full price. Please
							speak to your teacher if you are unable to pay your fees by week
							3 of term.</p>

						<h3>New Dancers</h3>
						<p>Term fee payment will be pro-rata only for new dancers
							starting mid-term, not existing students. Each new dancer is
							offered one trial lesson free.</p>
						<p>
							Please <a
								href="mailto:info@hillsballetschool.com.au?Subject=Info"
								target="_top">contact us</a> for more detailed information in
							regards to fees.
						</p>
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
