;setBaseScripts = function(selector) {
	if (selector == undefined) selector = 'body';
	//------------------------- Прикрепить визуальный редактор
	if ($(selector).find('[editor]:not(.activated)').length > 0) {
		initEditors();
	}

	ddrSelect(selector);

	ddrPhonecodes();
	
	ddrInitTabs();

	$(selector).find('[phonemask]:not([multicode])').each(function() {
		var phonemask = $(this).attr('phonemask') || '(^^^) ^^^-^^-^^',
			code = $(this).attr('code') || '+7',
			placeholder = $(this).attr('placeholder') || (code+' '+phonemask).replace(/[\^&]/g, '_');
		$(this).mask(code+' '+phonemask, {autoclear: false}).attr({'placeholder': placeholder, 'type': 'tel'});
	});

	$(selector).find('[mask]').each(function() {
		var mask = $(this).attr('mask'),
			placeholder;
		if (!mask) return true;
		placeholder = $(this).attr('placeholder') || mask.replace(/[\^&]/g, '_');
		$(this).mask(mask, {autoclear: false}).attr({'placeholder': placeholder});
	});


	$(selector).find('[numberformat]').each(function() {
		var nf = $(this).attr('numberformat');
		if (nf != '') {
			var nf = nf.split('|'),
				afterDot = nf[0] != undefined ? nf[0] : 2,
				dot =nf[1] != undefined ? nf[1] : '.',
				space = nf[2] != undefined ? nf[2] : ' ';
			$(this).number(true, afterDot, dot, space);
		} else {
			$(this).number(true, 2, '.', ' ');
		}
	});


	$(selector).find('.phone ,[phone]').each(function() {
		var code = $(this).attr('code');
		$(this).attr('href', 'tel:'+$(this).text().trim().replace(/-|\(|\)|\s/g, '').replace(/^8/, '+7'));
	});

	$(selector).find('.whatsapp, [whatsapp]').each(function() {
		var thisMess = $(this).data('message'),
			thisNumber = $(this).text().trim().replace(/-|\(|\)|\s/g, '').replace(/^8/, '+7'),
			code = $(this).attr('code');
		$(this).attr('href', 'whatsapp://send?phone='+thisNumber+'&abid='+thisNumber+'&text='+thisMess);
	});

	$(selector).find('.email, [email]').each(function() {
		$(this).attr('href', 'mailto:'+$(this).text().trim());
	});


	//------------------------- событие при изменении инпутов
	if ($(selector).find('table.fieldset').length > 0) {
		$(selector).find('table.fieldset').changeInputs(function(item, data) {
			if (data.st == 'contenteditable') $(item).closest('.textarea').addClass('changed');
			$(item).parent().addClass('changed');
		});
	}

	if (/#ddrpopup/.test(selector)) {
		$(selector).changeInputs(function(item, data) {
			if (data.st == 'contenteditable') $(item).closest('.textarea').addClass('changed');
			$(item).parent().addClass('changed');
		});
	}
};




//-----------------------------------------------------------------------------------------------------



