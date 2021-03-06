$(function () {

	function getWindowWidth() {
		var windowWidth = 0;
		if (typeof (window.innerWidth) == 'number') {
			windowWidth = window.innerWidth;
		} else {
			if (document.documentElement && document.documentElement.clientWidth) {
				windowWidth = document.documentElement.clientWidth;
			} else {

				if (document.body && document.body.clientWidth) {
					windowWidth = document.body.clientWidth;
				}
			}
		}
		return windowWidth;
	}

	if (isMobile) {
		if ( getWindowWidth() >= 767 && getWindowWidth() <= 1024 ) {

			$('.facts-slider li').on('click', function() {

				var el = $(this);
				var text = $(this).find('.slide-text');
				if ( !el.hasClass('active') ) {

					TweenMax.to( el, 0.4, {
						width: '46%',
						ease: Expo.easeInOut,
						className: 'active'
					});

					text.delay(200).slideDown();

					TweenMax.to( el.siblings(), 0.4, {
						width: '16%',
						ease: Expo.easeInOut,
						className: ''
					});

					el.siblings().find('.slide-text').slideUp();
				}
			});
		} else {

			$('.facts-slider').slick({
				centerMode: true,
				arrows: false,
				slidesToShow: 1,
				dots: true
			});
		}
	} else {

		var hoverTime;
		$('.facts-slider li').on('mouseenter', function() {

			var el = $(this);
			var text = $(this).find('.slide-text');
			hoverTime = setTimeout(function() {
				if ( !el.hasClass('active') ) {

					TweenMax.to( el, 0.4, {
						width: '46%',
						ease: Expo.easeInOut,
						className: 'active'
					});

					text.delay(200).slideDown();

					TweenMax.to( el.siblings(), 0.4, {
						width: '16%',
						ease: Expo.easeInOut,
						className: ''
					});

					el.siblings().find('.slide-text').slideUp();
				}
			}, 300);
		}).on('mouseleave', function() {
			clearTimeout(hoverTime);
		});
	}

	$('.image-gallery .images').slick({
		centerMode: true,
		centerPadding: '20%',
		slidesToShow: 1,
		dots: true,
		arrows: true,
		responsive: [
			{
				breakpoint: 767,
				settings: {
					centerPadding: '10%',
				}
			}
		]
	});

	$('.wp-block-gallery').each(function(i, el) {
		$('.thumbnail-container').clone().appendTo(el).show();
	});

	$('.wp-block-gallery').on('click', function() {
		$('body').addClass('no-overflow');
		var container = this;

		$('.article-gallery .images').empty();

		$('.blocks-gallery-image', this).clone().appendTo('.article-gallery .images');
		$('.article-gallery').fadeIn();

		$('.article-gallery .images').slick({
			centerMode: true,
			centerMode: true,
			centerPadding: '20%',
			slidesToShow: 1,
			dots: true,
			arrows: true,
			responsive: [
				{
					breakpoint: 767,
					settings: {
						centerPadding: '10%',
					}
				}
			]
		});
	});

	$('.gallery-thumbnail').on('click', function() {
		$('body').addClass('no-overflow');
		$('.article-gallery').fadeIn();

		$('.article-gallery .images').slick({
			centerMode: true,
			centerMode: true,
			centerPadding: '20%',
			slidesToShow: 1,
			dots: true,
			arrows: true,
			responsive: [
				{
					breakpoint: 767,
					settings: {
						centerPadding: '10%',
					}
				}
			]
		});
	});

	function hideGallery() {
		$('.article-gallery').fadeOut();

		setTimeout(function() {
			$('.article-gallery .images').slick('unslick');
		}, 300);

		$('body').removeClass('no-overflow');
	}

	$('.article-gallery .overlay').on('click', function() {
		hideGallery();
	});

	$(document).keyup(function (e) {
		if (e.keyCode == 27) {

			if ( $('.article-gallery').length > 0 ) {
				hideGallery();
			}
		}
	});

	function listShow(){
		var opened = $(this).hasClass('less');
		$(this).text(opened ? 'View More' : 'View Less').toggleClass('less', !opened);
		$(this).siblings('li.toggleable').slideToggle();
	}

	if (isMobile) {

		$('ul.brand-list').each(function() {

			if ( $(this).find('li').length > 6) {
				$('li', this).eq(5).nextAll().hide().addClass('toggleable');
				$(this).append('<li class="more">View More</li>');
			}
			$(this).on('click','.more', listShow);
		});
	}

	$('.col.stories ul, .col.media ul').each(function() {

		if ( $(this).find('li').length > 5) {
			$('li', this).eq(4).nextAll().hide().addClass('toggleable');
			$(this).append('<li class="more">View More</li>');
		}
		$(this).on('click','.more', listShow);
	});

	$('.quote, .wp-block-quote').each(function() {
		$(this).waypoint(function() {
			$(this.element).addClass('visible');
		},
		{
			offset: '50%',
			triggerOnce: true
		});
	});

	$('.video-poster').on('click', function(e) {
		$(this).fadeOut();

		iframe = $(this).siblings('iframe')[0];
		iframe.contentWindow.postMessage(JSON.stringify({
			"event": "command",
			"func": 'playVideo',
			"args": [],
			"id": $(iframe).attr('id'),
		}), "*");
	});

	$('.wp-block-rain-youtube-video').each(function(i, el) {
		var play = $('.play', el);
		$('.play-icon-container').clone().prependTo(play).show();
	});

	$('.contact-form select').selectmenu();

	$('.contact-form select').on('selectmenuchange', function() {
		$(this).valid();
	});

	$('form').each(function() {
		$(this).validate();
	});

	$('.fade-container .article-row').each(function() {
		$(this).waypoint(function() {
			$(this.element).addClass('visible');
		},
		{
			offset: '80%',
			triggerOnce: true
		});
	});

	$('.timeline-item-container').slick({
		dots: false,
		centerMode: true,
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 3,
		responsive: [
			{
				breakpoint: 767,
				settings: {
					arrows: false,
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]
	});

	$(window).on('scroll', function() {
		$('.bg-parallax').each( function() {
			var windowYOffset = $(window).scrollTop(),
					elBackgrounPos = "50% " + (-windowYOffset * 0.5) + "px";

			$(this).css('backgroundPosition', elBackgrounPos);

		});
	});


	$('.stats').each(function() {

		$(this).waypoint(function() {

			$('.count').each(function() {

				$(this).prop('counter', 0).animate({
						counter: $(this).data('number')
					},
					{
						duration: 2000,
						easing: 'linear',
						step: function(now) {

						$(this).text(Math.ceil(now).toLocaleString('en'));
					}
				});
			});
		},
		{
			offset: '80%',
			triggerOnce: true
		});
	});
});

var isMobile = false;
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
		|| /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;
