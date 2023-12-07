ddrSelect = function(selector) {
	var selector = selector || 'body',
		ddrselectItems = $(selector).find('.ddrselect:not(.activated)');
	
	if (ddrselectItems.length) {
		if ($(ddrselectItems).length > 0) {
			$(ddrselectItems).each(function() {
				var thisddrSel = this,
					choosedItem = $(thisddrSel).find('.ddrselect__listitem_choosed');
				if ($(choosedItem).length) {
					$(thisddrSel).find('.ddrselect__choosed').text($(choosedItem).text());
					$(thisddrSel).find('input[type="hidden"]').val($(choosedItem).attr('value'));
				} 
				$(thisddrSel).addClass('activated');
			});
		}
		
		
		$(selector).off(tapEvent, '.ddrselect__listitem:not(.ddrselect__listitem_choosed)').on(tapEvent, '.ddrselect__listitem:not(.ddrselect__listitem_choosed)', function() {
			var choosedItemVal = $(this).attr('value'),
				choosedItemTitle = $(this).text();
			$(this).siblings('.ddrselect__listitem').removeClass('ddrselect__listitem_choosed');
			$(this).addClass('ddrselect__listitem_choosed');
			$(this).closest('.ddrselect').find('.ddrselect__choosed').text(choosedItemTitle);
			$(this).closest('.ddrselect').find('input[type="hidden"]').val(choosedItemVal);
			$(this).closest('.ddrselect').find('input[type="hidden"]').trigger('onchange', [choosedItemVal, choosedItemTitle]);
		});
		
		$(selector).off(tapEvent, '.ddrselect.error').on(tapEvent, '.ddrselect.error', function() {
			$(this).removeClass('error');
		});
		
		var mlTout;
		$(selector).off('mouseleave', '.ddrselect').on('mouseleave', '.ddrselect', function() {
			var thisLiItem = this;
			clearTimeout(mlTout);
			mlTout = setTimeout(function() {
				$(thisLiItem).removeClass('ddrselect_opened');
				$(thisLiItem).find('.ddrselect__field').removeAttrib('aria-expanded');
			}, 400);
		});
		
		$(selector).off('mouseenter', '.ddrselect').on('mouseenter', '.ddrselect', function() {
			clearTimeout(mlTout);
		});
		
		$(window).on('scroll', function() {
			$('.ddrselect').removeClass('ddrselect_opened');
			$('.ddrselect__field').removeAttrib('aria-expanded');
		});
	}	
};