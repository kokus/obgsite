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
			
			<!-- Start Social Icons -->
			<aside>
				<ul class="social icon">
					<li><a href="" title="Twitter">a</a></li>
					<li><a href="" title="Facebook">v</a></li>
					<li><a href="" title="Flickr">d</a></li>
					<li><a href="" title="Vimeo">c</a></li>
					<li><a href="" title="Google">t</a></li>
					<li><a href="" title="RSS">b</a></li>
					<!-- More Social Icons:
					<li><a href="" title="Picasa">e</a></li>
					<li><a href="" title="dribbble">f</a></li>
					<li><a href="" title="Forrst">g</a></li>
					<li><a href="" title="deviantART">h</a></li>
					<li><a href="" title="WordPress">i</a></li>
					<li><a href="" title="Blogger">j</a></li>
					<li><a href="" title="Yahoo!">k</a></li>
					<li><a href="" title="Amazon">l</a></li>
					<li><a href="" title="LinkedIn">m</a></li>
					<li><a href="" title="Last.fm">n</a></li>
					<li><a href="" title="StumbleUpon">o</a></li>
					<li><a href="" class="Pinterest">p</a></li>
					<li><a href="" title="Xing">q</a></li>
					<li><a href="" title="SoundCloud">r</a></li>
					<li><a href="" title="Delicious">s</a></li>
					<li><a href="" title="Mail">u</a></li>
					<li><a href="" title="Google">w</a></li>
					-->
				</ul>
			</aside>
			<!-- End Social Icons -->
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
					
					<p>For questions regarding donations, programs or how you can get involved with the revolution please contact us.</p>
					
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
						<!--<iframe width="438" height="194" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Miami,+FL&amp;aq=0&amp;oq=Miami,+FL&amp;sll=26.464748,-80.109357&amp;sspn=0.110337,0.20359&amp;ie=UTF8&amp;hq=&amp;hnear=Miami,+Miami-Dade,+Florida&amp;t=m&amp;ll=25.789072,-80.226288&amp;spn=0.059971,0.150032&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe>-->
					</div>
					<div class="one_fourth column_last">
						<h4>Address</h4>
						<p>
							1234 Revolutionary Drive <br/>
							Miami, FL 33445
						</p>
						<p>
							<span class="icon general">r</span> 123.333.4524 <br/>
							<span class="icon general">h</span> <a href="">info@revolution.com</a> <br/>
							<span class="icon general">l</span> <a href="">www.revolution.com</a>
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
								PO Box ??? <br/>
								Spencerville, MD ?????
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
