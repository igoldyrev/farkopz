       $(function() {
     var offset = $("#leftmenu").offset();
     var topPadding = 48,
         bottomPadding = 120; //высота над которой остановится
     $(window).scroll(function() {
         if ($(window).scrollTop() > offset.top) {
             if ($(document).height() - bottomPadding > $(window).scrollTop() + $("#leftmenu").height()) $("#leftmenu").stop().animate({
                 marginTop: $(window).scrollTop() - offset.top + topPadding
             });
         } else {
             $("#leftmenu").stop().animate({
                 marginTop: 0
             });
         };
     });
  });