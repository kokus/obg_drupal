jQuery(document).ready(function($) {
  
  // Drop down menus
	$("#block-system-main-menu ul li").hover(function() {
		if($(this).find("ul").size != 0) {
			$(this).find("ul:first").stop(true, true).fadeIn("fast");
		}
	}, function() {
		$(this).find("ul:first").stop(true, true).fadeOut("fast");
	});
	
	$("#block-system-main-menu ul li").each(function() {
		$("ul li:last a", this).css({ 'border' : 'none' });
	});

	// Twitter widget
	$(".twitter_stream").tweet({
		username: "obgcockerrescue", // Customize your twitter username here
		count: 2,
		template: "<span class='icon social'>x</span> <div class='tweet_details'>{text}{time}</div>",
		retweets: false,
		loading_text: "loading tweets..."
	});

});


	