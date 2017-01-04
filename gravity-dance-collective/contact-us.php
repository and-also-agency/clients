
<!DOCTYPE html> 
<html lang="en">
  <head>
     <meta charset="utf-8">
      <meta name="description" content="Contact us form Gravity Dance Collective, send an email, phone number, address">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>GDC | Contact Us</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
 
      <!-- Your personal CSS stylesheet -->
      <link rel="stylesheet" href="style.css">
     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
    <!-- LINK TO GOOGLE FONTS -->
    <link href="<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,400italic|Quicksand:400,700|The+Girl+Next+Door' rel='stylesheet' type='text/css'>"
</head>
<body>
  <header>
    <div class="container-fluid">

<?php include ("includes/navigation.php"); ?>

      </div>
      <!--END NAV -->
	</header>
<!--COLOR BAND --> 
		<div class="big-color-band"></div>
<!--COLOR BAND END--> 
	<!--CONTACT ESME -->
	 	<div class="container">
	 		<div class="row">
	 			<div class="full column"> 
					<h2 class="center">Contact Gravity Dance Collective Today!</h2>
            <div class="row">
              <div class="Col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p class="center" style="margin-left: 10px"> <strong>Owner: Nicole Cappelletty 
                  <br>Gravity Dance Collective LLC</strong>
                  <br>157 Kalamath St.
                  <br>Denver, CO 80223
                  <br><a href="mailto:gravitydance2013@gmail.com">gravitydance2013@gmail.com</a>
                  <br>Tel: 720-933-9544</p>
              </div>
            </div>
				</div>
			</div>
	</div>
    <!--FORM-->
  <div  class="container">
      <div class="row">
            <form id="contact-form" action="mail.php" method="POST">
              <div class="col-md-12 form-container">
                <label for="name">Your Name</label>
                <input type="text" name="name" id="name" required aria-required="true">
              </div>
              <div class="col-md-12 form-container">
                <label for="email">Your Email Address</label>
                <input type="email" name="email" id="email" required aria-required="true">                
              </div>
              <div class="col-md-12 form-container">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="6" cols="25" required></textarea>                
              </div>
              <div class="col-md-12 special" style="display:none;"><label for="special-requests">Special Requests</label> <input class="form-control" id="special-requests" name="special" type="text" /></div>
              <p>
                  <input id="submit" type="image" value="Send" class="image-button" type="submit" src="images/contact/contact-button-gravity.jpg" alt="Submit form"/>
              </p>
          </form>
        </div>
      </div>
    </div>
<!-- WE LOOK FORWARD TO HEARING FROM YOU -->
	 	<div class="container">
	 		<div class="row">
	 			<div class="Col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2 class="center">We look forward to hearing from you!
					</h2>
				</div>
			</div>
	</div>
<hr class="blank">

<?php include ("includes/footer.php"); ?>
 
</body>
</html>