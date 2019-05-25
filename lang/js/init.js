jQuery.noConflict();

(function ($) {
    $(document).ready(function () {
        $('.textwidget').contents().unwrap();

        //wow js
        new WOW().init();

// smoothscroll
        $('a[href*="#"]')
                // Remove links that don't actually link to anything
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

                        var target = jQuery(this.hash);
                        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            jQuery('html,body').animate({
                                scrollTop: target.offset().top - 100
                            }, 1000);
                            return false;
                        }
                    }
                });

        //slick
        $('.partners-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            adaptiveHeight: true,
            mobileFirst: true,
            dots: false,
            arrows: false,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 3000,
                        adaptiveHeight: true,
                        mobileFirst: true,
                        dots: false,
                        arrows: false
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 3000,
                        adaptiveHeight: true,
                        mobileFirst: true,
                        dots: false,
                        arrows: false
                    }
                }
            ]
        });
    });
})(jQuery);