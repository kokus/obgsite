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
	
	<div class="breadcrumbs">
		<a href="/">Home</a>&nbsp;/&nbsp;<a href="adopt.php">Adopt</a>&nbsp;/&nbsp;Why Adopt
	</div>

	<div class="page_wrapper">
		<section class="container">
			
			<!-- Start Page Content -->
			<div id="about" class="page with_sidebar">
				
				<h1>Why Adopt?</h1>

				<div id="programs">
					<div class="box_heading">
						<h2>Why Adopt a Rescue Dog</h2>
						<span class="line"></span>
					</div>
					<p>Most dogs were turned in to shelters or rescues through no fault of their own.&nbsp; It&#39;s a huge 
					misconception that they&#39;re &quot;damaged goods&quot; or by adopting one you&#39;ll be &quot;inheriting 
					someone else&#39;s problems&quot;.&nbsp; Of course there are dogs that have a little extra baggage from their 
					previous life, but that&#39;s the power of the canine spirit - every day is a fresh start, they&#39;re willing 
					to forgive and eager to learn what love is!</p>

					<ul class="contentpage">
						<li><strong>What-you-see-is-what-you-get (aka WYSIWYG)</strong> - The dog&#39;s personality, temperament and physical characteristics have developed, so it&#39;s easier to &quot;meet your match&quot;.&nbsp; No need to worry that your cuddly pup will grow to exceed your apartment weight restrictions. &nbsp;Or find out down the road that what you hoped would be a sporty pal to accompany you on long hikes really prefers to be a cuddly couch potato.&nbsp; Our dogs have been living in foster homes, so we can get a much better idea of their personality, temperament and energy level to help you find the perfect match.</li>
						<li><strong>Training </strong>- Many dogs are housebroken, know basic commands and will sleep through the night.&nbsp; Not so with an itty-bitty puppy.</li>
						<li><strong>Vetting&nbsp; </strong>- Unlike dogs who have been &quot;purchased,&quot; our adopted&nbsp;dogs have had physicals, are up-to-date on shots and have been spayed/neutered, saving you another immediate outlay of money.&nbsp;&nbsp;Any known medical issues are disclosed prior to adoption, leaving less room for medical surprises.</li>
						<li><strong>Loyalty </strong>- You might be the first one to show love and affection after a lifetime of abuse, neglect or indifference.&nbsp; You&#39;ll be rewarded with a lifetime of love and loyalty.</li>
						<li><strong>Saving a Life</strong> - millions of perfectly adoptable animals are put down in American shelters every year.&nbsp; You&#39;re providing a home to one of the lucky ones who got out, thereby allowing the rescue to save another.</li>
					</ul>
				</div>


				<div id="programs">
					<div class="box_heading">
						<h2>Why Adopt a Senior</h2>
						<span class="line"></span>
					</div>
					<p>You didn&#39;t think&nbsp;we could resist giving&nbsp;a special plug&nbsp;for the seniors, did you? &nbsp;Ask many of our foster families and they&#39;ll tell you they prefer fostering the seniors because they&#39;re so easy. &nbsp;Here&#39;s why they deserve a little extra consideration!</p>
				<ul class="contentpage">
					<li>Generally, seniors are quieter and more laid back - they&#39;ve had a few extra years to perfect the art of snuggling!</li>
					<li>Senior dogs are usually the first to be killed in shelters. Most people go for the puppies, so seniors rarely stand a chance.</li>
					<li>Those who are hard of hearing bark less, if at all.</li>
					<li>Many seniors can fit in just about anywhere&nbsp;- from homes with retirees to those with young kids.</li>
					<li>By adopting an older dog, you can make&nbsp;a statement about compassion and the value of all life at all ages!</li>
				</ul>
				</div>




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
