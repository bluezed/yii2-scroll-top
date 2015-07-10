/**
 * @link      https://github.com/bluezed/yii2-scroll-top
 * @copyright Copyright (c) 2015 Thomas Geppert
 * @license   https://github.com/bluezed/yii2-scroll-top/blob/master/LICENSE
 */

$(function(){  
    
    var btnScroller = $("#btn-top-scroller");

    $(document).on("scroll", function() {
        var top = $("html, body").offset().top;
        if ($(window).scrollTop() > top+150) {
            btnScroller.fadeIn();
        } else {
            btnScroller.fadeOut();
        }
    });

    btnScroller.on("click", function(e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 300);
    });
    
});