<div class="row">
    <div class="col-md-5">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-check"></i>Register Your Interest</h4>
            </div>
			<div class="panel-body">
				<?php
        if (array_key_exists('email', $_POST)) {
            
            $info = "info@hillsballetschool.com.au";
            
            $headers = "From: " . $_POST['email'] . "\n";
            $headers .= "To: " . $info . "\n"; 
            $headers .= "Reply-To: " . $email . "\n";
            $headers .= "MIME-Version: 1.0" . "\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\n";
            
            $message = "Name: " . $_POST['name'] . "<br>";
            $message .= "DOB: " . $_POST['dob'] . "<br>";
            $message .= "Email: " . $_POST['email'] . "<br>";
            $message .= "Phone: " . $_POST['phone'] . "<br>";
            $message .= "Carer: " . $_POST['carer'] . "<br>";
            $message .= "Class: " . $_POST['class'] . "<br>";
            $message .= "Day: " . $_POST['day'] . "<br>";

            mail($info, "Registration", $message, $headers);
    ?>
				Thanks for your interest. We will be in touch soon.

				<?php } else { ?>

				<form action="contact.php" method="post">
					<table>
						<tr>
							<td>
								<div class="form-group">
									<label for="name">Child's Full Name:</label> <input type="text"
										class="form-control" id="name" name="name">
								</div>
							</td>
							<td>
								<div class="form-group">
									<label for="dob">Date of Birth:</label> <input type="text"
										class="form-control" id="dob" name="dob">
								</div>
							</td>
						<tr>
							<td colspan="2">
								<div class="form-group">
									<label for="email">Email Address:</label> <input type="email"
										class="form-control" id="email" name="email">
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<label for="phone">Phone:</label> <input type="text"
										class="form-control" id="phone" name="phone">
								</div>
							</td>
							<td>
								<div class="form-group">
									<label for="carer">Carer's Name:</label> <input type="text"
										class="form-control" id="carer" name="carer">
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<label for="class">Class:</label> <select class="form-control" id="class" name="class">
										<option value="Little Tiptoes">Little Tiptoes</option>
										<option value="Leap Into Dance">Leap Into Dance</option>
	                                    <option value="Leap Into Dance Kindy">Leap Into Dance Kindy</option>
	                                    <option value="Locomotion">Locomotion</option>
										<option value="Pre-Primary">Pre-Primary</option>
	                                    <option value="Primary">Primary</option>
										<option value="Grade1">Grade 1</option>
										<option value="Grade2">Grade 2</option>
										<option value="Grade3">Grade 3</option>
										<option value="Grade4">Grade 4</option>
	                                    <option value="Tap">Tap</option>
	                                    <option value="Contemporary">Contemporary</option>
	                                    <option value="MusicalTheatre">Musical Theatre</option>
									</select>
								</div>
							</td>
							<td>
								<div class="form-group">
									<label for="class">Day:</label> <select class="form-control" id="day" name="day">
										<option value="Monday">Monday</option>
	                                    <option value="Tuesday">Tuesday</option>
	                                    <option value="Thursday">Thursday</option>
	                                    <option value="Friday">Friday</option>
	                                    <option value="Saturday">Saturday</option>
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" class="btn btn-default">
							</td>
						</tr>
					</table>
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
