$(function() {
    $('.js-montazh__link').click(function()
    {
        $('.montazh-form').addClass('montazh-form--active');
    });

    $('.montazh-form__close').click(function()
    {
        $('.montazh-form').removeClass('montazh-form--active');
    });
});