$(document).ready(function() {
	$('li.dropdown a').hover(function() {
		$('ul.dropdown-menu').css('display', 'block');
	})

	if ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		$('li.dropdown a').removeClass('disabled');
	}

	else {
		$('li.dropdown a').addClass('disabled');
	}
})