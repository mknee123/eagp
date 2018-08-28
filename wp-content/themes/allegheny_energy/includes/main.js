jQuery(document).ready(function($) {
	//needed for menu
	$('.wr-menu-down').click( function() {
    $("ul.sub-menu").toggleClass("active");
} );
	
	if ($('body.page-template-home-page').length) {
		// Scrolling animations!!
		// initiate ScrollMagic
		var controller = new ScrollMagic.Controller();
		// create scene for News area
		var arrowScene = new ScrollMagic.Scene({ triggerElement: '#home-header' })
			.on('enter', function() {
				$('#icons .invisible').each(function(index) {
					$(this).css('visibility', 'visible').addClass('animated bounceIn delay' + index);
				});
			})
			.addTo(controller);
			
		// create scenes for News area
		var newsImgScene = new ScrollMagic.Scene({ triggerElement: '#news-title' })
			.on('enter', function() {
				$('.news-post .invisible').css('visibility', 'visible').addClass('animated fadeInUp');
			})
			.addTo(controller);
		}
	
	// Disables smooth-scrolling in IE9+
	if(navigator.userAgent.match(/Trident\/7\./)) {
		$('body').on("mousewheel", function () {
			event.preventDefault();
			var wd = event.wheelDelta;
			var csp = window.pageYOffset;
			window.scrollTo(0, csp - wd);
		});
	}
});





//add class wr-menu-down to li tag with children
$.each($('.menu-item'), function (index, value) {
    if ($(this).children('ul').length > 0) {
        $(this).prepend($('<span class="wr-menu-down"></span>'));
    }
});

	 //Parallax effect on hero images
	$(window).scroll(function() {
		$('.page-image img').css('top', ($(window).scrollTop() / 3) + 'px');
	});

	// Disables smooth-scrolling in IE9+
	if(navigator.userAgent.match(/Trident\/7\./)) {
		$('body').on("mousewheel", function () {
			event.preventDefault();
			var wd = event.wheelDelta;
			var csp = window.pageYOffset;
			window.scrollTo(0, csp - wd);
		});
	}
	//Not sure this is really needed??
	function findBootstrapEnvironment() {
        var envs = ['xs', 'sm', 'md', 'lg'];
    
        var $el = $('<div>');
        $el.appendTo($('body'));
    
        for (var i = envs.length - 1; i >= 0; i--) {
            var env = envs[i];
    
            $el.addClass('hidden-'+env);
            if ($el.is(':hidden')) {
                $el.remove();
                return env;
            }
        }
    }
	
	//Wrap centered images in a new figure element. 
	$('img.aligncenter').wrap('<figure class="centered-image"></figure>');

$(function() {
      // Only set the timer if you have a hash
      if(window.location.hash) {
        setTimeout(delayedFragmentTargetOffset, 500);
      }
  });

var sliderHeight2 = document.getElementsByClassName('navbar').offsetHeight;


function delayedFragmentTargetOffset(){
      var offset = $(':target').offset();
      if(offset){
          var scrollto = offset.top - sliderHeight2; // minus fixed header height
          $('html, body').animate({scrollTop:scrollto}, 0);
          $(':target').highlight();
      }
  };


//makes the logo appear in the top on scrolling
(function($) {          
    $(document).ready(function(){                    
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 400) {
                $('#logoScroll').fadeIn(500);
            } else {
                $('#logoScroll').fadeOut(500);
            }
        });
    });
})(jQuery);

(function($) {          
    $(document).ready(function(){                    
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 400) {
                $('#logoScroll2').fadeOut(500);
            } else {
                $('#logoScroll2').fadeIn(500);
            }
        });
    });
})(jQuery);

(function($) {          
    $(document).ready(function(){                    
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 1200) {
                $('#carouselH').fadeOut(800);
            } else {
                $('#carouselH').fadeIn(800);
            }
        });
    });
})(jQuery);
