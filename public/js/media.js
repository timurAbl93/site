$(document).ready(function($) {

    var textareaText = function(el) {
        var elText = el.val(),
            elW = el.width();
        if (el.parent().find('.hide-textarea').length == 0) {
            el.parent().append('<div class="hide-textarea"></div>');
            el.parent().find('.hide-textarea').css('width', elW - 1 + 'px');
        }
        var hideText = el.parent().find('.hide-textarea').height();
        el.parent().find('.hide-textarea').text(elText);
        el.css('height', hideText + 10 + 'px');
    };

    $('.textarea').bind('keypress', function() {
        textareaText($(this));
    });

    $('select').selectBox();
    $(".selectBox-dropdown-menu").mCustomScrollbar();

    $('input').each(function() {
        $(this).click(function(event) {
            var placeHolder = $(this).attr('placeholder');
            if (placeHolder) {
                $(this).attr('placeholder', '');
                $(this).attr('data-placeholder', placeHolder);
            }
        });
        $(this).blur(function(event) {
            var dataPlaceHolder = $(this).attr('data-placeholder');
            if (!$(this).val()) {
                $(this).attr('placeholder', dataPlaceHolder);
            }
        });
    });

    $('.bxslider').bxSlider({
        controls: true,
        mode: 'horizontal',
        minSlides: 2,
        maxSlides: 5,
        slideWidth: 391,
        slideMargin: 11,
        moveSlides: 1
    });

    $('#toTop').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 2000);
    });

    $('.pop-up-show, .mail').fancybox({
        loop: false,
        openEffect: 'fade',
        closeEffect: 'fade',
        aspectRadio: true,
        autoDimensions: true,
        fitToView: true,
        autoResize: true,
        autoScale: true,
        padding: 0,
        helpers: {
            media: {},
            title: {
                type: 'outside'
            },
            overlay: {
                opacity: 0.9
            } // overlay
        }
    });

    /*$('.menu a').click(function(event) {
        if (!$(this).parent().hasClass('active')) {
            $('.menu li').removeClass('active');
            $(this).parent().addClass('active');
            var hrefAttr = $(this).attr('href');
            var elTop = $(hrefAttr).offset().top;
            $('body').animate({
                scrollTop: elTop - 88
            }, 1000);
        }
        event.preventDefault();
    });*/

    
	$("nav a[href*=#]:not([href=#])").bind('click', function (event) {
		$('nav .active').removeClass('active');
		$(this).parent().addClass('active');
	  	var thisHash = this.hash;
	  	var targetOffset = $(thisHash).offset().top;
	  	$("html,body").stop().animate({
	    	scrollTop: targetOffset - 95
	  	}, 1100);
	  	location.hash = thisHash;
	  	event.preventDefault();
	});

    $(window).scroll(function() {
        var top = $(this).scrollTop();
        var portfolio = $('#portfolio').offset().top - 97;
        var advantages = $('#advantages').offset().top - 97;
        var workProcess = $('#work-process').offset().top - 97;
        var contact = $('#contact').offset().top - 97;

        if (portfolio < top && top < advantages) {
            $('nav .active').removeClass('active');
            $('.link-portfolio').addClass('active');
        } else if (advantages < top && top < workProcess) {
            $('nav .active').removeClass('active');
            $('.link-advantages').addClass('active');
        } else if (workProcess < top && top < contact) {
            $('nav .active').removeClass('active');
            $('.link-work-process').addClass('active');
        } else {
            $('nav .active').removeClass('active');
            $('.link-portfolio').addClass('active');
        }
    });
    
        $('.mainForm').on('submit',function(e){
            e.preventDefault();
            $.post('/',$(this).serializeArray(),function(res){
                $('.errors').html(res);
            });
        });

            

});
