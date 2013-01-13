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
							<span>Donate in Kind</span>
						</li>
					</ol>
				</div>
				<!-- End Breadcrumb -->

				<h1>Donate in Kind</h1>
				
				<div id="programs">
					<p>OBG is often in need of the following supplies:</p>
					<ul class="contentpage">
						<li>Blankets or other suitable bedding materials</li>
						<li>Collars and Leashes</li>
						<li>Crates suitable for a mid size dog</li>
						<li>Grain-free dog food</li>
						<li>Gift cards for PetSmart or PetCo (to purchase grooming or food)</li>
						<li>Travel crates suitable for a mid size dog</li>
						<li>Treats</li>
					</ul>

					<p>If you have any of these items that you would like to donate, please <a href="http://www.cockerspanielrescue.com/contact.htm">contact us</a> or stop by an upcoming adoption show.</p>

					<div class="box_heading">
						<h2>Other Options</h2>
						<span class="line"></span>
					</div>

					<h4>New Merchandise</h4>
					<p>One man's trash is another man's treasure - maybe you already have a blender and don't need the one Aunt Bertha 
						gave you for your birthday this year.  We'll take it off your hands!  We'll gratefully accept your donation 
						of any new, unused item in good condition.  Please contact merchandise@cockerspanielrescue.com for more info.</p>
					
					<h4>EBAY Sales</h4>
					<p>Anyone can help OBG by becoming a direct seller, posting items for sale on eBay, then specifying the percentage 
						of the proceeds to be donated directly to OBG through ebay Giving Works. Click here if you have questions on 
						direct selling.  You can also help OBG by bidding on items that others are selling through eBay Giving works 
						to benefit OBG.  Follow this link to see what is currently up for bid</p>

					<h4>Appreciated Securities</h4>
					<p>A gift of long-term appreciated securities (stocks, bonds) is exempt from capital gains taxes and, in the majority of cases, allows you a charitable 
						income tax deduction of their market value. For more information, consult your financial planner or tax advisor.</p>

					<h4>Estate Gifts</h4>
					<p>Making a gift through your estate is a common way to provide a contribution to a favorite charity. In, addition, a carefully planned estate gift 
						can reduce or eliminate federal estate taxes. For more information, consult your attorney or tax advisor.</p>
				</div>

				<p>If you are interested in any of these options, please feel free to <a href="http://www.cockerspanielrescue.com/contact.htm">contact us</a> to discuss.</p>

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
