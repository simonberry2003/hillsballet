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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>Fees Per 10 Week Term</h4>
                    </div>
					<div class="panel-body">
						<p>Fees are charged per term. Please <a href="contact.php">contact us</a> for more details.</p>
					</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
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
                <div class="panel panel-default">
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
                <div class="panel panel-default">
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
