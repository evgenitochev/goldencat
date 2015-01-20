$(document).ready(function() {
    $(window).scroll(function() {
        var distanceFromTop = $(document).scrollTop();

        if (distanceFromTop >= $('#header').height())
        {
            $('#navigation-bar').fadeIn(400).addClass('fixed');
        }

        else
        {
            $('#navigation-bar').fadeIn(400).addClass('fixed');
        }
    });
});