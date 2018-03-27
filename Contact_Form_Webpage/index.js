$(document).ready(function() {
	setTimeout(function() {
		$("#main").removeClass("is-loading");
	}, 100)


	$("#arw-btn").click(function() {
		$('html, body').animate({
				scrollTop: $("#projects").offset().top
		}, 2000);
	});


});







