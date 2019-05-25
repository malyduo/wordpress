jQuery.noConflict();

(function ($) {
    $(document).ready(function () {
        $('body').append('<div id="toTop" class="btn btn-default"><i class="fa fa-arrow-up"></i></div>');
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
        $('#toTop').click(function () {
            $("html, body").animate({scrollTop: 0}, 1000);
            return false;
        });
    });
})(jQuery);
