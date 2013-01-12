<?php $thisPage="Adopt"; ?>
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
			<div id="about" class="page with_sidebar">
				
				<!-- Start Breadcrumb -->
				<div class="breadcrumb_navigation">
						<ol class="breadcrumb_list">
							<li>
								<a href="index.php"><span>Home</span></a>
							</li>
							<li>
								<span class="nav_sep">&raquo;</span>
								<span><a href="volunteer.php">Volunteer</a></span>
							</li>
							<li>
								<span class="nav_sep">&raquo;</span>
								<span>Other Ways to Help</span>
							</li>
						</ol>
				</div>
				<!-- End Breadcrumb -->

				<h1>Other Ways to Help</h1>
				
				<p>Whatever your talents and interests, you&#39;ll find that you really can make a difference! &nbsp;Volunteers and fosters are not paid with this nonprofit 501(c)(3) organization. We hope you&#39;ll find that the amazing feeling you get when saving a life will be payment enough!&nbsp;</p>

				<p>OBG can always use an extra pair of hands for:</p>

				<ul class="contentpage">
					<li><strong>Grooming&nbsp;</strong>and bathing foster dogs</li>
					<li><strong>Photographing or videoing</strong>&nbsp;to promote kenneled dogs</li>
					<li><strong>Monitoring</strong>&nbsp;and responding to public inquiries through the phone or Internet</li>
					<li><strong>Administrative</strong>,&nbsp;management, and newsletter skills such as editing, typing, graphics, and journalism</li>
					<li><strong>Publicity&nbsp;&nbsp;</strong>through the ability to post shows online or hang flyers in your neighborhood</li>
					<li><strong>Website&nbsp;</strong>skills such as updating and maintaining a very active website</li>
					<li><strong>Public speaking&nbsp;skills</strong> to further educate school children on the proper care of a pet</li>
					<li><strong>Fundraising&nbsp;or event planning</strong> skills to further strengthen this organization financially</li>
					<li><strong>Voting&nbsp;</strong>for OBG in the Animal Shelter Site&#39;s Shelter Challenge</li>
					<li><strong>Baking&nbsp;</strong>tasty treats and/or helping sell at our bake sales</li>
				</ul>

			<p>If you are interested in volunteering or fostering, fill out our 
			 <a href="http://cockerspanielrescue.rescuegroups.org/info/file?file=15491.doc">volunteer application</a> and send it to <a href="mailto:volunteer@cockerspanielrescue.com">volunteer@cockerspanielrescue.com</a> today!</p>


			</div>
			<!-- End Page Content -->
			
			<!-- Start Sidebar -->
			<?php include("sidebar_volunteer.php"); ?>
			<!-- End Sidebar --> 
			
		</section>
	</div>
	
	<!-- Footer -->
	<?php include("footer.php"); ?>
	<!-- End Footer -->
	
</body>
</html>
