$(document).ready(function() {
    $(window).scroll(function() {
        var distanceFromTop = $(document).scrollTop();

        if (distanceFromTop >= $('#header .row').height())
        {
            $('#navigation-bar').addClass('fixed');
        }

        else
        {
            $('#navigation-bar').removeClass('fixed');
        }
    });
});