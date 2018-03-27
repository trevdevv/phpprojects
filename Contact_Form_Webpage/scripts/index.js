var gage = {
  init: function(){
      // restart used for demo purposes - change to $('.gage').each(function(i){
    $('.chart span').css({"width" : "0"}).parent().each(function(i){
      // Loop through .gage elements
      $('p', this).html($(this).attr("data-label"));
      // Set p html value to the data-label attr set in the element
      var timeout = parseInt(i) * 60 + 1100;
      // Set a timeout based on the iteration multiplied by 60 (will affect delay between animations) 
      $('span', this).delay(timeout).animate({"opacity" : "1"}, 0, function(){
        //Delay  
        $(this).css({"width" : $(this).parent().attr("data-level") + "%"});
      });
    });
  }
}


$(document).ready(function() {
	setTimeout(function() {
		$("#main").removeClass("is-loading");
	}, 100)


	$("#arw-btn").click(function() {
		$('html, body').animate({
				scrollTop: $("#projects").offset().top
		}, 2000);
	});

  // Call gage init function
  gage.init();
  // Interval used for demo purposes - remove if using  
  setInterval(function() {
      gage.init();
	}, 5000);
	
});







