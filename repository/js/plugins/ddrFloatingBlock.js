
/*Добавить css стили
#модуль
	z-index: 998
	position: sticky
*/
$.fn.ddrFloatingBlock = function(space) {

	let sp = space || 0,
		block = this,
		setParams,
		blockWidth = 0,
		parentWidth = 0,
		blockHeight = 0,
		blockPos = 0,
		winWidth = 0,
		winHeight = 0,
		scrTop,
		startScrSpace,
		scrPos,
		scrSpace;


	(setParams = function() {
		blockWidth = $(block).width();
		blockHeight = $(block).outerHeight();
		blockPos = $(block).offset().top;
		parentWidth = $(block).parent().width();
		winWidth = $(window).width();
		winHeight = $(window).height();
		startScrSpace = -(blockHeight - winHeight + sp);
		scrPos = $(window).scrollTop();
		scrSpace = -(blockHeight - winHeight + sp);
	})();


	let rsTOut;
	$(window).resize(function() {
		clearTimeout(rsTOut);
		rsTOut = setTimeout(function() {
			setParams();
		}, 100);
	});


	$(block).css('top', scrSpace);


	$(window).scroll(function() {
		scrTop = $(window).scrollTop();
		if (scrPos < scrTop) { // прокрутка вниз
			let posDiff = (scrPos - scrTop); // отрицательное
			let shift = scrSpace + posDiff;
			scrSpace = shift > startScrSpace ? shift : startScrSpace;
			$(block).css('top', scrSpace);

		} else { // прокрутка вверх
			let posDiff = (scrPos - scrTop); // положительное
			let shift = scrSpace + posDiff;
			scrSpace = shift < sp ? shift : sp;
			$(block).css('top', scrSpace);
		}

		scrPos = scrTop;
	});
}
