jQuery(function ($) {
    $(".mnpk-accordion h3").on("click", function () {
        $(this).next('.wp-block-group').slideToggle();
        $(this).toggleClass('opened');
    });
});