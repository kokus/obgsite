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
			<div id="blog" class="page with_sidebar">
				
							<!-- Start Breadcrumb -->
				<div class="breadcrumb_navigation">
					<ol class="breadcrumb_list">
						<li>
							<a href="index.php"><span>Home</span></a>
						</li>
						<li>
							<span class="nav_sep">&raquo;</span>
							<span>News</span>
						</li>
					</ol>
				</div>
					<!-- End Breadcrumb -->
					

				<h1>News</h1>
				<img class="rounded" alt="" src="images/content/700x244_v3Princess.jpg">
				<p>So you&#39;re interested in adding a new furry friend to your household? &nbsp;Adoption is a 
					great choice! &nbsp;Click the links below to learn more about adopting from OBG Cocker Rescue!</p>
				<ul class="contentpage">
					<li><a href="news_obg_news.php">OBG News</a></li>
					<li><a href="http://obgcockerconnection.blogspot.com/">Blog - OBG Cocker Connection</a></li>
					<li><a href="adopt_events.php">Events &amp; Fundraisers</a></li>
					<li><a href="news_newsletters.php">Newsletters</a></li>
				</ul>
				
				
			</div>
			<!-- End Page Content -->
			
			<!-- Start Sidebar -->
			<?php include("sidebar_about.php"); ?>
			<!-- End Sidebar --> 
			
		</section>
	</div>
	
	<!-- Footer -->
	<?php include("footer.php"); ?>
	<!-- End Footer -->
	
</body>
</html>
