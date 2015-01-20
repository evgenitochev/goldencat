$(document).ready(function(){
	// Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 500)
		{
			$('.scroll-top').fadeIn();
		}

		else
		{
			$('.scroll-top').fadeOut();
		}
	});
	
	// Click event to scroll to top
	$('.scroll-top').click(function() {
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
});