;$.fn.getRating = function(settings) {
    var thisItems = this;
    
    
    var ops = $.extend({
        selector: thisItems, // контейнер
        mark: false, // оценка
        currentMark: false, // указать количество уже выставленных оценок
        
        // постоянные параметры
        scale: 5, // шкала (бальность)
        readOnly: false, // только для просмотра
        label: '', // тип рейтинга (название поля)
        labelSize: 12, // размер лэйбла
        size: 20, // размер иконок рейтинга
        theme: 'orange', // тема
        icon: 'star', // иконка без fa fa-
        showMarkOnLabel: false, // показывать оценку на лэйбле
        showNums: false, // номера под звездами
        onClick: false, // событие при клике
    }, settings);
    
    
    
    $(ops.selector).each(function() {
        var thisSelector = this;
        
        $(thisSelector).addClass('rating-block').css('padding-bottom', (ops.size / 12)+'px');
        
        
        var html = '<div class="stars-block noselect">';
        for(let x = ops.scale; x > 0; x--) {
            html += '<span class="stars-block__star'+(ops.readOnly ? ' read-only' : '')+' '+ops.theme+' fa fa-'+ops.icon+''+(ops.mark && ops.mark == x ? ' active' : '')+'" data-mark="'+x+'" style="font-size:'+ops.size+'px;">';
            if (ops.showNums) html += '<p class="stars-block__star-num" style="font-size:0.45em;">'+x+'</p>';
            html += '</span>';
        }
        html += '<div class="stars-block">';
        
        $(thisSelector).append(html);
        $(thisSelector).append('<span class="rating-block__label noselect" style="font-size:'+ops.labelSize+'px;">'+ops.label + (ops.currentMark ? ' ('+ops.currentMark+')' : '')+'</span>');
        
        
        // рейтинг
        if(! ops.readOnly) {
            $(thisSelector).children('.stars-block').hover(function() {
                $(this).find('.stars-block__star.active').removeClass('hover');
                $(this).find('.stars-block__star').removeClass('error');
            }, function() {
                $(this).find('.stars-block__star.active').removeClass('hover');
            });
            
            $(thisSelector).on('click', '.stars-block__star', function() {
                var thisMark = $(this).data('mark');
                if(ops.onClick) ops.onClick(thisMark);
                $(this).parent('.stars-block').find('.stars-block__star.active').removeClass('active hover');
                $(this).addClass('active hover');
                
                if(ops.showMarkOnLabel) $(thisSelector).find('.rating-block__label span').text('('+thisMark+')'); 
            });
        }
        
        
        // это какая-то хрень непонятная
        /*return thisRating = {
            refresh: function() {
                $(thisSelector).find('.stars-block__star.active').removeClass('active hover');
            },
            error: function() {
                $(thisSelector).find('.stars-block__star').addClass('error');
            }   
        };*/
    });
    
};