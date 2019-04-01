$(document).ready(function() {		
	$('.menu div').hover(function() {
		$(this).stop().animate({							
            opacity: 0.5
            
		}, 300);		
		}, function() {			
		$(this).stop().animate({							
			opacity: 1
		}, 300);		
	});	
});	
