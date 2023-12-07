/*
	Сортировка списков
	Пример:
	
	<a ddrsort="score" ddrsortgroup="foo" class="ddrsortactive" ddrorder="desc"></a>
	<a ddrsort="rating" ddrsortgroup="foo" ddrorder="asc"></a>
	
	<ul>
		<li ddrsort-score="{{значение}}" ddrsort-rating="{{значение}}"></li>
		<li ddrsort-score="{{значение}}" ddrsort-rating="{{значение}}"></li>
		<li ddrsort-score="{{значение}}" ddrsort-rating="{{значение}}"></li>
	</ul>
	
	- ddrsort="score" - элемент, по которому производится сортировка
	- ddrsortgroup="foo" - присвоение группы, в случае, если блоков сортировок несколько на одной странице
	- class="ddrsortactive" - изначально заданая сортировка (появляется иконка сортировки)
	- ddrorder="desc" - изначальное направление сортировки
	
*/


ddrSort = function(selector) {
	var sortAttr = $(selector).attr('ddrsort'),
		sortGroup = $(selector).attr('ddrsortgroup'),
		sortOrder = $(selector).attr('ddrorder'),
		sortSelectors = $('body').find('[ddrsort-'+sortAttr+']'),
		sortBlock = $('[ddrsort-'+sortAttr+']').parent(),
		sortType;
	
	
	if (sortGroup != undefined) {
		$('body').find('[ddrsortgroup="'+sortGroup+'"].ddrsortactive').removeClass('ddrsortactive');
		$('body').find('[ddrsortgroup="'+sortGroup+'"][ddrorder]').removeAttrib('ddrorder');
	} else {
		$('body').find('[ddrsort]').removeClass('ddrsortactive');
		$('body').find('[ddrsort]').removeAttrib('ddrorder');
	}
	
	$(selector).addClass('ddrsortactive');
	
	if (sortOrder == undefined) {
		sortType = 'desc';
		$(selector).setAttrib('ddrorder', 'asc');
	} else {
		sortType = sortOrder;
		$(selector).setAttrib('ddrorder', (sortOrder == 'desc' ? 'asc' : 'desc'));
	}
		
	
	
	sortSelectors.sort(function(a, b) {
		var item1 = $(a).attr('ddrsort-'+sortAttr),
			item2 = $(b).attr('ddrsort-'+sortAttr);
		
		if ((isInt(item1) || isFloat(item1)) && (isInt(item2) || isFloat(item2))) {
			item1 = parseInt(item1);
			item2 = parseInt(item2);
			if (sortType == 'desc') {
				if (item1 < item2) return 1;
				if (item1 == item2) return 0;
				if (item1 > item2) return -1;
			} else if (sortType == 'asc') {
				if (item1 < item2) return -1;
				if (item1 == item2) return 0;
				if (item1 > item2) return 1;
			}
		} else {
			var rx = /([^\d]+|\d+)/ig;
			if (sortType == 'desc') {
				var str1split = item2.match(rx);
				var str2split = item1.match(rx);
			} else if (sortType == 'asc') {
			 	var str1split = item1.match(rx);
				var str2split = item2.match(rx);
		 	}
			
			for(var i=0, l=Math.min(str1split.length, str2split.length); i < l; i++) {
				var s1 = str1split[i], 
				    s2 = str2split[i];
				if (s1 === s2) continue;
				if (isNaN(+s1) || isNaN(+s2))
					return s1 > s2 ? 1 : -1;
				else
					return +s1 - s2;		
			}
			return 0;
		}
		
	});

	
	
	$(sortBlock).html('');
	$.each(sortSelectors, function(k, item) {
		$(sortBlock).append(item);
	});
};