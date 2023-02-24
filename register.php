<?php 
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome to Social</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>
    <?php 

    if(isset($_POST['register_button'])) {
    	echo '
    	<script>
    	$(document).ready(function() {
    		$("#first").hide();
    		$("#second").show();

    		});
    	</script>

    	';
    }

    ?>

	<div class="wrapper">

		<div class="login_box">
			<div class="login_header">
			<h1>Social</h1>
			Login or Sign up below!
		</div>

             <div id="first">
			    <form action="register.php" method="POST">
			    	<input type="email" name="log_email" placeholder="Email Address" value="<?php if(isset($_SESSION['log_email'])) {
			            echo $_SESSION['log_email'];
					} 
				    ?>" required>
			    	<br>
			    	<input type="Password" name="log_password" placeholder="Password">
			    	<br>
			    	 <?php if(in_array("Email or Password was incorrect<br>", $error_array)) echo "Email or Password was incorrect<br>"; ?>
			    	<input type="submit" name="login_button" value="Login">
			    	<br>
			    	<a href="#" id="signup" class="signup">Need an account? Register Here!</a>
			       

			    </form>
			 </div>
		    <br>
		    <div id="second">
			    <form action="register.php" method="POST">
						<input type="text" name="reg_fname" placeholder="First Name" value="<?php if(isset($_SESSION['reg_fname'])) {
				            echo $_SESSION['reg_fname'];
						} 
					    ?>" required>
						<br>
						<?php if(in_array("your first name must be between 2 and 25 charecters<br>",$error_array)) echo "your first name must be between 2 and 25 charecters<br>"; ?>
						<input type="text" name="reg_lname" placeholder="Last Name" value="<?php if(isset($_SESSION['reg_lname'])) {
							echo $_SESSION['reg_lname'];
						} 
					    ?>" required>
				        <br>
				        <?php if(in_array("your last name must be between 2 and 25 charecters<br>",$error_array)) echo "your last name must be between 2 and 25 charecters<br>"; ?>
				        <input type="email" name="reg_email" placeholder="Email" value="<?php if(isset($_SESSION['reg_email'])) {
							echo $_SESSION['reg_email'];
						} 
					    ?>" required>
				        <br>

				        <input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php if(isset($_SESSION['reg_email2'])) {
							echo $_SESSION['reg_email2'];
						} 
					    ?>" required>
				        <br>
				        <?php if(in_array("email already in use<br>",$error_array)) echo "email already in use<br>"; 
				         else if(in_array("Invalid email format<br>",$error_array)) echo "Invalid email format<br>"; 
				         else if(in_array("Emails dont match<br>",$error_array)) echo "Emails dont match<br>"; ?>

				        <input type="Password" name="reg_password" placeholder="Password"  required>
				        <br>
				        
				        <input type="Password" name="reg_password2" placeholder="Confirm Password"  required>
				        <br>
				        <?php if(in_array("Your passwords dont match<br>",$error_array)) echo "Your passwords dont match<br>"; 
				         else if(in_array("your password can only contain english charecters or numbers<br>",$error_array)) echo "your password can only contain english charecters or numbers<br>"; 
				         else if(in_array("your password must be between 5 and 30 charecters<br>",$error_array)) echo "your password must be between 5 and 30 charecters<br>"; ?>
				        <input type="submit" name="register_button" value="Register">
				        <br>
				        <?php if(in_array("<span style='color: #14C800;'>You're All set Goahead and login!</span><br>",$error_array)) echo "<span style='color: #14C800;'>You're All set Go ahead and login!</span><br>"; ?>
				        <a href="#" id="signin" class="signin">Already have an acount? Sign in here!</a>

				</form>
		</div>
		</div>
	
	</div>

</body>
</html>