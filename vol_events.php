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
								<span>Help at Adoption Events</span>
							</li>
						</ol>
				</div>
				<!-- End Breadcrumb -->

				<h1>Help at Adoption Events</h1>
				<p>Let&#39;s face it, we all volunteer because we love dogs - so what could be better than spending time with them? &nbsp;Nothing! &nbsp;We knew you&#39;d agree, so consider volunteering at an OBG adoption show.</p>

				<ul class="contentpage">
					<li><strong>Handle a dog</strong>&nbsp;- volunteers willing to hold a dog at an adoption show are always welcome. &nbsp;After all, most of our adoptions happen from shows!</li>
					<li><strong>Interact with our dogs</strong>&nbsp;- especially helpful if you can take high-quality digital pictures or can provide knowledgable behavior assessments.</li>
					<li><strong>Be the face of OBG</strong>&nbsp;- welcome potential adopters or supporters and help find them a match!</li>
				</ul>
				<p>Many of our volunteers start by attending adoption events and eventually learn how to manage shows. &nbsp;We are always looking for show managers who are organized, punctual, professional and have good people skills!</p>

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
