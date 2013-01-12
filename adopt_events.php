<?php $thisPage="Adopt"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Oldies But Goodies Cocker Spaniel Rescue</title>
	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="stylesheets/flexslider.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/tipsy.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/base.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/media.queries.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/fullcalendar.css" />
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
	<script type="text/javascript" src="javascripts/fullcalendar.js"></script>
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
			
			<!-- Start Event List -->
			<div id="events_wrapper" class="page">
				
				<!-- Start Breadcrumb -->
				<div class="breadcrumb_navigation">
						<ol class="breadcrumb_list">
							<li>
								<a href="index.php"><span>Home</span></a>
							</li>
							<li>
								<span class="nav_sep">&raquo;</span>
								<span><a href="adopt.php">Adopt</a></span>
							</li>
							<li>
								<span class="nav_sep">&raquo;</span>
								<span>Adoption Events</span>
							</li>
						</ol>
				</div>
				<!-- End Breadcrumb -->

				<h1>Upcoming Events</h1>

				<ul class="events_display">
					<li><a href="javascript:;" class="calendar_list">Event List</a></li>
					<li class="current"><a href="javascript:;" class="calendar">Calendar</a>
				</ul>
				
				<div id="calendar_view">
					<div id="calendar">
						
					</div>
				</div>
				<div id="events_list" style="display:none">
					<!-- Start Event Item -->
					<div class="list">
						<div class="box_heading">
							<h2>December 17, 2012</h2>
							<span class="line"></span>
						</div>
						<div class="event_details">
							<h5><a href="event_description.html">Howl-o-Ween Hayride &amp; Fall Festival!</a></h5>
							<p>Come out to Lowelands Farm for a private OBG Hayride and fall festival. Enjoy homemade cider and treats, plus a hayride, pumpkin carving contest and a doggie costume party. Stay tuned for details.</p>
						</div>
						<div class="event_date">
							<ul class="left">
								<li>Start:</li>
								<li>End:</li>
								<li>Venue:</li>
								<li>Address:</li>
								<li>Cost:</li>
							</ul>
							<ul class="right">
								<li>December 17, 2012 2:00 PM</li>
								<li>December 17, 2012 5:00 PM</li>
								<li>Lowelands Farm</li>
								<li>Middleburg, VA</li>
								<li>$45</li>
							</ul>
						</div>
					</div>
					<!-- End Event Item -->

					<!-- Start Event Item -->
					<div class="list">
						<div class="box_heading">
							<h2>December 22, 2012</h2>
							<span class="line"></span>
						</div>
						<div class="event_details">
							<h5><a href="event_description2.html">Adoption Show</a></h5>
							<p>Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<h6>Dogs Scheduled are:</h6>
							<p>Adams, Arbuckle, Brandy, Candy Rose, Cubby Bud, Curly Mo, Danner, Harrison, Lulu, Marley, Prada </p>
						</div>
						<div class="event_date">
							<ul class="left">
								<li>Start:</li>
								<li>End:</li>
								<li>Venue:</li>
								<li>Address:</li>
							</ul>
							<ul class="right">
								<li>December 22, 2012 11:00 am</li>
								<li>December 22, 2012 1:00 pm</li>
								<li>Unleashed by Petco</li>
								<li>Falls Church, VA</li>
							</ul>
						</div>
					</div>
					<!-- End Event Item -->
					
				</div>

			</div>

		</section>
	</div>
		
	<!-- Footer -->
	<?php include("footer.php"); ?>
	<!-- End Footer -->
	
</body>
</html>

<script type = "text/javascript" charset = "utf-8" > 

	jQuery(document).ready(function($) {

		$("#calendar").fullCalendar({
			events: [{
				title: 'Howl-o-Ween Hayride & Fall Festival!',
				start: '2013-01-19 14:00:00',
				end: '2013-01-19 17:00:00',
				allDay: false,
				color: '#990018;',
				url: 'event_description.html'
			}, {
				title: 'Adoption Show',
				start: '2013-01-26 11:00:00',
				end: '2013-01-26 13:00:00',
				allDay: false,
				color: '#990018;',
				url: 'event_description2.html'
			}, ],
			eventClick: function(event) {
				if(event.url) {
					parent.location = event.url;
					return false;
				}
			}
        // put your options and callbacks here
    	})
		$("a.calendar").click(function() { 
			$("#calendar_view").show();
			$("#events_list").hide();
			$("ul.events_display li").removeClass("current");
			$(this).parent().addClass("current");

		});
		$("a.calendar_list").click(function() { 
			$("#calendar_view").hide();
			$("#events_list").show();
			$("ul.events_display li").removeClass("current");
			$(this).parent().addClass("current");
		});

	}); 

</script>

