
<!DOCTYPE html> 
<html lang="en">
	<head>
		 <meta charset="utf-8">
			<meta name="description" content="Gravity Dance Collective Denver information about classes, dance schedule, instructors and location">
		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" /><link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
		 <title>Gravity Dance Collective</title>
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

		<!--Google Analytics Tracking-->
		 <script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-79689630-1', 'auto');
		ga('send', 'pageview');
			</script>
		<!--End Google Analytics Tracking -->

</head>
<body>
	<header>
		<div class="container-fluid">
			<?php include ("includes/navigation.php"); ?>
		</div>
	</header>
			<!--END NAV -->  

<!--WEB PAGE CONTENT HERE --> 

		<div class="big-color-band"></div>

		 <div style="min-height: 50px;">
				<!-- Jssor Slider Begin -->
				<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
				<!-- ================================================== -->
				<div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
				top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
						<!-- Loading Screen -->
						<div u="loading" style="position: absolute; top: 0px; left: 0px;">
								<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
								top: 0px; left: 0px; width: 100%; height: 100%;">
								</div>
								<div style="position: absolute; display: block; background: url(/images/home/loading.gif) no-repeat center center;
								top: 0px; left: 0px; width: 100%; height: 100%;">
								</div>
						</div>
						<!-- Slides Container -->
						<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
								<div>
										<img class="slider" u="image" src2="/images/home/carolee-ballet-full-slider-template-long.jpg" />
								</div>
								<div>
										<img class="slider" u="image" src2="/images/home/kiddos-hula-full-slider-template-long.jpg" />
								</div>
								<div>
										<img class="slider" u="image" src2="/images/home/carolee-floorfull-slider-template-long.jpg" />
								</div>
								<div>
										<img class="slider" u="image" src2="/images/home/breakdance-full-slider-template-long.jpg" />
								</div>
								<div>
										<img class="slider" u="image" src2="/images/home/jazz-kiddos-full-slider-template-long.jpg" />
								</div>
						
						<!--#region Bullet Navigator Skin Begin -->
						<!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
						<style>
								/* jssor slider bullet navigator skin 21 css */
								/*
								.jssorb21 div           (normal)
								.jssorb21 div:hover     (normal mouseover)
								.jssorb21 .av           (active)
								.jssorb21 .av:hover     (active mouseover)
								.jssorb21 .dn           (mousedown)
								*/
								.jssorb21 {
										position: absolute;
								}
								.jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
										position: absolute;
										/* size of bullet elment */
										width: 19px;
										height: 19px;
										text-align: center;
										line-height: 19px;
										color: white;
										font-size: 12px;
										background: url(img/b21.png) no-repeat;
										overflow: hidden;
										cursor: pointer;
								}
								.jssorb21 div { background-position: -5px -5px; }
								.jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
								.jssorb21 .av { background-position: -65px -5px; }
								.jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
						</style>
						<!-- bullet navigator container -->
						<div u="navigator" class="jssorb21" style="bottom: 16px; right: 6px;">
								<!-- bullet navigator item prototype -->
								<div u="prototype"></div>
						</div>
						<!--#endregion Bullet Navigator Skin End -->
						
						<!--#region Arrow Navigator Skin Begin -->
						<!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
						<style>
								/* jssor slider arrow navigator skin 21 css */
								/*
								.jssora21l                  (normal)
								.jssora21r                  (normal)
								.jssora21l:hover            (normal mouseover)
								.jssora21r:hover            (normal mouseover)
								.jssora21l.jssora21ldn      (mousedown)
								.jssora21r.jssora21rdn      (mousedown)
								*/
								.jssora21l, .jssora21r {
										display: block;
										position: absolute;
										/* size of arrow element */
										width: 55px;
										height: 55px;
										cursor: pointer;
										background: url(img/a21.png) center center no-repeat;
										overflow: hidden;
								}
								.jssora21l { background-position: -3px -33px; }
								.jssora21r { background-position: -63px -33px; }
								.jssora21l:hover { background-position: -123px -33px; }
								.jssora21r:hover { background-position: -183px -33px; }
								.jssora21l.jssora21ldn { background-position: -243px -33px; }
								.jssora21r.jssora21rdn { background-position: -303px -33px; }
						</style>
						<!-- Arrow Left -->
						<span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
						</span>
						<!-- Arrow Right -->
						<span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
						</span>
						<!--#endregion Arrow Navigator Skin End -->
						<a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
				</div>
				<!-- Jssor Slider End -->
		</div>


	<!-- ABOUT GRAVITY -->
	 <div id="content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1 class="center">Gravity Dance Collective
					</h1>
						<p class="center"style="padding-bottom:50px">COME AND GET YOUR GROOVE ON!
						</p>
				</div>
			</div>
