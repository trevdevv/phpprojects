$(document).ready(function() {
  // Main Header
	setTimeout(function() {
		$("#main").removeClass("is-loading");
	}, 100)

  // Header - Down Arrow
	$("#arw-btn").click(function() {
		$('html, body').animate({
				scrollTop: $("#projects-counter").offset().top
		}, 2000);
  });	

  // Project Counter

	$.fn.jQuerySimpleCounter = function( options ) {
    var settings = $.extend({
        start:  0,
        end:    100,
        easing: 'swing',
        duration: 400,
        complete: ''
    }, options );

    var thisElement = $(this);

    $({count: settings.start}).animate({count: settings.end}, {
    duration: settings.duration,
    easing: settings.easing,
    step: function() {
      var mathCount = Math.ceil(this.count);
      thisElement.text(mathCount);
    },
    complete: settings.complete
  });
};


$('#number1').jQuerySimpleCounter({end: 12,duration: 3000});
$('#number2').jQuerySimpleCounter({end: 55,duration: 3000});
$('#number3').jQuerySimpleCounter({end: 359,duration: 2000});
$('#number4').jQuerySimpleCounter({end: 246,duration: 2500});
  
  // Section - Skills
    // this has nothing to do with the animation, just forces the window to be a size that allows a scroll
  var containerHeight = $(window).height() / 2;

  //$('.spacer').css("height", containerHeight);

  // Find the height of the previous section, half it so when you have scrolled more than half past the section, it triggers the animation
  var x = $('.skills').prev().height() / 4;

  $(window).scroll(function() {
    // checks to see if you have scrolled far enough down to activate the animation
    if ($(window).scrollTop() >= x) {
      //find each element with the class .skill-percent
      $('.skill-percent').each(function() {
        // animate
        $(this).animate({
          //finds the width from the data-percent attribute
          width: $(this).data('percent') + '%'
        }, 1000);
      });
    }
  });
});







