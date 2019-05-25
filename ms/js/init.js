jQuery.noConflict();

(function ($) {
    $(document).ready(function () {
        //tooltip
        //$('[data-toggle="tooltip"]').tooltip(); 

        //wow js
        new WOW().init();

        //counter up
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });

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

        // navbar shrink
        $(window).on('scroll', function () {
            let divPosition = $("#shrink-menu").offset().top;
            let topPosition = $(this).scrollTop();
            let relative = divPosition - topPosition;
            let menu = $('.menu');
            if (relative > 200) {
                if (menu.hasClass('shrink')) {
                    menu.removeClass('shrink');
                }
            } else {
                if (!menu.hasClass('shrink')) {
                    menu.addClass('shrink');
                }
            }
        });

//        //slick
//        $('.korzysci-slider').slick({
//            slidesToShow: 1,
//            slidesToScroll: 1,
//            autoplay: true,
//            autoplaySpeed: 5000,
//            adaptiveHeight: true,
//            mobileFirst: true,
//            dots: false,
//            arrows: true,
//            prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
//            nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
//            responsive: [
//                {
//                    breakpoint: 480,
//                    settings: {
//                        slidesToShow: 1,
//                        slidesToScroll: 1,
//                        autoplay: true,
//                        autoplaySpeed: 5000,
//                        adaptiveHeight: true,
//                        mobileFirst: true,
//                        dots: false,
//                        arrows: true
//                    }
//                },
//                {
//                    breakpoint: 1200,
//                    settings: {
//                        slidesToShow: 3,
//                        slidesToScroll: 1,
//                        autoplay: true,
//                        autoplaySpeed: 5000,
//                        adaptiveHeight: true,
//                        mobileFirst: true,
//                        dots: false,
//                        arrows: true
//                    }
//                }
//            ]
//        });
    });

    particlesJS(
            "particles-js",
            {
                "particles":
                        {"number":
                                    {"value": 160, "density":
                                                {"enable": true, "value_area": 800}
                                    }, "color":
                                    {
                                        "value": "#ed1b24"
                                    },
                            "shape": {
                                "type": "circle",
                                "stroke": {
                                    "width": 0,
                                    "color": "#000000"
                                },
                                "polygon": {
                                    "nb_sides": 5
                                },
                                "image": {
                                    "src": "img/github.svg",
                                    "width": 100,
                                    "height": 100
                                }
                            },
                            "opacity": {
                                "value": 0.5,
                                "random": true,
                                "anim": {
                                    "enable": false,
                                    "speed": 1,
                                    "opacity_min": 0,
                                    "sync": false
                                }
                            },
                            "size": {
                                "value": 5,
                                "random": true,
                                "anim": {
                                    "enable": false,
                                    "speed": 4,
                                    "size_min": 0.3,
                                    "sync": false
                                }
                            },
                            "line_linked": {
                                "enable": false,
                                "distance": 150,
                                "color": "#ffffff",
                                "opacity": 0.4,
                                "width": 1
                            },
                            "move": {
                                "enable": true,
                                "speed": 0.3,
                                "direction": "top",
                                "random": true,
                                "straight": false,
                                "out_mode": "out",
                                "bounce": false,
                                "attract": {
                                    "enable": false,
                                    "rotateX": 600,
                                    "rotateY": 600
                                }
                            }
                        },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": false,
                            "mode": "bubble"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 250,
                            "size": 0,
                            "duration": 2,
                            "opacity": 0,
                            "speed": 3
                        }, "repulse": {
                            "distance": 400,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
})(jQuery);