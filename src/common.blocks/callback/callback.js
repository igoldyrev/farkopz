$(function() {
    $('.header__link--callback').click(function()
    {
        $('.callback').addClass('callback--active');
        $('.callback__overlay').addClass('callback__overlay--active');
    });

    $('.callback__close').click(function ()
    {
        $('.callback').removeClass('callback--active');
        $('.callback__overlay').removeClass('callback__overlay--active');
    });

    $('.callback__overlay').click(function ()
    {
        $('.callback').removeClass('callback--active');
        $('.callback__overlay').removeClass('callback__overlay--active');
    });
});