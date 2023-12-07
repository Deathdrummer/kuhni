//----------------------------------------------  функции работы с датой и временем

/*
    получить данные времени из количества секунд
        - кол-во секунд
        getTimeFromSeconds(304) -> {w: 0, d: 0, h: 0, m: 5, s: 4}
        getTimeFromSeconds(304, true) -> 5 мин. 4 сек.
*/    
getTimeFromSeconds = function(sec, temp) {
    var weeks = days = hours = minutes = seconds = 0;
    
    if (sec >= (60 * 60 * 24 * 7)) {
        weeks = Math.floor(sec / (60 * 60 * 24 * 7));
        sec = sec % (60 * 60 * 24 * 7);
    }
    
    if (sec >= (60 * 60 * 24)) {
        days = Math.floor(sec / (60 * 60 * 24));
        sec = sec % (60 * 60 * 24);
    }
    
    if (sec >= (60 * 60)) {
        hours = Math.floor(sec / (60 * 60));
        sec = sec % (60 * 60);
    }
    
    if (sec >= 60) {
        minutes = Math.floor(sec / 60);
    }
    
    seconds = (sec % 60);
    
    if (temp) {
        var strTime = '';
        if (weeks) strTime += weeks+' нед. ';
        if (days) strTime += days+' дн. ';
        if (hours) strTime += hours+' ч. ';
        if (minutes) strTime += minutes+' мин. ';
        if (seconds) strTime += seconds+' сек.';
        return strTime;
    }
    
    return {
        w: weeks,
        d: days,
        h: hours,
        m: minutes,
        s: seconds,
    };
};




/*
    Возвращает дату и время по UNIX метке времени
        - UNIX время
        - вернуть со временем
        - формат месяца [0 - полное назв., 1 - сокращенное назв.]
        getDateFromUnix(date.getTime(), false, 1)
*/
getDateFromUnix = function(unixTime, returnTime, monthFormat) {
    
    var lang = $.cookie('language') || 'ru',
        monthNames = {ru: [
            ['января', 'янв'],
            ['февраля', 'фев'],
            ['марта', 'мар'],
            ['апреля', 'апр'],
            ['мая', 'мая'],
            ['июня', 'июн'],
            ['июля', 'июл'],
            ['августа', 'авг'],
            ['сентября', 'сен'],
            ['октября', 'окт'],
            ['ноября', 'ноя'],
            ['декабря', 'дек'],
        ], en: [
            ['january', 'jan'],
            ['february', 'feb'],
            ['march', 'mar'],
            ['april', 'apr'],
            ['may', 'may'],
            ['june', 'jun'],
            ['july', 'jul'],
            ['august', 'aug'],
            ['september', 'sep'],
            ['october', 'oct'],
            ['november', 'nov'],
            ['december', 'dec'],
        ]},
        monthFormat = monthFormat || 0,
        date = new Date(unixTime * (unixTime.toString().length >= 13 ? 1 : 1000)),
        year = month = day = hours = minutes = seconds = 0;
    
    year    = date.getFullYear();
    month   = date.getMonth();
    day     = date.getDate();
    hours   = "0" + date.getHours();
    minutes = "0" + date.getMinutes();
    seconds = "0" + date.getSeconds();
    
    if(returnTime == undefined || returnTime == true) return day+' '+monthNames[lang][month][monthFormat]+' '+year+' г.'+' в '+hours.substr(-2) + ':' + minutes.substr(-2); // + ':' + seconds.substr(-2);
    else if(! returnTime) return day+' '+monthNames[lang][month][monthFormat]+' '+year+' г.'; // + ':' + seconds.substr(-2);
};








