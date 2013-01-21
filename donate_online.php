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
							<span>Donate Online</span>
						</li>
					</ol>
				</div>
				<!-- End Breadcrumb -->

				<h1>Donate Online</h1>
				
				<div>
				<p> Your donations are greatly appreciated and have helped thousands of dogs on their way to forever homes over the years! OBG is an all volunteer, non-profit organization, which means your donations  					go directly toward the care of our dogs. We rely on your support to help us with the cost of the   					care and rehabilitation of our dogs; the adoption fees do not come close to covering these expenses.  Major   					expenses include vetting, grooming, and kenneling (which we must do when we have more dogs than  foster homes).</p>
			                    
			    <h2>Online</h2>
			    <p>Online donations allow for a quick, easy and secure way to give to   OBG!   The following links allow you to set up a one-time gift or a   monthly subscription donation.</p>
			    <p>&lt;&lt;PAYPAL&gt;&gt;</p>
			    <p>&lt;&lt;NETWORK FOR GOOD&gt;&gt;</p>
			    <p>&lt;&lt;RAZOO&gt;&gt;</p>
			    <h4>Designations</h4>
				  <p><br>
				    If you wish, please use the memo field to specify which dog,&nbsp;<a href="donate_special_funds.php">special fund</a>&nbsp;or other designation to which you&#39;d like your donation to be applied.</p>
				  <h4>Giving For Tomorrow (GiFT)</h4>
				  <p><br>
				    Giving for Tomorrow is a pledge-based way to donate to OBG. It's a win-win because you get to donate gradually and we   don't   have to worry about "where our next paycheck" is coming from, so   we   can focus 100% of our time and energy on caring for the dogs.</p>
				  <p>&lt;&lt;SET UP SUBSCRIPTION&gt;&gt;</p>
				  <p>As with all donations to OBG Cocker Rescue, a 501(c)3 non-profit, your donation by mail is tax deductible to the extent allowable by the law; please consult your tax advisor for details.</p>
				  <p>OBG is listed on <a href="http://www2.guidestar.org/organizations/54-1833707/oldies-goodies-cocker-rescue.aspx">Guidestar</a> and was recognized as a <a href="http://greatnonprofits.org/organizations/view/oldies-but-goodies-obg-cocker-rescue" target="_blank">2012 Top Nonprofit</a>.</p>
			  </div>
				

				

				
				

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
