
<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Contact our Denver dance studio if you have any questions or feedback.">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us | Gravity Dance Collective</title>
	<?php include ("includes/header-includes.php"); ?>  
</head>
<body>
	<?php include ("includes/navigation.php"); ?>
	<!--CONTACT FORM -->
	<section class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<h2>Contact Gravity Dance Collective Today!</h2> 
				<p class="lead">To contact the studio, please fill out the short form below or feel free to call or email us. We look forward to hearing from you!</p>       
			</div>
		</div>
		<!-- FORM -->
		<div class="row mt-30">
			<div class="col-md-8 clearfix">
				<form id="contact-form" action="mail.php" method="POST">
					<div class="form-group">
						<label for="name">Your Name</label>
						<input type="text" name="name" id="name" required aria-required="true">
					</div>
					<div class="form-group">
						<label for="email">Your Email Address</label>
						<input type="email" name="email" id="email" required aria-required="true">                
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea name="message" id="message" rows="6" cols="25" required></textarea>                
					</div>
					<div class="col-md-12 special" style="display:none;">
						<label for="special-requests">If you're a human leave this blank</label>
						<input class="form-control" id="special-requests" name="special-requests" type="text" />
					</div>
					<input id="submit" type="image" value="Send" class="image-button" type="submit" src="images/contact/contact-button-gravity.jpg" alt="Submit form"/>
				</form>          
			</div>
			<div class="col-md-4 contact-info">
				<div>
					<p class="small"> Nicole Cappelletty 
						<br>Gravity Dance Collective
						<br>
						<br>157 Kalamath St.
						<br>Denver, CO 80223
						<br>
						<br><a href="mailto:gravitydance2013@gmail.com">gravitydance2013@gmail.com</a>
						<br>720-933-9544
					</p>            
				</div>
			</div> 
		</div> 
		<!-- /FORM -->
	</section>

	<?php include ("includes/footer.php"); ?>

</body>
</html>