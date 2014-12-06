<!DOCTYPE html>
<html>
<?php include "head.html" ?>
<body>
<?php include "includes.php" ?>
<div id="container">
    <?php include "menu.html" ?>
	<div id="body">
        <?php include "slider.html" ?>
        <div class="textboxtop2">Registration</div>
        <div class="textbox">
            <?php
                $email = $_POST['email'];
                if(isset($email) && trim($email) != "") {
                    
                    $info = "info@hillsballetschool.com.au";
                    
                    $headers = "From: " . $info . "\n";
                    $headers .= "To: " . $info . "\n"; 
                    $headers .= "Reply-To: " . $email . "\n";
                    $headers .= "MIME-Version: 1.0" . "\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\n";
                    
                    $message = "Name: " . $_POST['name'] . "<br>";
                    $message .= "DOB: " . $_POST['dob'] . "<br>";
                    $message .= "Email: " . $email . "<br>";
                    $message .= "Address: " . $_POST['address'] . "<br>";
                    $message .= "Phone: " . $_POST['phone'] . "<br>";
                    $message .= "Carer: " . $_POST['carer'] . "<br>";
                    $message .= "Class: " . $_POST['class'] . "<br>";

                    mail($info, "Registration", $message, $headers);
            ?>  
                    Thanks for your interest. We will be in touch soon.
            
            <?php } else { ?>
	        
	            <form action="register.php" method="post">
	                <table>
	                <tr><td>Child's Full Name:</td><td><input type="text" name="name"></td></tr>
	                <tr><td>Date of Birth:</td><td><input type="text" name="dob"></td></tr>
	                <tr><td>Email Address:</td><td><input type="text" name="email"></td></tr>
	                <tr><td>Address:</td><td><input type="text" name="address"></td></tr>
	                <tr><td>Phone:</td><td><input type="text" name="phone"></td></tr>
	                <tr><td>Carer's Name:</td><td><input type="text" name="carer"></td></tr>
	                <tr><td>Class:</td>
	                    <td>
							<select name="class">
							  <option value="Little Tiptoes">Little Tiptoes</option>
							  <option value="Leap Into Dance">Leap Into Dance</option>
							  <option value="Pre-Primary/Primary">Pre-Primary/Primary</option>
							  <option value="Grade1/Grade2">Grade1/Grade2</option>
							</select>	                   
						</td>
	                </tr>
	                <tr><td><input type="submit"></td></tr>
	                </table>
	            </form>
            
            <?php } ?>
        </div>
        <div class="textboxbottom"></div>
        <?php include "footer.html" ?>
	</div>
</div>
</body>
</html>
