/*
    Вешает выбор даты на указанные селекторы, дата размещается в аттрибуте date <input date="вот тут" />
    - селектор начала
    - селектор окончания
    - диапазон (m:1 y:1 d:10)
    - сбрасывать значения полей при изменении инпута начала
*/ 
ddrDatePicker = function(startSelector, endSelector, range, destroy, callback) {
    if($(startSelector).length == 0) {
        console.log('datePicker Ошибка! Неверно выбраны селекторы!');
        return;
    }
    $(startSelector).prop('disabled', false).attr('readonly', '');
    
    if(destroy) $(startSelector).datepicker("destroy").attr('date', '').val('');
    
    if(endSelector != undefined) {
        $(endSelector).prop('disabled', true).attr('readonly', '');
        
        if(destroy) $(endSelector).datepicker("destroy").attr('date', '').val('');
    }
    
    var lang = $.cookie('language') || 'ru',
        monthNamesShort = {ru: ['января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября', 'декабря'], en: ['january','february','march','april','may','june','july','august','september','october','november', 'december']},
        monthNames = {ru: ['январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь', 'декабрь'], en: ['january','february','march','april','may','june','july','august','september','october','november', 'december']},
        dayNamesMin = {ru: ['вс','пн','вт','ср','чт','пт','сб'], en: ['sun','mon','tue','wed','thu','fry','sat']};
    
    
    
    
    $(startSelector).datepicker({
        dateFormat:         'd M yy г.',
        yearRange:          endSelector != undefined ? "1970:"+new Date().getFullYear() : "1970:+100",
        numberOfMonths:     1,
        changeMonth:        true,
        changeYear:         true,
        monthNamesShort:    monthNamesShort[lang],
        monthNames:         monthNames[lang],
        dayNamesMin:        dayNamesMin[lang],
        firstDay:           1,
        minDate:            new Date(2010, 0, 1, 0, 0, 0),
        maxDate:            endSelector == undefined ? null : 0,
        
        onSelect: function(stringDate, dateObj) {
            var rangeDay = rangeMonth = rangeYaer = 0;
            var selectedDay = parseInt(dateObj.selectedDay),
            selectedMonth = parseInt(dateObj.selectedMonth),
            selectedYear = parseInt(dateObj.selectedYear);
            
            var formDay = '0'+selectedDay, formMonth = '0'+(selectedMonth + 1);
            $(startSelector).attr('date', selectedYear+'-'+formMonth.substr(-2)+'-'+formDay.substr(-2));
            
            if (callback && typeof callback == 'function') callback(dateObj);
            if(endSelector == undefined) return;
            $(endSelector).prop('disabled', false);
            
            
            var rng = (range == undefined ? ['m', 1] : range.split(':'));
            if(rng[0] == 'd') rangeDay = parseInt(rng[1]);
            if(rng[0] == 'm') rangeMonth = parseInt(rng[1]);
            if(rng[0] == 'y') rangeYaer = parseInt(rng[1]);
            
            
            $(endSelector).datepicker("destroy").attr('date', '').val('');
            
            // ставим предел даты до текущей
            var unixCurrentTime = new Date().getTime();
            var unixMaxTime = new Date(selectedYear + rangeYaer, selectedMonth + rangeMonth, selectedDay + rangeDay, 0, 0, 0).getTime();
            if(unixCurrentTime > unixMaxTime) var maxDate = new Date(selectedYear + rangeYaer, selectedMonth + rangeMonth, selectedDay + rangeDay, 0, 0, 0);
            else if(unixCurrentTime < unixMaxTime) var maxDate = 0;
            
            
            $(endSelector).datepicker({
                dateFormat:         'd M yy г.',
                yearRange:          "1970:"+new Date().getFullYear(),
                numberOfMonths:     1,
                changeMonth:        true,
                changeYear:         true,
                monthNamesShort:    monthNamesShort[lang],
                monthNames:         monthNames[lang],
                dayNamesMin:        dayNamesMin[lang],
                firstDay:           1,
                minDate:            new Date(selectedYear, selectedMonth, selectedDay + 1, 0, 0, 0),
                maxDate:            maxDate,
                
                onSelect: function(stringDate, dateObj) {
                    var selectedDay = parseInt(dateObj.selectedDay),
                    selectedMonth = parseInt(dateObj.selectedMonth),
                    selectedYear = parseInt(dateObj.selectedYear);
                    var formDay = '0'+selectedDay, formMonth = '0'+(selectedMonth + 1);
                    $(endSelector).attr('date', selectedYear+'-'+formMonth.substr(-2)+'-'+formDay.substr(-2));
                    if (callback && typeof callback == 'function') callback(dateObj);
                } 
            });
        }
    });
    
    
}