< script type = "text/javascript" charset = "utf-8" > jQuery(document).ready(function($) {
	$('#calendar').fullCalendar({
		events: [{
			title: 'Organic Pot Luck',
			start: '2015-07-15 13:00:00',
			end: '2015-07-17 13:00:00',
			allDay: false,
			color: '#d07837',
			url: 'http://themes.two2twelve.com/wordpress/advocate/event/organic-pot-luck/'
		}, {
			title: 'Beach Clean Up',
			start: '2013-01-01 09:00:00',
			end: '2013-01-01 08:00:00',
			allDay: false,
			color: '#d07837',
			url: 'http://themes.two2twelve.com/wordpress/advocate/event/beach-clean-up-2/'
		}, {
			title: 'Green Energy Conference',
			start: '2012-11-30 14:16:00',
			end: '2012-11-30 15:00:00',
			allDay: false,
			color: '#d07837',
			url: 'http://themes.two2twelve.com/wordpress/advocate/event/green-energy-conference/'
		}, {
			title: 'Organic Pot Luck Night',
			start: '2012-08-28 09:00:00',
			end: '2012-08-28 12:00:00',
			allDay: false,
			color: '#d07837',
			url: 'http://themes.two2twelve.com/wordpress/advocate/event/organic-pot-luck-night/'
		}, {
			title: 'Rainforest Protection Meeting',
			start: '2012-09-13 10:23:00',
			end: '2012-09-13 12:20:00',
			allDay: false,
			color: '#d07837',
			url: 'http://themes.two2twelve.com/wordpress/advocate/event/rainforest-protection-meeting/'
		}, ],
		eventClick: function(event) {
			if(event.url) {
				parent.location = event.url;
				return false;
			}
		},
		buttonText: {
			prev: 'v',
			next: 'u'
		}
	});
	$("a.calendar").click(function() {
		$("#calender_view").show();
		$("#calendar_list").hide();
		$("ul.events_display li").removeClass("current");
		$(this).parent().addClass("current");
	});
	$("a.calendar_list").click(function() {
		$("#calender_view").hide();
		$("#calendar_list").show();
		$("ul.events_display li").removeClass("current");
		$(this).parent().addClass("current");
	});
}); 
< /script>