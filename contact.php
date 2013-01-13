<?php $thisPage="contact"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>OBG Cocker Rescue</title>
	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="stylesheets/flexslider.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/tipsy.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/base.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/media.queries.css" />
	<link rel="stylesheet" type="text/css" href="javascripts/fancybox/jquery.fancybox-1.3.4.css" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico|Cabin:400,700,600,500">
	
	<!-- Javascripts -->
	<script type="text/javascript" src="javascripts/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="javascripts/html5shiv.js"></script>
	<script type="text/javascript" src="javascripts/jquery.tipsy.js"></script>
	<script type="text/javascript" src="javascripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="javascripts/fancybox/jquery.easing-1.3.pack.js"></script>
	<script type="text/javascript" src="javascripts/jquery.mobilemenu.js"></script>
	<script type="text/javascript" src="javascripts/jquery.infieldlabel.js"></script>
	<script type="text/javascript" src="javascripts/jquery.twitter.js"></script>
	<script type="text/javascript" src="javascripts/jquery.quicksand.js"></script>
	<script type="text/javascript" src="javascripts/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="javascripts/advocate.js"></script>
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.png" />
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
</head>
<body>
	
	<header>
		<div class="container">		
		<!-- Start Navigation -->
		 <?php include("navigation.php"); ?>
		<!-- End Navigation -->
		</div>		
	</header>
	
	<section class="page_heading">
		<?php include("headerlogo.php"); ?>
	</section>
	
	<div class="page_wrapper">
		<section class="container">
			
			<!-- Start Page Content -->
			<div id="contact" class="page with_sidebar">
				
				<h1>Contact</h1>
				<img class="rounded" alt="" src="images/content/700x244_v3_Biscuit.jpg">

				<div class="full">
					
					<p>Please note: If you are looking to adopt and live outside of the
					 Mid-Atlantic Area or have children under 8 years old, please first read our <a href="adopt_adoption_policies.php>">adoption policies</a></p>

					 <p>If you are looking to give up your dog, please first read about <a href="surrender_request.php">surrendering your dog</a>  and complete the online form.</p>
					
					<div class="validation">
						<p>Oops! Please correct the highlighted fields...</p>
					</div>

					<div class="success">
						<p>Thanks! I'll get back to you shortly.</p>
					</div>
					
					<form action="javascript:;" method="post" id="contact_form">
						<div class="row">
							<p>
								<label for="name">Name</label>
								<input type="text" name="name" id="name" />
							</p>
							<p>
								<label for="phone">Phone</label>
								<input type="text" name="phone" id="phone" />
							</p>
						</div>
					
						<div class="row">
							<p>
								<label for="email">Email</label>
								<input type="text" name="email" id="email" />
							</p>
							<select>
							  <option value="select">Subject</option>
							  <option value="saab">Volunteer</option>
							  <option value="mercedes">Donation</option>
							  <option value="audi">Programs</option>
							</select>
						</div>
						<p>
							<label for="message">Message</label>
							<textarea name="message" id="message"></textarea>
						</p>
						<input type="submit" class="button white" value="Send Email &rarr;" />
					</form>
				</div>
			
				<!-- Start Location -->
				<div id="location">
					<div class="box_heading">
						<h2>Our location</h2>
						<span class="line"></span>
					</div>
					<div class="map">
						<iframe width="438" height="194" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Newington,+VA+22122&amp;hl=en&amp;sll=37.6,-95.665&amp;sspn=71.493163,69.873047&amp;hnear=Newington,+Virginia+22122&amp;t=m&amp;ie=UTF8&amp;hq=&amp;z=14&amp;ll=38.733096,-77.187334&amp;output=embed"></iframe>
					</div>
					<div class="one_fourth column_last" style="width: 204px;">
						<h4>Address</h4>
						<p>
							PO Box 361 <br>
							Newington, VA 22122<br>
							
							info@cockerspanielrescue.com
							www.cockerspanielrescue.com
						</p>
						<p>
							<span class="icon general">r</span> 703.533.2373 <br/>
							<span class="icon general">h</span> <a href="mailto:info@cockerspanielrescue.com">info@cockerspanielrescue.com</a> <br/>
							<span class="icon general">l</span> <a href="http://www.cockerspanielrescue.com">www.cockerspanielrescue.com</a>
						</p>
					</div>
					
				</div>
				<!-- End Location -->
			</div>
			<!-- End Page Content -->
			
			<!-- Start Sidebar -->
			<aside>
				<div id="sidebar">
					<div class="widget widget_search" id="search-2">
						<form action="http://themes.two2twelve.com/wordpress/advocate/" id="searchform" method="get">
							<p>	
								<label for="s">Enter a search term...</label>
						        <input type="text" id="s" class="text_field" name="s" value="">
								<input type="submit" value="Search" id="searchsubmit" class="button white">
							</p>
						</form>
					</div>
					
					<div class="widget">
						<h5>Contact Information</h5>
						<div class="location_widget">
							<p>
								<span class="icon general">r</span> 703.533.2373 (Voice Mail)<br/>
								<span class="icon general">l</span> <a href="http://www.cockerspanielrescue.com<">www.cockerspanielrescue.com</a><br/><br/>
								
								<span class="icon general">h</span> General Information</br><a href="mailto:info@cockerspanielrescue.com">info@cockerspanielrescue.com</a> <br/>
								<span class="icon general">h</span> Adoption Inquiry</br><a href="mailto:adoptinquiry@cockerspanielrescue.com">adoptinquiry@cockerspanielrescue.com</a> <br/>
								<span class="icon general">h</span> Donations</br><a href="mailto:donations@cockerspanielrescue.com">donations@cockerspanielrescue.com</a> <br/>
								<span class="icon general">h</span> Fundraising</br><a href="mailto:fundraising@cockerspanielrescue.com">fundraising@cockerspanielrescue.com</a> <br/>
								<span class="icon general">h</span> Surrender</br><a href="mailto:intake@cockerspanielrescue.com">intake@cockerspanielrescue.com</a> <br/>
								<span class="icon general">h</span> Volunteer</br><a href="mailto:volunteer@cockerspanielrescue.com">volunteer@cockerspanielrescue.com</a> <br/>
							</p>
						</div>
					</div>

					<div class="widget">
						<h5>General Mailing Address</h5>
						<div class="location_widget">
							<p>
								PO Box 361 <br/>
								Newington, VA 22122
							</p>
						</div>
					</div>

					<div class="widget">
						<h5>Vet Record Mailing Address</h5>
						<div class="location_widget">
							<p>
								PO Box 62<br>
								Spencerville, MD 20868
							</p>
						</div>
					</div>
						
				</div>
			</aside>
			<!-- End Sidebar -->
			
		</section>
	</div>
	<!-- Page Wrapper -->
	
	<!-- Footer -->
	<?php include("footer.php"); ?>
	<!-- End Footer -->
	
</body>
</html>
