$(function() {
    $('.js-main__link').click(function()
    {
        $('.zakaz-form').addClass('zakaz-form--active');
    });

    $('.zakaz-form__close').click(function()
    {
        $('.zakaz-form').removeClass('zakaz-form--active');
    });
});