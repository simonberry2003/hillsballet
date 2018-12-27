<!DOCTYPE html>
<html lang="en">
<head>
<?php include "includes.php" ?>
<?php include "head.html" ?>
</head>
<body>
	<?php $page="fees" ?>
	<?php include "menu.php" ?>

	<div class="container">
	  	<div class="row">
		    <div class="col-lg-12">
	        	<h1 class="page-header">Fee Information</h1>
				<?php include "alert.php" ?>
	    	</div>
	  	
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>Fees Per 10 Week Term</h4>
                    </div>
			        <div class="table-responsive">
			            <table class="table table-striped table-hover">
							<tr>
								<th>Length of lesson</th>
								<th>Fees (inc. GST)</th>
							</tr>
							<tr>
								<td>40/45 minutes</td>
								<td>$115</td>
							</tr>
							<tr>
								<td>60 Minutes</td>
								<td>$138</td>
							</tr>
							<tr>
								<td>30 Minutes (tap/pointe and limber)</td>
								<td>$52</td>
							</tr>
							<tr>
								<td>Musical Theatre Level 3 and 4</td>
								<td>Singing/Drama - $138</td>
							</tr>
							<tr>
								<td>(Family discounts do not apply to Musical Theatre packages)</td>
								<td>Singing/Drama + 1 dance class $230</td>
							</tr>
							<tr>
								<td></td>
								<td>Singing and Drama + 2 dance class $300</td>
							</tr>
						</table>					
					</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>Family/Multi-class Discount</h4>
                    </div>
					<div class="panel-body">
						<p>Families with more than one child attending classes or with
							a child attending more than one class will receive a further 5%
							discount.</p>
					</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>New Dancers</h4>
                    </div>
					<div class="panel-body">
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
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>Invoices</h4>
                    </div>
					<div class="panel-body">
						<p>Families will receive an invoice via email at least 2 weeks
							before payment is due.</p>
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
