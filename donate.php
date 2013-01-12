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
				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
				</div>
				
				<div id="donation_level">
					<div class="box_heading">
						<h2>Every little bit counts</h2>
						<span class="line"></span>
					</div>
					<p class="choose">Please choose a donation level.  Paypal and credit card accepted.</p>
					<ul class="amount">
						<li><a href="#" class="color_1">Donate <h3>$5</h3></a></li>
						<li><a href="#" class="color_2">Donate <h3>$10</h3></a></li>
						<li><a href="#" class="color_3">Donate <h3>$15</h3></a></li>
						<li><a href="#" class="color_4">Donate <h3>$25</h3></a></li>
						<li><a href="#" class="color_5">Donate <h3>$50</h3></a></li>
					</ul>
				</div>
				<!-- End Donate -->
				
				<!-- Start Actions -->
				<div id="actions">
					<div class="box_heading">
						<h2>More ways to help</h2>
						<span class="line"></span>
					</div>
					<div class="box one_half">
						<div class="inner">
							<div class="box_heading">
								<span class="icon general-enclosed">2</span>
								<h4>Buy Stuff</h4>
							</div>
							<p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere.</p>
						</div>
					</div>
					<div class="box one_half column_last">
						<div class="inner">
							<div class="box_heading">
								<span class="icon general-enclosed">o</span>
								<h4>Volunteer</h4>
							</div>
							<p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere.</p>
						</div>
					</div>
					<div class="box one_half">
						<div class="inner">
							<div class="box_heading">
								<span class="icon general-enclosed">~</span>
								<h4>Donate</h4>
							</div>
							<p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere.</p>
						</div>
					</div>
					<div class="box one_half column_last">
						<div class="inner">
							<div class="box_heading">
								<span class="icon general-enclosed">l</span>
								<h4>Share</h4>
							</div>
							<p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere.</p>
						</div>
					</div>
				</div>
				<!-- End Actions -->
				
				

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