jQuery(document).ready(function($) {

	// активировать базовые скрипты
	setBaseScripts();


	//--------------------------------------------- FIXes
	$(document).on('focus gesturestart', function(e) {
		e.preventDefault();
	});

	/* под вопросом
	document.addEventListener('gesturestart', function (e) {
		e.preventDefault();
	}); */


	/*$('#mainVide').vide({
		mp4: 'assets/video/ocean.mp4',
		poster: false
	});
	*/


	// -------------------------------------------------------------------- Фокус при наведении
	$('body').on('focus', 'input, textarea, select', function() {
		$(this).parent('div').addClass('focused');
	});

	$('body').on('focus', '.file', function() {
		$(this).addClass('focused');
	});

	$('body').on('blur', 'input, textarea, select', function() {
		$(this).parent('div').removeClass('focused');
	});

	$('body').on('blur', '.file', function() {
		$(this).addClass('focused');
	});


	$('body').on('focus', 'input.error, textarea.error, select.error, .field.error, .textarea.error, .select.error, .file.error', function() {
		var thisItem = this;
		$(thisItem).removeClass('error');
		setTimeout(function() {
			$(thisItem).find('span.error').remove();
			$(thisItem).siblings('span.error').remove();
		}, 160);
	});

	$('body').on(tapEvent, '.file.error', function() {
		var thisItem = this;
		$(thisItem).removeClass('error');
		setTimeout(function() {
			$(thisItem).find('span.error').remove();
		}, 160);
	});



	//--------------------------------------------- Submit формы только при наличии аттрибута action
	$('body').on('submit', 'form:not([action])', function(e) {
		e.preventDefault();
		return false;
	});


	//--------------------------------------------- Запретить autocomplete
	$('body').on('focus', 'input[type="text"]:not([noedit]), input[type="password"]:not([noedit]), input[type="email"]:not([noedit]), input[type="tel"]:not([noedit])', function() {
		$(this).removeAttrib('readonly');
	});

	if (/iPhone|iPad|iPod/i.test(navigator.userAgent) == false) {
		$('body').on('blur', 'input[type="text"]:not([noedit]), input[type="password"]:not([noedit]), input[type="email"]:not([noedit]), input[type="tel"]:not([noedit])', function() {
			$(this).setAttrib('readonly');
		});
	}



	$('body').on('change', 'input[type="checkbox"]', function() {
		if ($(this)[0].hasAttribute('checked')) {
			$(this).prop('checked', false);
			$(this)[0].removeAttribute('checked');
		} else {
			$(this).prop('checked', true);
			$(this)[0].setAttribute('checked', '');
		}
	});






	//--------------------------------------------- Вверх страницы
	var scrTop;
	scrTop = $(window).scrollTop();
	if (scrTop > $(window).height() * 2) {
		$('[scrolltop]').addClass('visible');
	} else {
		$('[scrolltop]').removeClass('visible');
	}

	$(window).on('scroll', function() {
		scrTop = $(this).scrollTop();
		if (scrTop > $(window).height() * 2) {
			$('[scrolltop]').addClass('visible');
		} else {
			$('[scrolltop]').removeClass('visible hover');
		}
	});

	$('[scrolltop]').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({scrollTop: 0}, 800, 'easeInOutQuint');
	});

	$('[scrolltop]').on('tap click mouseenter', function() {
		$(this).addClass('hover');
	});

	$('[scrolltop]').on('mouseleave', function() {
		$(this).removeClass('hover');
	});









	//--------------------------------------------- Параллакс
	$('body').find('[parallax]').each(function() {
		var thisParallaxData = $(this).attr('parallax').split('|');
		$(this).parallax({
			imageSrc: thisParallaxData[0],
			speed: parseFloat(thisParallaxData[1])
		});
	});






	//--------------------------------------------- Табы
	$('body').on(tapEvent, '.tabstitles li:not(.active)', function() {
		if ($(this).find('[ignore]:hover').length > 0) return false;
		var thisItem = this,
			hashData = location.hash.substr(1, location.hash.length).split('.'),
			thisId = $(thisItem).attr('id'),
			section = hashData[0],
			thisTabsTitles = $(thisItem).closest('.tabstitles'),
			thisTabsContent = $(thisTabsTitles).siblings('.tabscontent');

		$(thisItem).removeClass('error');

		if (hashData[2] == undefined) {
			$('#'+section).find('.tabstitles:not(.sub)').siblings('.tabscontent').find('.tabstitles.sub').each(function() {
				$(this).children('li').removeClass('active');
				$(this).children('li:first').addClass('active');

				$(this).siblings('.tabscontent').find('[tabid]').removeClass('visible');
				$(this).siblings('.tabscontent').find('[tabid]:first').addClass('visible');
			});
		}

		$(thisTabsTitles).children('li').removeClass('active');
		$(thisItem).addClass('active');

		if ($(thisTabsTitles).hasClass('sub') == false) {
			location.hash = section+'.'+thisId;
		} else {
			if (!hashData[1]) hashData[1] = $(thisItem).closest('#'+section).find('.tabstitles:not(.sub)').children(':first').attr('id');
			location.hash = section+'.'+hashData[1]+'.'+thisId;
		}

		if ($(thisTabsContent).children('[tabid="'+thisId+'"]').hasClass('visible') == false) {
			$(thisTabsContent).children('[tabid]').removeClass('visible');
			$(thisTabsContent).children('[tabid="'+thisId+'"]').addClass('visible');

			$(document).trigger('tabsChange');
		}

		initEditors();
	});










	// показать/скрыть пароль
	// - добавить <i class="fa fa-eye" showpassword></i> внутрь .field
	$('body').on(tapEvent, '[showpassword]', function() {
		if ($(this).parent().find('input[type="password"]').length > 0) {
			$(this).parent().find('input[type="password"]').prop('type', 'text');
			$(this).removeClass('fa-eye').addClass('fa-eye-slash').prop('title', 'Скрыть пароль');;
		} else if ($(this).parent().find('input[type="text"]').length > 0) {
			$(this).parent().find('input[type="text"]').prop('type', 'password');
			$(this).removeClass('fa-eye-slash').addClass('fa-eye').prop('title', 'Показать пароль');
		}
	});
	
	
	
	



	$('#adminSetModifications').on('change', function() {
		var modification = $(this).val();
		$.post('/admin/modifications/set_site_modification', {controller: 'admin', mod: modification}, function(result) {
			if (result) pageReload();
		}, 'json');
	});


	$('body').on(tapEvent, '[modification]', function() {
		var modification = $(this).attr('modification');
		$.post('/admin/modifications/set_site_modification', {controller: 'site', mod: modification}, function(result) {
			if (result) pageReload();
		}, 'json');
	});





	$('body').on(tapEvent, '[ddrsort]', function() {
		ddrSort(this);
	});
	
	
	
	
	
	
	/*
	Выпадающая форма для заполнения поля типа textarea.
	Для textarea добавляются атрибуты: 
		- ddrtextarealist с настройками полей.
			Для каждого поля задаются 4 параметра:
				- тип поля: input[text, number, checkbox], select.
				- лейбл
				- данные [ключ:значение через запятую]
				- класс
		- join: разделитель записей
		- load: подгрузка списка данных в формате [ключ => значение] 
			задаются 2 параметра:
				- имя поля
				- URL
	
	Пример: ddrtextarealist="select;тип;text:однострочное поле,file:файл;w-10|text;имя поля;;w-15|text;лейбл;;w-15|text;значения|text;правила|text;маска"
	*/
	$('body').on('focus', '[ddrtextarealist]', function() {
		var textarea = this,
			data = $(textarea).attr('ddrtextarealist'),
			loadData = $(textarea).attr('load'),
			join = $(textarea).attr('join') || ';',
			h = 0;
		
		$('body').find('[ddraladd]').off(tapEvent);
		$('body').find('.textarea__addblock').find('input, select').off('keyup');
		
		if (data) {
			var mainHtml = '',
				html = '',
				fields = data.split('|');
			
			$.each(fields, function(k, f) {
				if (!f) return true;
				let fd = f.split(';');
					t = fd[0] || null,
					l = fd[1] || null,
					d = fd[2] || null,
					c = fd[3] || null;
					
				if (!t) return true;
				
				html += '<div class="dcol'+(c ? '-auto '+c : '')+'">';
				html += 	'<label class="textareafields__label" for="ddrtextarealistfield'+k+'">'+l+'</label>';
				
				if (t == 'select') {
					let ol = d.split(',');
					html +=	'<select id="ddrtextarealistfield'+k+'" tabid="'+k+'">';
					$.each(ol, function(k, o) {
						if (!o) return true;
						var si = o.split(':'),
							v = si[0],
							t = si[1] != undefined ? si[1] : si[0];
						html +=	'<option value="'+v+'">'+t+'</option>';
					});
					html +=	'</select>';
				} else if (t == 'checkbox') {
					let checked = d == 1 ? ' checked' : '';
					html +=	'<div class="checkbox">';
					html +=		'<div class="checkbox__item checkbox__item_ver2 checkbox__item_small h-24px">';
					html +=			'<div>';
					html +=				'<input id="ddrtextarealistfield'+k+'" type="checkbox"'+checked+' tabid="'+k+'" />';
					html +=				'<label for="ddrtextarealistfield'+k+'"></label>';
					html +=			'</div>';
					html +=		'</div>';
					html +=	'</div>';
				} else if (t == 'number') {
					var val = d != undefined ? ' value="'+d+'"' : '';
					html +=	'<input id="ddrtextarealistfield'+k+'" type="number"'+val+' showrows tabid="'+k+'" />';
				} else if (t == 'text') {
					var val = d != undefined ? ' value="'+d+'"' : '';
					html +=	'<input id="ddrtextarealistfield'+k+'" type="text"'+val+' tabid="'+k+'" />';
				}
				html += '</div>';
			});
		}
			
		
		
		$(textarea).setAttrib('touch', 'textarea_opened');
		
		mainHtml += '<div class="textarea__addblock">';
		mainHtml += 	'<div class="textareafields"><div class="drow dgutter-4">'+html+'</div></div>';
		mainHtml += 	'<div class="textareabutton"><button ddraladd title="Добавить строку"><i class="fa fa-plus"></i></button></div>';
		mainHtml += '</div>';
		
		if ($(textarea).siblings('.textarea__addblock').length == 0) $(textarea).after(mainHtml);
		
		
		h = $(textarea).siblings('.textarea__addblock').height();
		
		$(textarea).siblings('.textarea__addblock').css('bottom', -h+'px');
		
		
		$(textarea).siblings('.textarea__addblock').find('input, select').on('keyup', function(e) {
			if (e.keyCode == 13) _addRow(); 
		});
		$(textarea).siblings('.textarea__addblock').find('[ddraladd]').on(tapEvent, function() {
			_addRow();
		});
		
		
		function _addRow() {
			var data = [],
				tWrap = $(textarea).parent('.textarea');
			$(textarea).siblings('.textarea__addblock').find('input, select').each(function(k, i) {
				if (i.type == 'checkbox') data.push($(i).is(':checked') ? 1 : 0);
				else data.push($(i).val());
			});
			
			if ($(textarea).val() != '') $(textarea).val($(textarea).val()+"\n"+data.join(join));
			else $(textarea).val(data.join(join));

			if (tWrap.length) $(tWrap).addClass('changed');
			
			$(textarea).siblings('.textarea__addblock').find('input').val('');
			$(textarea).siblings('.textarea__addblock').find('select').children('option').removeAttrib('selected');
			$(textarea).siblings('.textarea__addblock').find('select').children('option:first').prop('selected', true);
			$(textarea).scrollTop(999999999);
			$(textarea).siblings('.textarea__addblock').find('[class ^= "dcol"]:first').find('inpus, select').focus();
		}
	});









});
