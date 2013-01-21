<!DOCTYPE html>
<html lang="en">
<head>
	<title>Advocate</title>
	
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
			
			<!-- Start Event List -->
			<div id="events" class="page">
				
				<h1>Longaberger Basket Party</h1>
				<a href="adopt_events.php">&laquo; Back To Events</a>
				
				<!-- Start Event Item -->
				<div class="event">
					
					<div class="event_date">
						<ul class="one">
							<li>Event:</li>
							<li>Start:</li>
							<li>End:</li>
						</ul>
						<ul class="two">
							<li>Longaberger Basket Party</li>
							<li>February 10, 2012 1 pm</li>
							<li>February 10, 2012 3 pm</li>
						</ul>
						<ul class="three">
							<li>Venue:</li>
							<li>Address:</li>
						</ul>
						<ul class="four">
							<li>Arline's Home Address</li>
							<li>Arlington, VA</li>
						</ul>	
					</div>
					
					<p>Beautiful gifts for friends, family and you!  The Longaberger Company is an American manufacturer of 
						beautiful handcrafted maple wood baskets and offers other home and lifestyle products, including 
						pottery, wrought iron, fabric accessories and specialty foods.  Order online or attend OBG's 
						Longaberger party in Arlington, VA.</p>
				

					<!-- Start Location -->
					<div id="location">
						<div class="box_heading">
							<h2>Event location</h2>
							<span class="line"></span>
						</div>
						<div class="map">
							<iframe width="438" height="194" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=7395+Lee+Highway+Falls+Church,+VA+22042&amp;sll=38.876094,-77.198369&amp;sspn=0.010541,0.021479&amp;ie=UTF8&amp;hq=&amp;hnear=7395+Lee+Hwy,+Falls+Church,+Virginia+22042&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=38.876094,-77.198369&amp;output=embed"></iframe>
						</div>
						<div class="one_fourth column_last">
							<h4>Address</h4>
							<p>
				
								Arlington, VA 22042
							</p>
							<p>
								<span class="icon general">r</span> 703-641-4893 <br/>
							</p>
						</div>
						
					</div>
					<!-- End Location -->
					
				</div>
				<!-- End Event Item -->			
			
			</div>
		</section>
	</div>	
	
	<!-- Footer -->
	<?php include("footer.php"); ?>
	<!-- End Footer -->
	
</body>
</html>
