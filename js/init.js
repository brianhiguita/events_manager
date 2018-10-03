$(document).ready(function() {
	$('.circle').click( function(){
		$('.nav-open').toggleClass('oppenned');
		event.stopPropagation();
	})

	$('body').click( function(){
		$('.nav-open').removeClass('oppenned');
		$('.ham4').removeClass('active');
	})
});
