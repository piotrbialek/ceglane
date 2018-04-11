$(function(){
	$('.slider-arrow').click(function(){
        if($(this).hasClass('show')){
	    $( ".slider-arrow, .panel" ).animate({
          left: "-=100"
		  }, 700, function() {
            // Animation complete.
          });
		  $(this).html('&gt;').removeClass('show').addClass('hide');
        }
        else {   	
	    $( ".slider-arrow, .panel" ).animate({
          left: "+=100"
		  }, 700, function() {
            // Animation complete.
          });
		  $(this).html('&times;').removeClass('hide').addClass('show');    
        }
    });

});