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
	<?php $page="register" ?>
	<?php include "menu.php" ?>
	<div class="panel panel-default">
		<div class="container">
			<div class="panel-body">
				<?php include "slider.php" ?>
				<div class="panel panel-default">
					<?php include "alert.php" ?>
					<div class="panel-heading">
						<h3 class="panel-title">Registration</h3>
					</div>
					<div class="panel-body">
						<?php
                if (array_key_exists('email', $_POST)) {
                    
                    $info = "info@hillsballetschool.com.au";
                    
                    $headers = "From: " . $info . "\n";
                    $headers .= "To: " . $info . "\n"; 
                    $headers .= "Reply-To: " . $email . "\n";
                    $headers .= "MIME-Version: 1.0" . "\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\n";
                    
                    $message = "Name: " . $_POST['name'] . "<br>";
                    $message .= "DOB: " . $_POST['dob'] . "<br>";
                    $message .= "Email: " . $_POST['email'] . "<br>";
                    $message .= "Address: " . $_POST['address'] . "<br>";
                    $message .= "Phone: " . $_POST['phone'] . "<br>";
                    $message .= "Carer: " . $_POST['carer'] . "<br>";
                    $message .= "Class: " . $_POST['class'] . "<br>";

                    mail($info, "Registration", $message, $headers);
            ?>
						Thanks for your interest. We will be in touch soon.

						<?php } else { ?>

						<form action="register.php" method="post">
							<div class="form-group">
								<label for="name">Child's Full Name:</label> <input type="text"
									class="form-control" id="name" name="name">
							</div>
							<div class="form-group">
								<label for="dob">Date of Birth:</label> <input type="text"
									class="form-control" id="dob" name="dob">
							</div>
							<div class="form-group">
								<label for="email">Email Address:</label> <input type="email"
									class="form-control" id="email" name="email">
							</div>
							<div class="form-group">
								<label for="address">Address:</label> <input type="text"
									class="form-control" id="address" name="address">
							</div>
							<div class="form-group">
								<label for="phone">Phone:</label> <input type="text"
									class="form-control" id="phone" name="phone">
							</div>
							<div class="form-group">
								<label for="carer">Carer's Name:</label> <input type="text"
									class="form-control" id="carer" name="carer">
							</div>
							<div class="form-group">
								<label for="class">Class:</label> <select class="form-control"
									id="class" name="class">
									<option value="Little Tiptoes">Little Tiptoes</option>
									<option value="Leap Into Dance">Leap Into Dance</option>
									<option value="Pre-Primary/Primary">Pre-Primary/Primary</option>
									<option value="Grade1/Grade2">Grade1/Grade2</option>
								</select>
							</div>
							<input type="submit" class="btn btn-default">
						</form>
						<br>
						<p>
							<B>Please note that some classes are currently full, however,
								register your interest and we will endeavour to find your dancer
								a class.</B>
						</p>
						<?php } ?>
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
