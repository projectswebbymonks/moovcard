(function ($) {

    $('input, textarea').placeholder();
    $(".nav-menu").responsiveMenu();
    $(".owl-slider").owlCarousel({
        items: 1,
        autoplay: true,
        loop: true,
        animateOut: 'fadeOut'
    });

    $('.navbar').addClass("Scrollable");

    var scrollTopPosition;
    $("#trigger").click(function (e) {
        e.preventDefault();
        if ($("#navbar").hasClass("open")) {
            $("#navbar").removeClass("open");


        } else {
            // disable_scroll();
            //document.getElementById("navbar").removeEventListener('DOMMouseScroll', wheel, false);

            $("#navbar").slimScroll({
                width: 'auto',
                height: '100%',
                size: '10px',
                position: 'left',
                color: '#ffcc00',
                alwaysVisible: true,
                distance: '20px',
                railVisible: true,
                railColor: '#222',
                railOpacity: 1,
                wheelStep: 10,
                allowPageScroll: false,
                disableFadeOut: false
            });

            $("#navbar").addClass("open");
            if ($(window).width() < 768) {
                setTimeout(function () {
                    scrollTopPosition = $(window).scrollTop();
                    // $("body").css({"overflow": "hidden", "height": $(window).height()});
                }, 200);
            }
        }
    });

    $(".close-btn").click(function () {
        jQuery("#navbar").removeClass("open");
        if ($(window).width() < 768) {
            $("body").removeAttr("style");
            $(window).scrollTop(scrollTopPosition);
        }
        closeMobileMenu();
        //scrollOn();
    });

    $("html, body").click(function (e) {
        var container = $(".nav-left");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $("#navbar").removeClass("open");
            $("body").removeAttr("style");
            closeMobileMenu();
            //enable_scroll();


            if ($("#navbar").closest('.slimScrollDiv').length > 0) {
                $("#navbar").removeAttr('style');
                $("#navbar").closest('.slimScrollDiv').find('.slimScrollBar').remove();
                $("#navbar").closest('.slimScrollDiv').find('.slimScrollRail').remove();

                $("#navbar").unwrap();
            }


        }
    });

    menuFunction();
    $(window).resize(function () {
        menuFunction();
    });

    /*jQuery("html, body").click(function() {
     jQuery("#navbar").removeClass("open");
     })
     
     jQuery("#navbar, #trigger").click(function(e) {
     e.stopPropagation()
     })*/

    function menuFunction() {
        if ($(window).width() < 768 && $("#navbar").hasClass("open")) {
            $("body").css({"overflow": "hidden", "height": $(window).height()});
        } else {
            $("body").removeAttr("style");
        }
    }

    function closeMobileMenu() {
        var menuobj = $(".nav-menu");
        menuobj.find('.arrow').removeClass('up');
        menuobj.find('ul').stop(true, true).slideUp();
        menuobj.find('ul').removeClass("open");
    }

    /*
     function scrollOff() {
     // lock scroll position, but retain settings for later 
     var scrollPosition = [
     self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
     self.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop
     ];
     console.log(scrollPosition);
     var html = jQuery('body'); // it would make more sense to apply this to body, but IE7 won't have that 
     html.data('scroll-position', scrollPosition);
     html.data('previous-overflow', html.css('overflow'));
     html.css('overflow', 'hidden');
     window.scrollTo(scrollPosition[0], scrollPosition[1]);
     }
     function scrollOn() {
     // un-lock scroll position
     var html = jQuery('body');
     var scrollPosition = html.data('scroll-position');
     html.css('overflow', html.data('previous-overflow'));
     window.scrollTo(scrollPosition[0], scrollPosition[1]);
     }
     */

//    if (document.all && document.querySelector && !document.addEventListener) {
//        alert('IE8');
//    }
    
    if(window.ActiveXObject || "ActiveXObject" in window){  // IE Detector
        $('body').addClass('ie-browser');
    }

})(jQuery);
