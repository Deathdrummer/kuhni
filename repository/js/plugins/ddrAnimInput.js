;$.fn.ddrAnimInput = function(settings) {

    var ops = $.extend({
        placeholder: 'Не задано', // текст подсказки
        display: 'inline-block',
        index: '70%', // степень уменьшения текста при фокусе
        left: 10, // отступ слева у подсказки
        top: 20,
        color: '#a2a2a2', // цвет текста подсказки
        colorFocused: '#555', // цвет текста подсказки при фокусе
        transition: '0.2', // скорость анимации
        conditions: [], // содержание поля для возвращения подсказки
        wrapCls: '' // дополнительный класс для обертки
    }, settings);



    var thisInput = this,
        id = 'ddrAnimInput'+random(0,999),
        placeholder = ops.placeholder || $(thisInput).attr('placeholder'),
        inpHeight = $(thisInput).outerHeight(),
        inpHeightFocused = inpHeight / (100 / (parseInt(ops.index) - parseInt(ops.top))),
        fontSize = parseInt($(thisInput).css('font-size')),
        fontSizeFocused = fontSize / (100 / parseInt(ops.index));


    $(thisInput).attr('placeholder', '');
    $(thisInput).wrap('<div class="animinpit'+(ops.wrapCls ? ' '+ops.wrapCls : '')+'" id="'+id+'"></div>');

    $('#'+id).css({'position': 'relative', 'display': ops.display});
    $('#'+id).append('<span class="animinpit__placeholder">'+placeholder+'</span>');


    $('#'+id).find('.animinpit__placeholder').css({
        'position': 'absolute',
        'left': 0,
        'top': 0,
        'pointer-events': 'none',
        'height': inpHeight+'px',
        'line-height': inpHeight+'px',
        'left': ops.left+'px',
        'color': ops.color,
        'transition': 'all '+ops.transition+'s'
    });


    $(thisInput).on('focus', function() {
        $('#'+id).find('.animinpit__placeholder').css({
            'height': inpHeightFocused+'px',
            'line-height': inpHeightFocused+'px',
            'font-size': fontSizeFocused+'px',
            'top': -inpHeightFocused+'px',
            'left': 0,
            'color': ops.colorFocused
        });
    });

    $(thisInput).on('blur', function() {
        if ($(thisInput).val() == '' || $.inArray($(thisInput).val(), ops.conditions) !== -1) {
            $(thisInput).val('');
            $('#'+id).find('.animinpit__placeholder').css({
                'height': inpHeight+'px',
                'line-height': inpHeight+'px',
                'font-size': fontSize+'px',
                'top': 0,
                'left': ops.left+'px',
                'color': ops.color
            });
        }
    });


};
