<?php $thisPage="donate"; ?>
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
			
			<!-- Start Donate -->
			<div id="about" class="page with_sidebar">

				<!-- Start Breadcrumb -->
				<div class="breadcrumb_navigation">
					<ol class="breadcrumb_list">
						<li>
							<a href="index.php"><span>Home</span></a>
						</li>
						<li>
							<span class="nav_sep">&raquo;</span>
							<span><a href="donate.php">Donate</a></span>
						</li>
						<li>
							<span class="nav_sep">&raquo;</span>
							<span>Business Sponsor</span>
						</li>
					</ol>
				</div>
				<!-- End Breadcrumb -->

				<h1>Business Sponsor</h1>
				
				<div>
					<p>OBG offers sponsorships to businesses to help us fund our rescue efforts.&nbsp; We have 3 levels of sponsorship available on an 
					annual basis:&nbsp; Diamond, Sapphire, and Pearl.&nbsp; Each choice offers a different level of exposure to our over 3,000 dedicated 
					members and supporters.&nbsp; In addition, OBG&rsquo;s website receives over one million hits and 50,000 unique visitors 
					per month.&nbsp; We encourage you to review each opportunity below and select the one that best suits your business and philanthropic goals by 
					filling out our business sponsorship form. &nbsp;Please contact us at&nbsp;<a href="mailto:sponsor@cockerspanielrescue.com?subject=OBG%20Sponsorship%20Program&amp;body=Please%20complete%20the%20following%20information%20re%3A%20your%20interest%20in%20an%20OBG%20sponsorship%20opportunity.%0A%0ACompany%20Name%3A%0AStreet%20Address%3A%0ACity%2FState%2FZip%3A%0AContact%20Name%3A%20%0AContact%20Phone%3A%0AContact%20Email%3A%0ACompany%20Website%3A%0ASponsorship%20Level%3A%20%241%2C000%2C%20%24500%2C%20%24250">sponsor@cockerspanielrescue.com</a>
					if you have any questions or would like to discuss participating.  We thank you in advance for your support!</p>

				</div>

				<div id="programs">
					<div class="box_heading">
						<h2>Diamond Sponsorship - $1000</h2>
						<span class="line"></span>
					</div>
				</div>

				<ul class="contentpage">
					<li>On-site visibility&nbsp;at major fundraising events &amp; select outreach events</li>
					<li>Year-round recognition&nbsp;in our OBG newsletters (2x a year) &nbsp;and all monthly e-newsletters</li>
					<li>Recognition&nbsp;at&nbsp;<a href="http://www.cockerspanielrescue.com/">www.cockerspanielrescue.com</a></li>
				</ul>

				<div id="programs">
					<div class="box_heading">
						<h2>Sapphire Sponsorship - $500</h2>
						<span class="line"></span>
					</div>
				</div>

				<ul class="contentpage">
					<li>On-site visibility&nbsp;at 2 major fundraising events</li>
					<li>Recognition&nbsp;in our OBG newsletters (2x a year) and 4 monthly e-newsletters</li>
					<li>Recognition&nbsp;at&nbsp;<a href="http://www.cockerspanielrescue.com/">www.cockerspanielrescue.com</a></li>
				</ul>

				<div id="programs">
					<div class="box_heading">
						<h2>Pearl Sponsorship - $250</h2>
						<span class="line"></span>
					</div>
				</div>
				
				<ul class="contentpage">
					<li>Recognition&nbsp;at 1 major fundraising event</li>
					<li>Recognition&nbsp;in 1 OBG newsletter</li>
					<li>Recognition&nbsp;at&nbsp;<a href="http://www.cockerspanielrescue.com/">www.cockerspanielrescue.com</a></li>
				</ul>

			</div>
			
			<!-- Start Sidebar -->
			<?php include("sidebar_donate.php"); ?>
			<!-- End Sidebar -->
	
		</section>
	</div>
	
	<!-- Footer -->
	<?php include("footer.php"); ?>
	<!-- End Footer -->
	
</body>
</html>
