/*
	Выбор телефонного кода в поле
		<input type=tel multicode="rus" />
		-rus ukr kaz bel uzb azr arm kyr mol taj
*/

;ddrPhonecodes = function() {
	var codesData = {
		rus: {code: 7, flag: 'russia', title: 'Россия'},
		ukr: {code: 380, flag: 'ukraine', title: 'Украина'},
		kaz: {code: 7, flag: 'kazakhstan', title: 'Казахстан'},
		bel: {code: 375, flag: 'belarus', title: 'Белоруссия'},
		uzb: {code: 998, flag: 'uzbekistan', title: 'Узбекистан'},
		azr: {code: 994, flag: 'azerbaijan', title: 'Азербайджан'},
		arm: {code: 374, flag: 'armenia', title: 'Армения'},
		kyr: {code: 996, flag: 'kyrgyzstan', title: 'Киргизия'},
		mol: {code: 373, flag: 'moldova', title: 'Молдавия'},
		taj: {code: 992, flag: 'tajikistan', title: 'Таджикистан'},
	};

	var codesMap = {};
	$.each(codesData, function(code, item) {
		codesMap[item.code] = code;
	})

	$('body').find('[multicode]:not(.multicoded)').each(function() {
		var thisInput = this,
			thisDefaultCode = $(thisInput).attr('multicode') || 'rus',
			thisValue = $(thisInput).val(),
			thisBlock,
			html = '';

		if (!$(thisInput).is(':visible')) return true;
		$(thisInput).addClass('multicoded');
		if ($(thisInput).parent('.field').length > 0) {
			$(thisInput).parent('.field').addClass('multicode');
		} else {
			$(thisInput).wrap('<div class="multicode"></div>');
		}
		thisBlock = $(thisInput).closest('.multicode');

		// если уже задан номер
		if (thisValue) {
			var code = thisValue.split(' ')[0].substr(1) || 7;
			if (code == 7 && /\+7 \([7]/.test(thisValue)) thisDefaultCode = 'kaz';
			else if (code == 7 && /\+7 \([7]/.test(thisValue) == false) thisDefaultCode = 'rus';
			else thisDefaultCode = codesMap[code] || 'rus';
		} else {
			thisDefaultCode = 'rus';
		}

		html += '<div touch="opened" class="multicode__choose">';
		html += 	'<div class="icon"><img src="'+location.origin+'/public/images/flags/'+codesData[thisDefaultCode]['flag']+'.png" title="'+codesData[thisDefaultCode]['title']+'" /></div>';
		html += 	'<i class="fa fa-chevron-down"></i>';
		html += '</div>';
		html += '<ul class="multicode__list">';
		$.each(codesData, function(code, item) {
			html += 	'<li data-icon="'+item.flag+'.png" data-code="'+item.code+'" data-title="'+item.title+'"><div class="icon"><img src="'+location.origin+'/public/images/flags/'+item.flag+'.png" title="'+item.title+'" /></div><span>'+item.title+'</span></li>';
		});
		html += '</ul>';
		$(thisBlock).append(html);

		$(thisBlock).find('.multicode__list').css('top', ($(thisBlock).outerHeight() + 2) + 'px');

		$(thisInput).mask('+'+codesData[thisDefaultCode]['code']+' (^^^) ^^^-^^-^^', {autoclear: false}).attr({'placeholder': '+'+codesData[thisDefaultCode]['code']+' (___) ___-__-__'});

		$(thisBlock).find('.multicode__list li').on(tapEvent, function() {
			var thisIcon = $(this).data('icon'),
				thisCode = $(this).data('code'),
				thisTitle = $(this).data('title');

			$(thisInput).removeClass('error');
			$(thisBlock).find('.multicode__choose img').attr('src', ''+location.origin+'/public/images/flags/'+thisIcon).attr('title', thisTitle);
			$(thisInput).mask('+'+thisCode+' (^^^) ^^^-^^-^^', {autoclear: false}).attr({'placeholder': '+'+(thisCode == '^' ? '_' : thisCode)+' (___) ___-__-__'});
			$(thisInput).val('').focus();
			$(thisBlock).removeClass('opened').addClass('changed');
		});
	});
}
