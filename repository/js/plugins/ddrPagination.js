/*
	Постраничная навигация.
		Для начала, необходимо вывести пагинацию, затем, к ней подключить данный плагин
*/
;$.fn.ddrPagination = function(options) {
	
	let container = this,
		ops = $.extend({
			pItems: 'pagination', // Атрибут, присваеваемый элементам пагинации
			pRows: 'paginationrule', // Атрибут, присваеваемый стрелкам со значениями:  prev next start end - назад, вперед, в начало, в конец соответственно
			itemsAround: false, // Объект {брейкпоинт:количество}. Количество видимых элементов пагинации вокруг активного элемента. Если, например, 2 - то всего будет открыто 5 элементов.
			storageId: 'ddrPagination'+random(0,999), // Идентификатор для localstorege чтобы запоминать последнюю активную страницу
			activeClass: false, // класс, присваеваемый активному элементу пагинации
			hiddenClass: false, // класс, присваеваемый скрытым лементам пагинации
			onClickDisabled: 'disabled', // Атрибут, который присваивается при клике на навигацию. Убирается при срабатывании callback функции onChangePage 
			onChangePage: false // ID станицы и коллбэк
		}, options),
		allCount = $(container).find('['+ops.pItems+']').length,
		ia = getCurrentBreakPoint(ops.itemsAround),
		startIndex = 0,
		gt = (startIndex + (ia-1) + ((ia+1) - startIndex > 0 ? ((ia+1) - startIndex) : 0)),
		lt = (startIndex - ((ia*2+1) + (startIndex - allCount > -ia ? startIndex - allCount : -ia))),
		resizeTOut;
		
	if (startIndex < (allCount - ia)) $(container).find('['+ops.pItems+']:gt('+gt+')').addClass(ops.hiddenClass);
	if (startIndex > (ia+1)) $(container).find('['+ops.pItems+']:lt('+lt+')').addClass(ops.hiddenClass);
	
	
	//------------------------------------------------------------------- Клик на цифру страницы
	$(container).not('[disabled]').on(tapEvent, '['+ops.pItems+']:not(.'+ops.activeClass+')', function() {
		$(container).setAttrib('disabled');
		
		let thisItem = this,
			index = $(thisItem).index() - 1,
			activeItem = $('['+ops.pItems+'].'+ops.activeClass),
			page = $(thisItem).attr(ops.pItems),
			gt = (index + (ia-1) + ((ia+1) - index > 0 ? ((ia+1) - index) : 0)),
			lt = (index - ((ia*2+1) + (index - allCount > -ia ? index - allCount : -ia)));
		
		
		localStorage.setItem(ops.storageId, $(thisItem).index() - 2);

		$('['+ops.pItems+'].'+ops.activeClass).removeClass(ops.activeClass);
		$(thisItem).addClass(ops.activeClass);
		
		$(container).find('['+ops.pItems+'].'+ops.hiddenClass).removeClass(ops.hiddenClass);
		
		
		if (index < (allCount - ia)) $(container).find('['+ops.pItems+']:gt('+gt+')').addClass(ops.hiddenClass);
		if (index > (ia+1)) $(container).find('['+ops.pItems+']:lt('+lt+')').addClass(ops.hiddenClass);
		
		
		if (page == 0) {
			$('['+ops.pRows+'="prev"]').setAttrib('disabled');
			$('['+ops.pRows+'="start"]').setAttrib('disabled');
		} else {
			$('['+ops.pRows+'="prev"][disabled]').removeAttrib('disabled');
			$('['+ops.pRows+'="start"][disabled]').removeAttrib('disabled');
		} 
		
		if (!$(thisItem).next().attr(ops.pItems)) {
			$('['+ops.pRows+'="next"]').setAttrib('disabled');
			$('['+ops.pRows+'="end"]').setAttrib('disabled');
		} else {
			$('['+ops.pRows+'="next"][disabled]').removeAttrib('disabled');
			$('['+ops.pRows+'="end"][disabled]').removeAttrib('disabled');
		}
		
		ops.onChangePage(page, function() {
			$(container).removeAttrib('disabled');
		})
	});
	
	
	
	
	//------------------------------------------------------------------- Клик на сттрелку
	$(container).not('[disabled]').on(tapEvent, '['+ops.pRows+']', function() {
		$(container).setAttrib('disabled');
		
		let dir = $(this).attr(ops.pRows),
			activeItem = $(container).find('['+ops.pItems+'].'+ops.activeClass).attr(ops.pItems),
			nextIndex = (dir == 'prev' ? (parseInt(activeItem)-1) : (dir == 'next' ? (parseInt(activeItem)+1) : (dir == 'start' ? 0 : (dir == 'end' ? (allCount-1) : 0))))
			nextItem = $(container).find('['+ops.pItems+'="'+nextIndex+'"]'),
			page = $(nextItem).attr(ops.pItems),
			index = $(nextItem).index() - 1,
			gt = (index + (ia-1) + ((ia+1) - index > 0 ? ((ia+1) - index) : 0)),
			lt = (index - ((ia*2+1) + (index - allCount > -ia ? index - allCount : -ia)));
		
		localStorage.setItem(ops.storageId, nextIndex);
		
		$(container).find('['+ops.pItems+'].'+ops.activeClass).removeClass(ops.activeClass);
		$(nextItem).addClass(ops.activeClass);
		
		$(container).find('['+ops.pItems+'].'+ops.hiddenClass).removeClass(ops.hiddenClass);

		
		if (index < (allCount - ia)) $(container).find('['+ops.pItems+']:gt('+gt+')').addClass(ops.hiddenClass);
		if (index > (ia+1)) $(container).find('['+ops.pItems+']:lt('+lt+')').addClass(ops.hiddenClass);
		
		
		if ((dir == 'prev' || dir == 'start') && $(nextItem).attr(ops.pItems) == 0) {
			$('['+ops.pRows+'="prev"]').setAttrib('disabled');
			$('['+ops.pRows+'="start"]').setAttrib('disabled');
		} else {
			$('['+ops.pRows+'="prev"][disabled]').removeAttrib('disabled');
			$('['+ops.pRows+'="start"][disabled]').removeAttrib('disabled');
		} 
		
		if ((dir == 'next' || dir == 'end') && !$(nextItem).next().attr(ops.pItems)) {
			$('['+ops.pRows+'="next"]').setAttrib('disabled');
			$('['+ops.pRows+'="end"]').setAttrib('disabled');
		} else {
			$('['+ops.pRows+'="next"][disabled]').removeAttrib('disabled');
			$('['+ops.pRows+'="end"][disabled]').removeAttrib('disabled');
		}
		
		ops.onChangePage(page, function() {
			$(container).removeAttrib('disabled');
		})
	});
	
	
	
	return {
		getIndex: function() {
			return localStorage.getItem(ops.storageId);
		}
	};
};