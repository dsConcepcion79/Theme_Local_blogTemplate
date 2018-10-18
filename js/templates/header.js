$(function() {

	var scrolling;
	var lastScrollPos = 0;
	var delta = 5;
	var headerHeight = $('header').outerHeight();

	$(window).scroll(function(event) {

		if ( $(document).scrollTop() >= headerHeight ) {
			scrolling = true;
		}
	});

	setInterval(function() {
		if (scrolling) {
			hasScrolled();
			scrolling = false;
		}
	}, 250);

	function hasScrolled() {
		var headerTop = $(this).scrollTop();

		if ( Math.abs(lastScrollPos - headerTop) <= delta || $('header').hasClass('open') )  {
			return;
		}

		if ( headerTop > lastScrollPos && headerTop > headerHeight ) {
			$('header').removeClass('down').addClass('up');
		} else {
			if (headerTop + $(window).height() < $(document).height() ) {
				$('header').removeClass('up').addClass('down');
			}
		}

		lastScrollPos = headerTop;
	}

	if (isMobile) {
		$('.nav li.menu-item-has-children > a').on('click', function(e) {
			e.preventDefault();

			if ( $(this).parent().hasClass('open') ) {
				$(this).parent().removeClass('open');
				$(this).parent().children('.sub-menu').slideUp();
			} else {
				$('.nav li').removeClass('open');
				$(this).parent().addClass('open');
				$('.sub-menu').hide();
				$(this).parent().children('.sub-menu').slideDown();
			}
		});
	} else {
		var navHover;
		$('.nav li.menu-item-has-children').on('mouseenter', function(e) {
			e.preventDefault();

			if ( $(this).hasClass('open') ) {
				return;
			} else {
				$('.nav li').removeClass('open');
				$(this).addClass('open');
				$('.sub-menu').hide();
				$(this).children('.sub-menu').slideDown();
			}

			clearTimeout(navHover);
		}).on('mouseleave', function() {
			navHover = setTimeout(function() {
				$('.sub-menu').slideUp();
				$('.nav li').removeClass('open');
			}, 1000);
		});

		$('.nav li.menu-item-has-children, .sub-menu').on('mouseenter', function() {
			clearTimeout(navHover);
		});
	}

	// Open/Close the Mobile Navigation.
	$('.mobile-btn').on('click', function() {
		$('body').toggleClass('no-overflow');
		$('header').toggleClass('open');
	});

	$('.search-btn').on('click', function() {
		$('.search').toggleClass('visible');

		if ( $('header').hasClass('open') ) {
			$('body').removeClass('no-overflow');
			$('header').removeClass('open');
		}
	});

	$('.search-close').on('click', function() {
		$('.search').removeClass('visible');
	});

    $('.team-toggle').on('click', function() {
        var $this = $(this);
        $this.parent().toggleClass('closed');
    });

    var invisibleDiv = $('#invisible-images');
    if (invisibleDiv) {
        setInterval(function() {
            var boxes = $('.team-homepage .box-img');
            var $hiddenImages = invisibleDiv.find('img');
            var randomIndex = Math.round(Math.random() * 4);
            var randomIndex2 = Math.round(Math.random() * (($hiddenImages.length - 1)));
            var $box = $(boxes[randomIndex]);
            var swapImage = $box.find('img');
			swapImage.animate({opacity: 0},
				{
					duration: 1000,
					complete: function() {
						invisibleDiv.append(swapImage);
					}
            	}
			);
			setTimeout(function(){
                var $img = $($hiddenImages[randomIndex2]);
                $img.css({opacity: 0});
                $box.append($img);
                $img.stop().animate({opacity: 1}, 1000);
            }, 600)

        }, 3000);
	}
});
