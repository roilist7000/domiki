$(document).ready(function () {
    $('[type="tel"]').inputmask("(999) 999-99-99");
    $('.owl-new-products').owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        navText: ["<i class=\"fa fa-caret-left\"></i>", "<i class=\"fa fa-caret-right\"></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    $('.owl-montag-banner').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 800
    });
    $('.chosen-select').chosen({
        "width": "100%"
    });
    $(document).on('click', '[data-toggle="minus"]', function () {
        var input = $(this).parent().find('input');
        if (input.val() > 1) {
            input.val(parseInt(input.val()) - 1);
        }
        return false;
    });

    $(document).on('click', '[data-toggle="plus"]', function () {
        var input = $(this).parent().find('input');
        input.val(parseInt(input.val()) + 1);
        return false;
    });
    $(document).on('click', '[data-toggle="select"]', function () {
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
        $(this).parents('.form-group').find('[data-toggle="dropdown"]').find('.value').text($(this).text());
        $(this).parents('.btn-group').removeClass('open');
        return false;
    });
$('.sub').click(function () {
    console.log($(this).hasClass('.act'));
    if($(this).hasClass('act')==false){
        $('.menu-cont').addClass('active');
        $(this).addClass('act');

    } else {
        $('.menu-cont').removeClass('active');
        $(this).removeClass('act');
    }
});
});



(function($) {

    'use strict';

    /*
     Thumb Gallery
     */
    var $thumbGalleryDetail1 = $('#thumbGalleryDetail'),
        $thumbGalleryThumbs1 = $('#thumbGalleryThumbs'),
        flag = false,
        duration = 300;

    $thumbGalleryDetail1
        .owlCarousel({
            items: 1,
            margin: 10,
            nav: true,
            dots: false,
            loop: false,
            navText: []
        })
        .on('changed.owl.carousel', function(e) {
            if (!flag) {
                flag = true;
                $thumbGalleryThumbs1.trigger('to.owl.carousel', [e.item.index-1, duration, true]);
                flag = false;
            }
        });

    $thumbGalleryThumbs1
        .owlCarousel({
            margin: 15,
            items: 3,
            nav: false,
            center: false,
            dots: false
        })
        .on('click', '.owl-item', function() {
            $thumbGalleryDetail1.trigger('to.owl.carousel', [$(this).index(), duration, true]);
            $(this).children().addClass('active-item');
            $(this).siblings().children().removeClass('active-item');
        })
        .on('changed.owl.carousel', function(e) {
            if (!flag) {
                flag = true;
                $thumbGalleryDetail1.trigger('to.owl.carousel', [e.item.index, duration, true]);
                flag = false;
            }
        });

    /*
     Thumb Gallery 2
     */
    var $thumbGalleryDetail2 = $('#thumbGalleryDetail2'),
        $thumbGalleryThumbs2 = $('#thumbGalleryThumbs2'),
        flag = false,
        duration = 300;

    $thumbGalleryDetail2
        .owlCarousel({
            items: 1,
            margin: 10,
            nav: false,
            dots: false
        })
        .on('changed.owl.carousel', function(e) {
            if (!flag) {
                flag = true;
                $thumbGalleryThumbs2.trigger('to.owl.carousel', [e.item.index, duration, true]);
                flag = false;
            }
        });

    $thumbGalleryThumbs2
        .owlCarousel({
            margin: 15,
            items: 3,
            nav: false,
            center: true,
            dots: false
        })
        .on('click', '.owl-item', function() {
            $thumbGalleryDetail2.trigger('to.owl.carousel', [$(this).index(), duration, true]);

        })
        .on('changed.owl.carousel', function(e) {
            if (!flag) {
                flag = true;
                $thumbGalleryDetail2.trigger('to.owl.carousel', [e.item.index, duration, true]);
                flag = false;
            }
        });

}).apply(this, [jQuery]);