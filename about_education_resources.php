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
							<span><a href="about.php">About</a></span>
						</li>
						<li>
							<span class="nav_sep">&raquo;</span>
							<span>Education &amp; Resources</span>
						</li>
					</ol>
				</div>
				<!-- End Breadcrumb -->

				<h1>Education &amp; Resources</h1>
				
				<ul class="contentpage">
					<li><a href="learn_bringing_your_new_dog_home.php">Bringing Your New Dog Home</a></li>
					<li><a href="learn_fanconi_syndrome.php">Fanconi Syndrome</a></li>
					<li><a href="learn_puppy_mill_dogs.php">Puppy Mill Dogs</a></li>
					<li><a href="learn_pet_loss.php">Pet Loss</a></li>
					<li><a href="http://www.yourdogsfriend.info/" target="_blank">Your Dog&#39;s Friend</a></li>
					<li><a href="learn_other_cocker_resources.php ">Other Cocker Rescues</a></li>
				</ul>

			</div>
			<!-- End Page Content -->
			
			<!-- Start Sidebar -->
			<?php include("sidebar_adopt.php"); ?>
			<!-- End Sidebar --> 
			
		</section>
	</div>
	
	<!-- Footer -->
	<?php include("footer.php"); ?>
	<!-- End Footer -->
	
</body>
</html>
