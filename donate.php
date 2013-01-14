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
			<div id="donate" class="page with_sidebar">

				<!-- Start Breadcrumb -->
				<div class="breadcrumb_navigation">
					<ol class="breadcrumb_list">
						<li>
							<a href="index.php"><span>Home</span></a>
						</li>
						<li>
							<span class="nav_sep">&raquo;</span>
							<span>Donate</span>
						</li>
					</ol>
				</div>
				<!-- End Breadcrumb -->

				<h1>Donate</h1>
				<img class="rounded" alt="" src="images/content/700x244_Donate.jpg">
				<div>
				<p>C'mon, lend a paw!  OBG is an all volunteer, non-profit organization, which means your donations
					go directly toward the care of our dogs. We rely on your support to help us with the cost of the 
					care and rehabilitation of our dogs; the adoption fees do not come close to covering these expenses.  Major 
					expenses include vetting, grooming, and kenneling (which we must do when we have more dogs than  foster homes).</p>
				<p>OBG is listed on <a href="http://www2.guidestar.org/organizations/54-1833707/oldies-goodies-cocker-rescue.aspx">Guidestar</a> and was recognized as a <a href="http://greatnonprofits.org/organizations/view/oldies-but-goodies-obg-cocker-rescue" target="_blank">2012 Top Nonprofit</a>.</p>
				<p>Your donations are greatly appreciated and have helped thousands of dogs find their forever homes over the years!</p>
				</div>
				
				<div id="programs">
					<div class="box_heading">
						<h2>Every little bit counts</h2>
						<span class="line"></span>
					</div>
					<ul class="contentpage">
						<li><a href="donate_mail.php">Donate by Mail</a></li>
						<li><a href="donate_online.php">Donate Online</a></li>
						<li><a href="donate_in_kind.php">Donate In Kind</a></li>
					</ul>
					<div class="box_heading">
						<h2>Tax Exempt</h2>
						<span class="line"></span>
					</div>
					<p>On October 25, 1999, the Internal Revenue Service (IRS) approved OBG, Inc.'s request for 501(c)(3) tax exempt status for non-profit organizations. As a result, all donations are tax deductible to the full extent 
						allowable by law. Contact us at <a href="mailto:finance@cockerspanielrescue.com">finance@cockerspanielrescue.com</a>  if you need specific information regarding our tax exempt status.</p>
				</div>
				<!-- End Donate -->
			
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
