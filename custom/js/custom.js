    $(document).ready(function () {

    	 $(document).scroll(function () {
        var st = $(this).scrollTop();
        if (st > 70) {
//           alert(st);
        }
    });
        //This is the nav-bar icon click event registration
        // -------------------------------------------------------------------------------
        $('.mynav .mynav-btn').click(function () {
            if ($(this).siblings('.mynav-links').width() > 20) {
                $(this).siblings('.mynav-links').css({'width': '0', 'transition': '.5s'});
            } else {
                $(this).siblings('.mynav-links').css({'width': '70%', 'transition': '.5s'});
            }
        });
         if ($(window).width() > 768) {
            	 doOnLarge();
                }
            //does this in a smaller screen. Responsive Css.
            // -------------------------------------------------------------------------------
            else {
                doOnSmall();
            }
        $(window).on('resize', function () {
            //on a large screen
            if ($(window).width() > 768) {
            	 doOnLarge();
                }
            //does this in a smaller screen. Responsive Css.
            // -------------------------------------------------------------------------------
            else {
                doOnSmall();
            }
        });
    });

    function doOnLarge(){
    	$('.mynav-links').css('width', '70%');
		 $('.mynav-links .menu-options').css({'opacity':'0','height':'auto'});
		 $('.mynav-links .menu-options').css({'transition':'0.5s'});
		 $('.mynav-links .menu-options-multiple').css({'opacity':'0','height':'auto'});
		 $('.mynav-links .menu-options-multiple').css({'transition':'0.5s'});
                // This happens on the first navbar menu option
                // -------------------------------------------------------------------------------
                $('#linksA').mouseenter(function () {
                    $('.mynav .menu-options-multiple').css({'opacity': '1', 'z-index': '5'});
                    $(this).css({'border-top-color': 'red'});
                });
                $('.menu-options-multiple').mouseenter(function () {
                    if ($('.mynav .menu-options-multiple').css('opacity') === '1') {
                        $('.mynav .menu-options-multiple').css({'opacity': '1', 'z-index': '5'});
                        $('#linksA').css({'border-top-color': 'red'});
                    }
                });
                $('#linksA').mouseleave(function () {
                    $('.mynav .menu-options-multiple').css({'opacity': '0', 'z-index': '1'});
                    $(this).css({'border-top-color': 'transparent'});
                });
                $('.menu-options-multiple').mouseleave(function () {
                    $('.mynav .menu-options-multiple').css('opacity', '0');
                    $('#linksA').css({'border-top-color': 'transparent'});
                });
                // -------------------------------------------------------------------------------

                //This happens on the second navbar menu options
                // -------------------------------------------------------------------------------

                $('#linksB').mouseenter(function () {
                    $('#linksB').siblings('.menu-options').css({'opacity': '1', 'z-index': '5'});
                    $('#linksB').css({'border-top-color': 'red'});
                });
                $('#linksB').siblings('.menu-options').mouseenter(function () {
                    if ($(this).css('opacity') === '1') {
                        $(this).css({'opacity': '1', 'z-index': '5'});
                        $('#linksB').css({'border-top-color': 'red'});
                    }
                });
                $('#linksB').mouseleave(function () {
                    $('#linksB').siblings('.menu-options').css({'opacity': '0', 'z-index': '1'});
                    $(this).css({'border-top-color': 'transparent'});
                });
                $('#linksB').siblings('.menu-options').mouseleave(function () {
                    $(this).css({'opacity': '0', 'z-index': '1'});
                    $('#linksB').css({'border-top-color': 'transparent'});
                });
                // -------------------------------------------------------------------------------

                //This happens on the third navbar menu options
                // -------------------------------------------------------------------------------

                $('#linksC').mouseenter(function () {
                    $('#linksC').siblings('.menu-options').css({'opacity': '1', 'z-index': '5'});
                    $('#linksC').css({'border-top-color': 'red'});
                });
                $('#linksC').siblings('.menu-options').mouseenter(function () {
                    if ($(this).css('opacity') === '1') {
                        $(this).css({'opacity': '1', 'z-index': '5'});
                        $('#linksC').css({'border-top-color': 'red'});
                    }
                });
                $('#linksC').mouseleave(function () {
                    $('#linksC').siblings('.menu-options').css({'opacity': '0', 'z-index': '1'});
                    $(this).css({'border-top-color': 'transparent'});
                });
                $('#linksC').siblings('.menu-options').mouseleave(function () {
                    $(this).css({'opacity': '0', 'z-index': '1'});
                    $('#linksC').css({'border-top-color': 'transparent'});
                });
                // -------------------------------------------------------------------------------

                //This happens on the fourth navbar menu options
                // -------------------------------------------------------------------------------

                $('#linksD').mouseenter(function () {
                    $('#linksD').siblings('.menu-options').css({'opacity': '1', 'z-index': '5'});
                    $('#linksD').css({'border-top-color': 'red'});
                });
                $('#linksD').siblings('.menu-options').mouseenter(function () {
                    if ($(this).css('opacity') === '1') {
                        $(this).css({'opacity': '1', 'z-index': '5'});
                        $('#linksD').css({'border-top-color': 'red'});
                    }
                });
                $('#linksD').mouseleave(function () {
                    $('#linksD').siblings('.menu-options').css({'opacity': '0', 'z-index': '1'});
                    $(this).css({'border-top-color': 'transparent'});
                });
                $('#linksD').siblings('.menu-options').mouseleave(function () {
                    $(this).css({'opacity': '0', 'z-index': '1'});
                    $('#linksD').css({'border-top-color': 'transparent'});
                });
                // -------------------------------------------------------------------------------

                //This happens on the fourth navbar menu options
                // -------------------------------------------------------------------------------

                $('#linksE').mouseenter(function () {
                    $('#linksE').siblings('.menu-options').css({'opacity': '1', 'z-index': '5'});
                    $('#linksE').css({'border-top-color': 'red'});
                });
                $('#linksE').siblings('.menu-options').mouseenter(function () {
                    if ($(this).css('opacity') === '1') {
                        $(this).css({'opacity': '1', 'z-index': '5'});
                        $('#linksE').css({'border-top-color': 'red'});
                    }
                });
                $('#linksE').mouseleave(function () {
                    $('#linksE').siblings('.menu-options').css({'opacity': '0', 'z-index': '1'});
                    $(this).css({'border-top-color': 'transparent'});
                });
                $('#linksE').siblings('.menu-options').mouseleave(function () {
                    $(this).css({'opacity': '0', 'z-index': '1'});
                    $('#linksE').css({'border-top-color': 'transparent'});
                });
                // -------------------------------------------------------------------------------
    }

    function doOnSmall(){
                $('.mynav-links').css({'width': '0', 'transition': '0s'});
                $('.mynav-links .menu-options').css({'opacity': '1', 'transition': '0s','height':'0'});
                $('.mynav-links .menu-options-multiple').css({'opacity': '1', 'transition': '0s','height':'0'});

                $('#linksA').click(function (event) {
                    event.preventDefault();
                   if($(window).width()>768){

                    } else {
                    	 if($('.menu-options-multiple').height() > 50){
                    	$(this).children('.mynav-caret').css({'transition':'.5s','transform':'rotateZ(0Deg)'});
                        $('.menu-options-multiple').css({'height': '0', 'transition': '.5s'});
                    } else {
                    	$(this).children('.mynav-caret').css({'transition':'.5s','transform':'rotateZ(180Deg)'});
                        $('.menu-options-multiple').css({'height': '664px', 'transition': '.5s'});
                    }
                    }
                });
                $('#linksB').click(function (event) {
                    event.preventDefault();
                   if($(window).width()>768){

                   } else {
                   	 if($(this).siblings('.menu-options').height() > 50){
                    	$(this).children('.mynav-caret').css({'transition':'.5s','transform':'rotateZ(0Deg)'});
                        $(this).siblings('.menu-options').css({'height': '0', 'transition': '.5s'});
                    } else {
                    	$(this).children('.mynav-caret').css({'transition':'.5s','transform':'rotateZ(180Deg)'});
                        $(this).siblings('.menu-options').css({'height': '250px', 'transition': '.5s'});
                    }
                   }
                });
                $('#linksC').click(function (event) {
                    event.preventDefault();
                  if($(window).width()>768){


                    } else {
                    	if($(this).siblings('.menu-options').height() > 50){
                    	$(this).children('.mynav-caret').css({'transition':'.5s','transform':'rotateZ(0Deg)'});
                        $(this).siblings('.menu-options').css({'height': '0', 'transition': '.5s'});
                    } else {
                    	$(this).children('.mynav-caret').css({'transition':'.5s','transform':'rotateZ(180Deg)'});
                        $(this).siblings('.menu-options').css({'height': '250px', 'transition': '.5s'});
                    }
                    }
                });
    }