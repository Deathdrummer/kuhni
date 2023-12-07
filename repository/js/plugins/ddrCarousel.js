// карусель на основе slick слайдера
$.fn.ddrCarousel = function(o) {
	if (o == 'destroy') {
		$(this).slick('unslick');
		return false;
	}

	var selector = this,
		params,
		resizeTOut,
		visibleTOut,
		responsive = [],
		slidesToShow,
		s = $.extend({
			arrowLeft: false, // Нужно делать невидимыми. Создать класс visible при котором стрелка должна отображаться
			arrowRight: false, // Нужно делать невидимыми. Создать класс visible при котором стрелка должна отображаться
			autoplay: false,
			speed: 3000,
			loop: false,
			pauseOnHover: true,
			swipeWidth: 30,
			fade: false,
			dotsSelector: false, // контеинер дял точек навигации. Активный с классом active
			response: false, // [1, 'sm:2', 'md:2', 'lg:3', 'xl:4'], первый элемент, сколько изначально показывать слайдов. Далее, брейкпоинт:кол-во слайдов
			accessBrPoints: false, // {768: 992} брейкпоинты от и до - когда карусель будет активироваться
			onInit: false, // событие при инициализации
			beforeChange: false,
			unitHeight: false // выровнить высоту блоков карусели (в значение можнно передать брейкпоинт с которого будет активироваться функция)
		}, o);


	if (s.response) {
		slidesToShow = s.response[0];
		s.response.splice(0,1);
		$.each(s.response, function(k, item) {
			var i = item.split(':');
			var bpVal = $.isNumeric(i[0]) ? parseInt(i[0]) : breakpoints[i[0]];
			responsive.push({breakpoint: bpVal, settings: {slidesToShow: parseInt(i[1])}});
		});
	}


	function initArrows() {
		var allSlides = $(selector).find('.slick-slide').length,
			visibleSlides = $(selector).find('.slick-slide.slick-active').length;

		if (visibleSlides < allSlides) {
			$(s.arrowLeft).addClass('visible');
			$(s.arrowRight).addClass('visible');
		} else {
			$(s.arrowLeft).removeClass('visible');
			$(s.arrowRight).removeClass('visible');
		}
	}

	$(selector).on('init', function(slick) {
		if (s.arrowLeft && s.arrowRight) {
			initArrows();
		}
		if (typeof s.onInit == 'function') s.onInit(slick);
	});


	$(selector).on('setPosition', function() {
		clearTimeout(visibleTOut);
		visibleTOut = setTimeout(function() {
			if (!$(selector).hasClass('visible')) {
				$(selector).addClass('visible');
			}
		}, 200);

		clearTimeout(resizeTOut);
		resizeTOut = setTimeout(function() {
			initArrows();
		}, 50);
	});


	params = {
		infinite: s.loop,
		dots: false,
		autoplay: s.autoplay,
		autoplaySpeed: s.speed,
		pauseOnHover: s.pauseOnHover,
		fade: s.fade,
		speed: 200,
		draggable: true,
		touchThreshold: s.swipeWidth,
		//swipeToSlide: true,
		arrows: false,
		mobileFirst: true,
		slidesToScroll: 1,
		slidesToShow: slidesToShow || 1,
		responsive: responsive,
	};


	if (!s.loop) $(s.arrowLeft).addClass('disabled');

	$(s.arrowLeft).on(tapEvent, function() {
		$(selector).slick('slickPrev');
	});

	$(s.arrowRight).on(tapEvent, function() {
		$(selector).slick('slickNext');
	});


	if (s.dotsSelector) {
		var dotsItemClass = $(s.dotsSelector).attr('dots'),
			allSlides = $(selector).find('.slick-slide').length,
			visibleSlides = $(selector).find('.slick-slide.slick-active').length;

		for (var i = 0; i < allSlides; i++) {
			$(s.dotsSelector).append('<div class="'+dotsItemClass+''+(i == 0 ? ' active' : '')+'"></div>');
		}

		$(s.dotsSelector).children('*').on(tapEvent, function() {
			var thisIndex = $(this).index();
			$(selector).slick('slickGoTo', thisIndex);
		});

		function _setDots() {
			var visibleSlides = $(selector).find('.slick-slide.slick-active').length,
				hideDots = visibleSlides - 1;

			if (allSlides == visibleSlides) {
				$(s.dotsSelector).css('display', 'none');
			} else {
				$(s.dotsSelector).css('display', 'block');
				$(s.dotsSelector).children().css('display', 'inline-block');
				for (var i = allSlides; i > 0; i--) {
					if (hideDots > 0) {
						$(s.dotsSelector).children().eq(i-1).css('display', 'none');
						hideDots--;
					}
				}
			}

		};

		_setDots();

		$(selector).on('setPosition', function() {
			_setDots();
		});
	}


	function _setBlockMaxHeight(cancel) {
		if (cancel != undefined && cancel === false) {
			$(selector).find('.slick-track').children().css('min-height', 0);
		} else {
			var maxBlockHeight = 0;
			$(selector).find('.slick-track').children().each(function() {
				var thisH = $(this).outerHeight();
				if (thisH > maxBlockHeight) {
					maxBlockHeight = thisH;
				}
			});
			$(selector).find('.slick-track').children().css('min-height', maxBlockHeight);
		}
	}


	var firstInit = true;
	if (s.unitHeight) {
		$(selector).on('setPosition', function() {
			if (s.unitHeight == true || (typeof s.unitHeight == 'number' && $(window).width() >= s.unitHeight)) {
				if (firstInit) {
					setTimeout(function() {
						_setBlockMaxHeight();
						firstInit = false;
					}, 200);
				} else {
					_setBlockMaxHeight();
				}
			} else if ((typeof s.unitHeight == 'number' && $(window).width() < s.unitHeight)) {
				_setBlockMaxHeight(false);
			}
		});
	}


	$(selector).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
		if (!s.loop) {
			if (nextSlide == ($(selector).find('.slick-slide').length - $(selector).find('.slick-slide.slick-active').length)) {
				$(s.arrowRight).addClass('disabled');
			} else {
				$(s.arrowRight).removeClass('disabled');
			}

			if (nextSlide == 0) {
				$(s.arrowLeft).addClass('disabled');
			} else {
				$(s.arrowLeft).removeClass('disabled');
			}
		}

		if (s.dotsSelector) {
			$(s.dotsSelector).children('*').removeClass('active');
			$(s.dotsSelector).children('*').eq(nextSlide).addClass('active');
		}
		if (typeof s.beforeChange == 'function') s.beforeChange(currentSlide, nextSlide);
	});


	if (s.accessBrPoints) {
		var winW,
			initStat = false,
			edRTOut,
			firstInitSlick = true;

		function _enableDisable() {
			initStat = false,
			winW = $(window).width();
			$.each(s.accessBrPoints, function(from, to) {
				if (winW >= from && winW < to) {
					initStat = true;
					return true;
				}
			});
			if (initStat && !$(selector).hasClass('slick-initialized')) $(selector).slick(params);
			else if (!firstInitSlick && !initStat && $(selector).hasClass('slick-initialized')) $(selector).slick('unslick');
			else if (!initStat && firstInitSlick) $(selector).addClass('visible');
			firstInitSlick = false;
		}

		_enableDisable();

		$(window).resize(function() {
			clearTimeout(edRTOut);
			edRTOut = setTimeout(function() {
				_enableDisable();
			}, 50);
		});
	} else {
		$(selector).slick(params);
	}

};
