//jQuery to collapse the navbar on scroll
$(window).scroll(function () {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".fd-blue").addClass("top-nav-collapse2");
        $("#img-menu1").addClass("img-scroll1");
        $("#img-menu2").addClass("img-scroll2");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $("#img-menu1").removeClass("img-scroll1");
        $("#img-menu2").removeClass("img-scroll2");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function () {
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
