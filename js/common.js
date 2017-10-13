/**

 ** Contacts developer

 * @developer Barakial
 * @skype vega1eugene
 * @site Barakial.com

 */

$("#open_phone_header").on("click", function () {
    $(".top-header-content-phones").toggleClass("open", 800, "easeOutSine");
});

$(".top-header-phones").ready(function () {
    max = 3;
    i = 0;
    $(".top-header-phones li").each(function() {
        i += 1;
        if(i > max) {
            $(".arrow-open-phone").addClass("max-phone-button-on");
        }
    })
});


$('.bottom-header-nav li').hover(function () {
    clearTimeout($.data(this,'timer'));
    $('ul',this).stop(true,true).slideDown(400);
}, function () {
    $.data(this,'timer', setTimeout($.proxy(function() {
        $('ul',this).stop(true,true).slideUp(200);
    }, this), 100));
});


$(document).ready(function () {
    $('.banner').slick({
        dots: false,
        speed: 500,
        arrows: true,
        fade: true
    });

    $('.js-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            }
        }
    });

    $('.review-image').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: false,
            navigateByImgClick: false,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        }
    });

    $(".js-partners-carousel").owlCarousel({
        loop: false,
        margin: 0,
        items: 6,
        nav: true,
        navText: ["<span class='chevron-left top-left'></span>", "<span class='chevron-right top-right'></span>"],
        responsive: {
        /*0: {
            items: 1,
                nav: true
        },
        700: {
            items: 3,
                nav: false
        },
        600: {
            items: 2,
                nav: false
        },
        1000: {
            items: 4,
                nav: true,
                loop: false,
                margin: 20
        }*/
    }
});
});

$('.js-partners-carousel img, .footer-social-link li a img').hover(function() {
    var _this = this,
        images = _this.getAttribute('data').split(','),
        counter = 0;

    this.setAttribute('data-src', this.src);
        if(counter > images.length) {
            counter = 0;
        }
        if (images[counter] != undefined) {
            _this.src = images[counter];
        } else {
            _this.src = _this.getAttribute('data-src');
        }

        counter++;

}, function() {
    this.src = this.getAttribute('data-src');
    clearInterval(this.timer);
});
