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
});
