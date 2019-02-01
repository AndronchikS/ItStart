/*
Theme Name: 
Version: 
Author: 
Author URI: 
Description: 
*/
/*	IE 10 Fix*/

(function ($) {
    'use strict';

    jQuery(document).ready(function () {

        //Sticky menu add class
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 150) {
                $(".header").addClass("sticky");
            } else {
                $(".header").removeClass("sticky");
            }
        });

        $(".typed-element").typed({
            stringsElement: $(".typed-strings"),
            typeSpeed: 100,
            loop: true,
            showCursor: true,
            backDelay: 2000,
            fadeOut: true,
            smartBackspace: true,
            cursorChar: "|"
        });

        //Smooth Scroll To Anchor
        $(document).on('click', 'a[href^="#"]', function (event) {
            var top;
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 100
            }, 1000);
            event.preventDefault();
        });


        //Active Menu Item on Page Scroll
        var sections = $('section')
            , nav = $('header')
            , nav_height = nav.outerHeight();

        $(window).on('scroll', function () {
            var cur_pos = $(this).scrollTop();

            sections.each(function () {
                var top = $(this).offset().top - 140,
                    bottom = top + $(this).outerHeight();

                if (cur_pos >= top && cur_pos <= bottom) {
                    nav.find('a').removeClass('active');
                    sections.removeClass('active');

                    $(this).addClass('active');
                    nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
                }
            });
        });


        // Slider Carousel
        $('.slider_carousel').owlCarousel({
            items: 1,
            loop: true,
            center: true,
            margin: 0,
            padding: 0,
            autoplay: true,
            autoplayTimeout: 3500,
            responsiveClass: true,
            dots: false,
            nav: false,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        })


        // Testimonial Carousel
        $('.testimonial_carousel').owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            autoplay: true,
            dots: false,
            nav: false,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            center: false,
            responsiveClass: true,
        })

        // Testimonial Carousel 2
        $('.testimonial_carousel2').owlCarousel({
            items: 2,
            loop: true,
            margin: 0,
            autoplay: false,
            dots: false,
            nav: false,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            center: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 2
                },
                1200: {
                    items: 2
                }
            }
        })


        // Mixitup Portfolio
        $('#filters').on('click', 'li', function () {
            var filterValue = $(this).attr('data-filter');
        });
        $('#portfoliolist').mixItUp({
            selectors: {
                target: '.portfolio',
                filter: '.filter'
            },
            load: {
                filter: '*'
            }
        });


        // Popup Video
        $('.fancybox-media').fancybox({
            openEffect: 'none',
            closeEffect: 'none',
            helpers: {
                media: {}
            }
        });


        var $mainBox = $('.main-content');

        $('.sidebar_recent_posts a, .archive_list a, .post_block a').click(function (e) {
            var href = $(this).attr('href');
            e.preventDefault();
            ajaxReq(href);
        });

        function ajaxReq(href) {
            $mainBox.animate({opacity: 0.3}, 1000);
            jQuery(document).ready(function ($) {
                var data = {
                    action: 'refresh',
                    link: href
                };
                jQuery.post(myajax.ajxurl, data, function (response) {
                    $mainBox
                        .html(response)
                        .animate({opacity: 1}, 1500);
                });

            });
        }


        var $pageBox = $('.blog-list');

        $('.pagination-div a').click(function (e) {

            var href = $(this).attr('href');
            e.preventDefault();
            ajaxPagin(href);
        });

        function ajaxPagin(href) {
            $pageBox.animate({opacity: 0.3}, 1000);
            jQuery(document).ready(function ($) {
                var data = {
                    action: 'refreshBlog',
                    link: href
                };
                jQuery.post(myajax.ajxurl, data, function (response) {
                    $pageBox
                        .html(response)
                        .animate({opacity: 1}, 1500);
                });

            });
        }


        var $taxonomyBox = $('.blog-list');

        $('.category_list a').click(function (e) {

            var href = $(this).attr('href');
            e.preventDefault();
            ajaxTaxonomy(href);
        });

        function ajaxTaxonomy(href) {
            $taxonomyBox.animate({opacity: 0.3}, 1000);
            jQuery(document).ready(function ($) {
                var data = {
                    action: 'refreshTaxon',
                    link: href
                };
                jQuery.post(myajax.ajxurl, data, function (response) {
                    $taxonomyBox
                        .html(response)
                        .animate({opacity: 1}, 1500);
                });

            });
        }
    });

})(jQuery);