<!-- ONE COLUMN SECTION -->
	<div class="big-full-image-lower-band">
							<img src="/images/home/half-logo-full-image-template.jpg" class="full-width" alt="Logo">
	</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2 class="center">About GDC</h2>
						<p class="center">Gravity Dance Collective is a new Denver, CO community epicenter for movement with the mission to provide affordable dance instruction for all ages. Gravity Dance Collective strives to provide a comfortable and engaging atmosphere where students can study the art of dance. Our staff is dedicated to providing superior dance instruction that nurtures self esteem and promotes self confidence. Our Studio fosters self discipline, improves social skills, and provides a positive outlet for self expression. Gravity Dance Collective is also focused in community involvement, collectively sharing our passion for the arts with other artists and incorporating their work within our studio. Let Gravity Dance Collective be your connecting force to artistic expression!
						</p>
				</div>
			</div>
<!--BIG FULL IMAGE-->
	<div class="big-full-image-no-band">
		<img src="/images/home/carolee-lunging-900pxhigh-full-image-template.jpg" class="full-width" alt="Dancer Lunging">
	</div>
<!--END BIG FULL IMAGE --> 
<hr>
<!-- THREE COLUMN SECTION -->
		<!-- TAKE A CLASS -->
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<img src="/images/home/kids-stripes-thirds-template-large.jpg" class="full-width" alt="Little Dancers in Stripes">
								<h3>Take a Class</h3>
								<p>Join us at the studio and try any class for free the first time! 
								</p>
								<p>
									<a href="schedule.php" class="button">See The Class Schedule &raquo;</a>
								</p>
				</div>
	<!-- SOCIAL MEDIA -->
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<img src="/images/home/hip-hop-daryl-thirds-template-large.jpg" class="full-width" alt="Hip Hop Dancers">
								<h3>Follow the Studio</h3>
								<p>Stay updated on all the progress our students are making and see schedule updates for the studio in real time.  
								</p>
								<p>
									<a href="https://www.facebook.com/Gravity-Dance-Collective-476083599169567/?fref=ts" target="blank" class="button">Connect on Facebook &raquo;</a>
								</p>
								<p style="padding-top: 20px">
									<a href="https://www.instagram.com/gravitydancecollective/" target="blank" class="button">Follow on Instagram &raquo;</a>
								</p>
				</div>
	<!-- CONTACT GRAVITY -->
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<img src="/images/home/original-instructors-thirds-template-large.jpg" class="full-width" alt="Instructors">
						<a href="contact-us.php"><h3>Contact Us</h3></a>
							<p>
								Reach out to us and we will get back to you quickly.
							</p>
							<p>
								<a href="contact-us.php" class="button">Contact GDC &raquo;</a>
							</p>
				</div>
			</div>
<hr>
<!-- PARTNER COMPANY LOGOS -->
			<div class="row">
					<div class="Col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2>Our Partners</h2>
					</div>
			</div>
			<div class="row">
			<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
					<a href="https://www.facebook.com/Latin-Explosive-Movement-615352625296055/?fref=ts" target="blank"><img src="/images/home/thirds-template-for-mobile-too-julio-company.jpg" class="full-width" alt="Latin Explosive Movement"></a>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
					<a href="http://www.esmedancecompany.com" target="blank"><img src="/images/home/thirds-template-for-mobile-too-esme.jpg" class="full-width" alt="Esme"></a>
				</div>
				</div>
			</div>
		</div>
	</div>
<!-- FOOTER-->
<?php include ("includes/footer.php"); ?>

		<!-- jssor slider scripts-->
		<!-- use jssor.js + jssor.slider.js instead for development -->
		<!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
		<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
		<script>
				jQuery(document).ready(function ($) {

						var options = {
								$FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
								$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
								$Idle: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
								$PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

								$ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
								$SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
								$SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
								$MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
								//$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
								//$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
								$SlideSpacing: 0,                           //[Optional] Space between each slide in pixels, default value is 0
								$Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
								$ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
								$UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
								$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
								$DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
							
								$BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
										$Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
										$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
										$AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
										$Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
										$Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
										$SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
										$SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
										$Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
										$Scale: false                                   //Scales bullets navigator or not while slider scale
								},

								$ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
										$Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
										$ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
										$AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
										$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
								}
						};

						var jssor_slider1 = new $JssorSlider$("slider1_container", options);

						//responsive code begin
						//you can remove responsive code if you don't want the slider scales while window resizing
						function ScaleSlider() {
								var bodyWidth = document.body.clientWidth;
								if (bodyWidth)
										jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
								else
										window.setTimeout(ScaleSlider, 30);
						}
						ScaleSlider();

						$(window).bind("load", ScaleSlider);
						$(window).bind("resize", ScaleSlider);
						$(window).bind("orientationchange", ScaleSlider);
						//responsive code end
				});
		</script>


</body>
</html>