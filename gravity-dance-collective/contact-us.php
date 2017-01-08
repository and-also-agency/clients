
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

<?php include ("includes/navigation.php"); ?>

      <!--END NAV -->
	</header>
<!--COLOR BAND --> 
		<div class="big-color-band"></div>
<!--COLOR BAND END--> 
	<!--CONTACT Gravity Dance Collective -->
	 	<section class="container">
	 		<div class="row text-center">
        <div class="col-md-12">
          <h2>Contact Gravity Dance Collective Today!</h2> 
          <p class="lead">To contact the studio, please fill out the short form below or feel free to call or email us. We look forward to hearing from you!</p>       
        </div>
			</div>
      <!-- FORM -->
      <div class="row mt-30">
        <div class="col-md-8">
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
              <div class="col-md-12 special" style="display:none;"><label for="special-requests">Special Requests</label> <input class="form-control" id="special-requests" name="special" type="text" /></div>
              <p>
                  <input id="submit" type="image" value="Send" class="image-button" type="submit" src="images/contact/contact-button-gravity.jpg" alt="Submit form"/>
              </p>
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
              <br>Tel: 720-933-9544
            </p>            
          </div>
        </div> 
      </div> 
        <!-- /FORM -->
    </section>

<?php include ("includes/footer.php"); ?>
 
</body>
</html>