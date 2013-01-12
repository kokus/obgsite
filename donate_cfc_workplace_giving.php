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
							<span>CFC and Workplace Giving</span>
						</li>
					</ol>
				</div>
				<!-- End Breadcrumb -->

				<h1>CFC and Workplace Giving</h1>
					<p>As with all donations to OBG Cocker Rescue, a 501(c)3 non-profit, your workplace donation is tax 
					   deductible to the extent allowable by the law; please consult your tax advisor for details.</p>

					   <ul class="contentpage">
							<li><a href="#CFC">Combined Federal Campaign</a></li>
							<li><a href="#United Way">United Way and America&#39;s Charities</a></li>
							<li><a href="#Corporate Matching Gifts">Corporate Matching Gifts</a></li>
						</ul>
										
					<div class="programs">
						<div class="box_heading">
							<h2><a id="CFC" name="CFC">Combined Federal Campaign</a></h2>
							<span class="line"></span>
						</div>
						<p>If you are a Federal Employee in the National&nbsp; Capital Area, the&nbsp;Chesapeake Bay Area or the Virginia Peninsula regions,&nbsp;the simplest 
							way to donate is through the Combined Federal Campaign CFC. &nbsp;Please designate <strong>#27768</strong>&nbsp;on your CFC donation form during annual campaigns.</p>
						<p>You can designate OBG only if your office is located in one of the following locations:</p>
						<ul class="contentpage">
							<li><strong>District of Columbia:</strong>&nbsp;All locations</li>
							<li><strong>Virginia</strong>:&nbsp;Accomack &nbsp;County, Alexandria, Arlington County,&nbsp; Fairfax City, Fairfax County, Falls Church, Gloucester County, Hampton, Isle of Wright County, James City County, Loudoun County, Manassas, Manassas Park, Matthews County, Middlesex County, Newport News, Northampton County, Poquoson, Prince William County, Surry County, Williamsburg, and York County.</li>
							<li><strong>Maryland</strong>:&nbsp;Baltimore City, Anne Arundel, Baltimore, Calvert, Caroline, Carroll,&nbsp;Cecil, Charles, Dorchester, Harford, Howard, Kent, Montgomery, Prince George&rsquo;s, Queen Anne&rsquo;s, Somerset, Talbot, Wicomico, and Worcester counties</li>
						</ul>
						<p>If you have any doubts, please check with your local CFC coordinator!</p>

						<div class="box_heading">
							<h2><a id="United Way" name="United Way">United Way and America's Charities</a></h2>
							<span class="line"></span>
						</div>
						<p>Please designate OBG by writing Oldies But Goodies Cocker Rescue, Inc. Newington, VA on your pledge card.  Our EIN #54-1833707</p>

						<div class="box_heading">
							<h2><a id="Corporate Matching Gifts" name="Corporate Matching Gifts">Corporate Matching Gifts</a></h2>
							<span class="line"></span>
						</div>
						<p>Many companies encourage their employees' philanthropy through a matching gift program - this essentially doubles your donation to OBG!  Ask your human resources department if your employer has such a program. If so, you will be given a matching gift form to send to OBG with your donation - and we'll do the rest!</p>
					
						
					</div>

					<p>Please contact <a href="mailto:fundraising@cockerspanielrescue.com">fundraising@cockerspanielrescue.com</a> with any questions.</p>
			
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
