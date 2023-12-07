/*
	Табы
	tabTitlesAttr: аттрибут кнопок для управления табами
	tabsContentAttr: аттрибут контанта табов 
	callback: каллбэк	
*/
ddrTabs = function(tabTitlesAttr, tabsContentAttr, callback) {
	$('body').off(tapEvent, '['+tabTitlesAttr+']').on(tapEvent, '['+tabTitlesAttr+']', function() {
		var thisTabTitle = this,
			tabId = $(thisTabTitle).attr(tabTitlesAttr),
			thisBlock = $('['+tabsContentAttr+'="'+tabId+'"]'),
			allBlocks = $('['+tabsContentAttr+']'),
			tabsTitles = $(thisTabTitle).siblings();
		
		if ($(thisTabTitle).hasClass('active') == false && $(thisBlock).hasClass('visible') == false) {
			$(tabsTitles).filter('.active').removeClass('active');
			$(thisTabTitle).addClass('active');
			
			$(allBlocks).filter('.visible').removeClass('visible');
			$(thisBlock).addClass('visible');
			
			if (callback && typeof callback == 'function') callback(thisTabTitle, thisBlock);
		}
	});
};