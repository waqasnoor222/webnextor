
$(".testi").slick({
    dots: !1,
    arrows: !1,
    infinite: !0,
    speed: 300,
    autoplay: !0,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        { breakpoint: 1024, settings: { slidesToShow: 4, slidesToScroll: 1, infinite: !0, dots: !0 } },
        { breakpoint: 600, settings: { slidesToShow: 2, slidesToScroll: 2 } },
        { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
    ],
}),
    $(".log").slick({
        dots: !1,
        arrows: !1,
        infinite: !0,
        speed: 300,
        autoplay: !0,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            { breakpoint: 1024, settings: { slidesToShow: 4, slidesToScroll: 1, infinite: !0, dots: !0 } },
            { breakpoint: 600, settings: { slidesToShow: 2, slidesToScroll: 2 } },
            { breakpoint: 480, settings: { slidesToShow: 2, slidesToScroll: 1 } },
        ],
    }),
    $(".newslider").slick({
        dots: !1,
        arrows: !0,
        infinite: !0,
        speed: 300,
        autoplay: !0,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            { breakpoint: 1024, settings: { slidesToShow: 4, slidesToScroll: 1, infinite: !0, dots: !0 } },
            { breakpoint: 600, settings: { slidesToShow: 2, slidesToScroll: 2 } },
            { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
        ],
    }),
    $(".portnew").slick({
        dots: !1,
        arrows: !0,
        infinite: !0,
        speed: 300,
        autoplay: !0,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            { breakpoint: 1024, settings: { slidesToShow: 4, slidesToScroll: 1, infinite: !0, dots: !0 } },
            { breakpoint: 600, settings: { slidesToShow: 2, slidesToScroll: 2 } },
            { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
        ],
    }),
    $(function () {
        new WOW().init();
    }),
    $(function () {
        $("#menu").slicknav();
    }),
    $("body").on("click",'[data-targetit]', function () {
        $(this).siblings().removeClass("current"), $(this).addClass("current");
        var s = $(this).data("targetit");
        $("." + s)
            .siblings('[class^="tabs"]')
            .removeClass("current"),
            $("." + s).addClass("current");
    });




$('.mobile-nav-btn').click(function() {

    $('.mobile-nav-btn, .mobile-nav, .app-container').toggleClass('active');

});





$('.firstlevel li a').click(function() {

    if ($(this).hasClass('active')) {

        $(this).removeClass('active');

        $(this).siblings('ul').slideUp();

    } else {

        $('.firstlevel li a').removeClass('active');

        $(this).addClass('active');

        $('.dropdown').slideUp();

        $(this).siblings('ul').slideDown();

    }

});



$('.mainnav > li > a').click(function() {

    if ($(this).hasClass('active')) {

        $(this).removeClass('active');

        $(this).parents('li').children('.firstlevel').slideUp();

    } else {

        $(this).addClass('active');

        $(this).parents('li').children('.firstlevel').slideDown();

        $(this).parents('li').siblings('li').children('a').removeClass('active');

        $(this).parents('li').siblings('li').children('.firstlevel').slideUp();

    }

});