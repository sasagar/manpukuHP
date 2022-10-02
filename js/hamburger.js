jQuery(function ($) {
    $(".hamburger").on("click", function () {
        $('.sp-menu').slideToggle();
    });
    $(".sp-menu .close").on("click", function () {
        $('.sp-menu').slideToggle();
    });

});