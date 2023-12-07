/*
	input type file событие изменения поля, на выходе даные загружаемого файла
	- settings
		- sync - каллбэк на каждый файл или при загрузке всех файлов
	
	Возвращает данные файла:
		- имя
		- расширение
		- тип
		- размер
		- предзагруженную картинку base64 (если файл - изображение)
*/
;$.fn.ddrChooseFile = function() {
	var a = arguments,
		params = typeof a[0] == 'object' ? a[0] : {},
		callback = typeof a[0] == 'function' ? a[0] : ((a[1] !== undefined && typeof a[1] == 'function') ? a[1] : false),
		thisInp = this,
		reader,
		files,
		cbIters = 0,
		complete = false,
		isMultiple,
		data = [];
		p = $.extend({
			sync: false
		}, params);
	
	$(thisInp).on('change', function(e) {
		isMultiple = tapEventInfo(e, {attribute: 'multiple'});
		
		if (e.currentTarget.type != 'file') return false;
		files = thisInp[0].files;
		if (!files) return false;
		
		$.each(files, function(k, file) {
			reader = new FileReader();
        	reader.onload = function(e) {
				var type = e.target.result.split('/')[0].substr(5, e.target.result.split('/')[0].length),
					ext = file.name.split('.');
				
				if (p.sync) {
					data.push({
			    		name: file.name,
			    		ext: ext[ext.length - 1],
			    		type: type, //image  application video  audio
			    		size: file.size,
			    		src: e.target.result
			    	});
			    	if (files.length == (++cbIters)) {
			    		data = isMultiple ? data : data[0];
			    		if (callback && typeof callback == 'function') callback(data, files);
			    	}
				} else {
					complete = (files.length == (++cbIters));
					callback({
			    		name: file.name,
			    		ext: ext[ext.length - 1],
			    		type: type, //image  application video  audio
			    		size: file.size,
			    		src: e.target.result
			    	}, complete, file);
				}
	        };
	        reader.readAsDataURL(file);
        });
	});
};