// конвертирует маску времени в человекопонятный вид, к примеру m:3 - 3 месяца
encodeTimePoint = function(point) {
    var nnn = ['y', 'm', 'd', 'h', 'i', 's'];
    var decodeData = point.split(':');
    if(nnn.indexOf( decodeData[0]) == -1) {console.log('encodeTimePoint неверные данные'); return;}
    
    var poriodName = decodeData[0],
        periodCount = decodeData[1],
        lang = $.cookie('language') || 'en',
        yN = {ru: ['год', 'года', 'лет'], en: ['years', 'years', 'years']},
        mN = {ru: ['месяц', 'месяца', 'месяцев'], en: ['months', 'months', 'months']},
        dN = {ru: ['день', 'дня', 'дней'], en: ['days', 'days', 'days']},
        hN = {ru: ['час', 'часа', 'часов'], en: ['hours', 'hours', 'hours']},
        iN = {ru: ['минута', 'минуты', 'минут'], en: ['minutes', 'minutes', 'minutes']},
        sN = {ru: ['секунда', 'секунды', 'секунд'], en: ['seconds', 'seconds', 'seconds']},
        perNames = {
            'y': {0: yN[lang][2], 1: yN[lang][0], 2: yN[lang][1], 3: yN[lang][1], 4: yN[lang][1], 5: yN[lang][2], 6: yN[lang][2], 7: yN[lang][2], 8: yN[lang][2], 9: yN[lang][2], 11: yN[lang][2], 12: yN[lang][2], 13: yN[lang][2],14: yN[lang][2]},
            'm': {0: mN[lang][2], 1: mN[lang][0], 2: mN[lang][1], 3: mN[lang][1], 4: mN[lang][1], 5: mN[lang][2], 6: mN[lang][2], 7: mN[lang][2], 8: mN[lang][2], 9: mN[lang][2], 11: mN[lang][2], 12: mN[lang][2], 13: mN[lang][2],14: mN[lang][2]},
            'd': {0: dN[lang][2], 1: dN[lang][0], 2: dN[lang][1], 3: dN[lang][1], 4: dN[lang][1], 5: dN[lang][2], 6: dN[lang][2], 7: dN[lang][2], 8: dN[lang][2], 9: dN[lang][2], 11: dN[lang][2], 12: dN[lang][2], 13: dN[lang][2],14: dN[lang][2]},
            'h': {0: hN[lang][2], 1: hN[lang][0], 2: hN[lang][1], 3: hN[lang][1], 4: hN[lang][1], 5: hN[lang][2], 6: hN[lang][2], 7: hN[lang][2], 8: hN[lang][2], 9: hN[lang][2], 11: hN[lang][2], 12: hN[lang][2], 13: hN[lang][2],14: hN[lang][2]},
            'i': {0: iN[lang][2], 1: iN[lang][0], 2: iN[lang][1], 3: iN[lang][1], 4: iN[lang][1], 5: iN[lang][2], 6: iN[lang][2], 7: iN[lang][2], 8: iN[lang][2], 9: iN[lang][2], 11: iN[lang][2], 12: iN[lang][2], 13: iN[lang][2],14: iN[lang][2]},
            's': {0: sN[lang][2], 1: sN[lang][0], 2: sN[lang][1], 3: sN[lang][1], 4: sN[lang][1], 5: sN[lang][2], 6: sN[lang][2], 7: sN[lang][2], 8: sN[lang][2], 9: sN[lang][2], 11: sN[lang][2], 12: sN[lang][2], 13: sN[lang][2],14: sN[lang][2]},
        },
        decodeData = point.split(':'),
        poriodName = decodeData[0],
        periodCount = decodeData[1],
        res;
        
    if(periodCount.length > 1) {
        if(perNames[poriodName][periodCount] != undefined) res = perNames[poriodName][periodCount]; 
        else {
            if(perNames[poriodName][periodCount.substr(-2)] != undefined) {
                res = perNames[poriodName][periodCount.substr(-2)];
            } else {
                res = perNames[poriodName][periodCount.substr(-1)];
            } 
        } 
    } else {
        res = perNames[poriodName][periodCount.substr(-1)];
    }
    
    return [periodCount, res];
}