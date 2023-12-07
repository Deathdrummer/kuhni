ddrDragFiles = function(settings) {
	var o = $.extend({
		dropZone: false, // селектор
		emptyDropHtml: '',
		fileTempHtml: '<i class="ddrdragfiles__loading fa fa-spinner fa-spin"></i>',
		dropItemHtml: '',
		itemsGridCls: 'dcol-2 dcol-sm-3 dcol-md-4 dcol-lg-5 dcol-xl-7', // Классы для ячеек файлов
		alreadyFiles: false, // массив объектов [id name src checked] или строка URL - запрос файлов 
		alreadyFilesParams: {}, // параметры для запроса существующих файлов
		deleteAlready: false, // удаление уже добавленного файла id
		disabled: false,
		accessTypes: ['image/jpeg', 'image/png', 'image/gif', 'image/webp'],
		maxFileSize: 2,// мегабайт
		showName: false,
		nameLimit: false, // лимит назавания картинки
		
		lang: 'ru',
		onInit: false,
		onDragHover: false,
		onDragLeave: false,
		onDrop: false, // o.dropZone, countImages, lastIter, files
		onLoadItem: false, // файл позиция порядковый номер файла
		onIsset: false, // если есть хоть один уже загруженный файл
		filesData: false
	}, settings),
		filesBlock = o.filesBlock || '#filesBlock',
		allFiles = {},
		alreadyFiles = [], // Размещение уже добавленных файлов
		issetAlreadyFiles = false,
		alreadyFilesNames = [],
		filesInput
		firstDrop = true,
		clearedDrop = false,
		fileHtml = '<div class="ddrdragfiles__file '+o.itemsGridCls+'"><div class="ddrdragfiles__fileblock">'+o.fileTempHtml+'</div></div>',
		emptyDropHtml = '<div class="ddrdragfiles__empty">'+o.emptyDropHtml+'</div>',
		language = {ru: {
			browserEror: 'Ваш браузер не поддерживает супер современные технологии! Поэтому установите нормальный браузер. к примеру, Хром!',
			deleteFile: 'Удалить файл',
			cannot: 'Так нельзя!',
			fileFormat: 'Формат файла «',
			fileSize: 'Размер файла «',
			notLoad: '» не подходит для загрузки!',
			moreMaxSize: '» превышает максимально разрешенный в ',
			notFitAndSise: '» не подходит для загрузки и превышает максимально разрешенный размер в ',
			mb: 'мб!'
		}, en: {
			browserEror: 'Your browser doesn`t support super modern technologies! So install a normal browser. for example, Chrome!',
			deleteFile: 'Delete the file',
			cannot: 'You can`t do that!',
			fileFormat: 'File format «',
			fileSize: 'File size «',
			notLoad: '» not suitable for downloading!',
			moreMaxSize: '» exceeds the maximum allowed in ',
			notFitAndSise: '» not suitable for loading and exceeds the maximum allowed size in ',
			mb: 'mb!'
		}};
	
	
	if ($(o.dropZone).length == 0) throw Error('ddrDragFiles ошибка! Не указан параметр dropZone');
	
	// Проверка поддержки браузером
	if (typeof(window.FileReader) == 'undefined') {
		$(o.dropZone).text(language[o.lang]['browserEror']);
		$(o.dropZone).addClass('error');
	} else {
		
		if ($(o.dropZone)[0].localName != 'label') {
			$(o.dropZone).replaceTag('label');
		}
		$(o.dropZone).wrap('<div>');
		
		$(o.dropZone).addClass('ddrdragfiles__dropzone');
		$(o.dropZone).append('<div class="drow dgutter-5 dgutter-sm-10 dgutter-ml-15 ddrdragfiles__files" id="'+filesBlock.slice(1)+'"></div>');
		
		filesInput = 'filesInput'+o.dropZone.slice(1);
		$(o.dropZone).after('<input type="file" class="ddrdragfiles__finput" id="'+filesInput+'" multiple />')
		$(o.dropZone).attr('for', filesInput);
	}
	
	
	
	// Размещение уже добавленных файлов
	if (o.alreadyFiles !== false) {
		if (typeof o.alreadyFiles == 'object' && o.alreadyFiles.length) {
			getAlReadyFiles(o.alreadyFiles);
		} else if (typeof o.alreadyFiles == 'string') {
			var url = (o.alreadyFiles.substr(0, 1) != '/' && o.alreadyFiles.substr(0, 7) != 'http://' && o.alreadyFiles.substr(0, 7) != 'https://') ? '/'+o.alreadyFiles : o.alreadyFiles;
			$.post(url, o.alreadyFilesParams, function(dataFiles) {
				getAlReadyFiles(dataFiles);
			}, 'json');
		}
	} else {
		$(o.dropZone).addClass('ddrdragfiles__dropzone_empty');
		$(o.dropZone).append(emptyDropHtml);
		if (o.onInit != undefined && typeof o.onInit == 'function') o.onInit();
	}
	
	
	// Добавляем класс hover при наведении
	$('body').off('dragover', o.dropZone).on('dragover', o.dropZone, function(e) {
		if (o.onDragHover != undefined && typeof o.onDragHover == 'function') o.onDragHover(e);
		if ($(this).children('label').length) $(this).children('label').addClass('ddrdragfiles__dropitem_hover');
		else $(this).addClass('ddrdragfiles__dropzone_hover');
		return false;
	});
	
	// Убираем класс hover
	$('body').off('dragleave', o.dropZone).on('dragleave', o.dropZone, function(e) {
		if (o.onDragLeave != undefined && typeof o.onDragLeave == 'function') o.onDragLeave(e);
		if ($(this).children('label').length) $(this).children('label').removeClass('ddrdragfiles__dropitem_hover');
		else $(this).removeClass('ddrdragfiles__dropzone_hover');
		return false;
	});
	
	if (!o.disabled) {
		// Обрабатываем событие стандартного добавления файлов
		$('body').off('change', '#'+filesInput).on('change', '#'+filesInput, function(e) {
			e.preventDefault();
			$('.ddrdragfiles__dropzone').addClass('ddrdragfiles__dropzone_drop');
			$(this).removeClass('ddrdragfiles__dropzone_hover');
			getFiles(e);
		});
		
		
		// Обрабатываем событие Drop
		$('body').off('drop', o.dropZone).on('drop', o.dropZone, function(e) {
			e.preventDefault();
			e.stopPropagation();
			$('.ddrdragfiles__dropzone_error').removeClass('ddrdragfiles__dropzone_error');
			$('.ddrdragfiles__dropzone').addClass('ddrdragfiles__dropzone_drop');
			$(this).removeClass('ddrdragfiles__dropzone_hover');
			getFiles(e);
		});
		
		$('body').off(tapEvent, o.dropZone).on(tapEvent, o.dropZone, function(e) {
			$('.ddrdragfiles__dropzone_error').removeClass('ddrdragfiles__dropzone_error');
		});
	} else {
		$('.ddrdragfiles__dropzone').disableDrop();
	}
	
	
	
	
	function getAlReadyFiles(dataFiles) {
		var fLength = dataFiles.length || Object.keys(dataFiles).length;
		//return false;
		if (dataFiles && fLength) {
			$.each(dataFiles, function(k, file) {
				var alreadyFileHtml = '';
					alreadyFileHtml +=	'<div class="ddrdragfiles__file ddrdragfiles__file_already '+o.itemsGridCls+'">';
					alreadyFileHtml +=		'<div class="ddrdragfiles__fileblock'+(file['checked'] ? ' ddrdragfiles__fileblock_checked' : '')+'" fileid="'+file['id']+'" style="background-image: url(\'/public/images/compare/thumbs/'+file.filename+'\')">';
					if (!o.disabled) alreadyFileHtml += 			'<i class="ddrdragfiles__remove fa fa-trash" removealireadyfile="'+file['id']+'" title="'+language[o.lang]['deleteFile']+'"></i>';
					if (o.showName) alreadyFileHtml += '<span class="ddrdragfiles__filename" contenteditable>'+getFileName(file['name'])+'</span>';
					alreadyFileHtml +=		'</div>';
					alreadyFileHtml +=	'</div>';
				$(filesBlock).append(alreadyFileHtml);
				alreadyFilesNames.push(file['name']);
			});
			
			
			var dzHtml = $(o.dropZone).html(),
				dzId = o.dropZone;
			$(o.dropZone).replaceWith('<label class="ddrdragfiles__dropzone ddrdragfiles__dropzone_has">'+dzHtml+'</label>');
			if (!o.disabled) $(filesBlock).append('<div class="'+o.itemsGridCls+'" id="'+dzId.slice(1)+'"><label class="ddrdragfiles__dropitem" for="'+filesInput+'">'+o.dropItemHtml+'</label></div>');
			o.dropZone = dzId;
			disableDrop();
			alreadyFiles = dataFiles;
			issetAlreadyFiles = true;
			if (o.onInit != undefined && typeof o.onInit == 'function') o.onInit();
		} else {
			$(o.dropZone).addClass('ddrdragfiles__dropzone_empty');
			$(o.dropZone).append(emptyDropHtml);
		}
	}
	
	
	
	
	
	function disableDrop() {
		$('.ddrdragfiles__dropzone').disableDrop(['ddrdragfiles__dropitem'], function(elem) {
			if ($(elem).hasClass('ddrdragfiles__dropzone')) notify(language[o.lang]['cannot'], 'error');
		});
	};
	
	
	
	function getFiles(event) {
		var filesToServer = [],
			files, 
			reader,
			counter,
			countImages = $(filesBlock).children('div.ddrdragfiles__file:not(.ddrdragfiles__file_already)').length,
			iter,
			lastIter,
			gettingFiles = false;
		
		$(o.dropZone).removeClass('ddrdragfiles__dropzone_error');
		
		if (event.originalEvent.dataTransfer != undefined) files = event.originalEvent.dataTransfer.files;
		else if (event.dataTransfer != undefined) files = event.dataTransfer.files;
		else if (event.currentTarget.files != undefined) files = event.currentTarget.files;
		else $(o.dropZone).addClass('ddrdragfiles__dropzone_error');
		
		
		if (o.accessTypes) {
			var fBuffer = [],
				fArray;
			fArray = Array.from(files);
			$.each(fArray, function(k, file) {
				var stat = true;
				
				if (hasIn(o.accessTypes, file['type']) === false && file['size'] > (o.maxFileSize * 1048576)) {
					notify(language[o.lang]['fileFormat']+file['name']+language[o.lang]['notFitAndSise']+o.maxFileSize+language[o.lang]['mb'], 'error', 15);
					stat = false;
				}
				
				if (stat && hasIn(o.accessTypes, file['type']) === false) {
					notify(language[o.lang]['fileFormat']+file['name']+language[o.lang]['notLoad'], 'error', 15);
					stat = false;
				}
				if (stat && file['size'] > (o.maxFileSize * 1048576)) {
					notify(language[o.lang]['fileSize']+file['name']+language[o.lang]['moreMaxSize']+o.maxFileSize+'мб!', 'error', 15);
					stat = false;
				}
				
				if (stat) fBuffer.push(file);
			});
			files = fBuffer;
		}
		
		counter = files.length;
		
		lastIter = Object.keys(allFiles);
		lastIter = lastIter.length ? parseInt(lastIter[lastIter.length - 1]) : 0;
		
		var choosedFiles = [], minusCounter = 0, issetFiles = [], filesIndexes = [];
		Object.values(allFiles).map(function(file, index) {
	        choosedFiles.push(file['name']+'_'+file['size']);
	    });
	    
		for (var i = 0; i < counter; i++) {
			if (hasIn(o.accessTypes, files[i]['type']) === false) {
				//filesIndexes.push(i);
				continue;
			} else gettingFiles = true;
			
			if (choosedFiles.indexOf(files[i]['name']+'_'+files[i]['size']) == -1 && alreadyFilesNames.indexOf(getFileName(files[i]['name'])) == -1) {
				if ((firstDrop && !issetAlreadyFiles) || clearedDrop) {
					$(filesBlock).append(fileHtml);
					$('.ddrdragfiles__empty').remove();
				} else $(o.dropZone).before(fileHtml);
				filesIndexes.push(i);
			} else {
				issetFiles.push(files[i]);
				minusCounter++;
			}
		}
		
		
		counter = counter - minusCounter;
		if (issetFiles.length && o.onIsset != undefined && typeof o.onIsset == 'function') o.onIsset(issetFiles);
		var fIterator = 0;
		
		(function loadfile() {
			if (counter == 0) {
				if (o.done != undefined && typeof o.done == 'function') o.done(allFiles);
				document.getElementById(filesInput).value = "";
				return false;
			} 
			
			iter = filesIndexes.length - counter;
			var globCount = (lastIter + iter + 1);
			
			if (hasIn(o.accessTypes, files[filesIndexes[fIterator]]['type']) === false) {
				counter--;
				fIterator++;
				loadfile();
			} else {
				new Compressor(files[filesIndexes[fIterator]], {
					quality: 0.6,
					mimeType: files[filesIndexes[fIterator]]['type'],
					maxWidth: 160,
					maxHeight: 160,
					drew: function() {
						//console.log('drew');
					},
					beforeDraw: function() {
						//console.log('beforeDraw');
					},
					success: function(result) {
						reader = new FileReader();
				
						reader.onload = function(re) {
							var thisFile = $(filesBlock).children('div.ddrdragfiles__file:not(.ddrdragfiles__file_already)').eq(countImages + iter),
								replaceFilehtml = '<div class="ddrdragfiles__file '+o.itemsGridCls+'">';
								replaceFilehtml += 	'<div class="ddrdragfiles__fileblock" style="background-image: url(\''+re.target.result+'\')">';
								replaceFilehtml +=		'<i class="ddrdragfiles__remove fa fa-trash" removeloadedfile="'+globCount+'" title="'+language[o.lang]['deleteFile']+'"></i>';
								if (o.showName) replaceFilehtml += 		'<span class="ddrdragfiles__filename" contenteditable>'+getFileName(files[filesIndexes[fIterator]]['name'], 1, o.nameLimit)+'</span>';
								replaceFilehtml +=	'</div>';
								replaceFilehtml += '</div>';
							
							$(thisFile).replaceWith(replaceFilehtml);
							
							if (o.onLoadItem != undefined && typeof o.onLoadItem == 'function') o.onLoadItem(files[filesIndexes[fIterator]], (countImages + iter), globCount);
							counter--;
							fIterator++;
							loadfile();
						};
						
						allFiles[globCount] = files[filesIndexes[fIterator]];
						filesToServer = Object.values(allFiles);
						reader.readAsDataURL(result);
						
						reader.onloadend = function() {
							if (o.filesData != undefined && typeof o.filesData == 'function') o.filesData(filesToServer);
						};
					},
					error: function(err) {
						console.log(err.message);
					},
				});
			}
			
		})();
		
		
		if (gettingFiles && ((firstDrop && !issetAlreadyFiles) || clearedDrop)) {
			var dzHtml = $(o.dropZone).html(),
				dzId = o.dropZone;
			$(o.dropZone).replaceWith('<label class="ddrdragfiles__dropzone ddrdragfiles__dropzone_has">'+dzHtml+'</label>');
			
			$(filesBlock).append('<div class="'+o.itemsGridCls+'" id="'+dzId.slice(1)+'"><label class="ddrdragfiles__dropitem" for="'+filesInput+'">'+o.dropItemHtml+'</label></div>');
			
			o.dropZone = dzId;
			firstDrop = false;
			clearedDrop = false;
			disableDrop();
		}
		
		if (o.onDrop != undefined && typeof o.onDrop == 'function') o.onDrop(o.dropZone, countImages, lastIter, files);
	}
	
	
	
	
	
	// Удаление файлов
	$('body').on(tapEvent, '[removeloadedfile]', function(e) {
		e.preventDefault();
		var thisIndex = $(this).attr('removeloadedfile');
		$(this).closest('.ddrdragfiles__file').remove();
		delete(allFiles[thisIndex]);
		
		filesToServer = Object.values(allFiles);
		
		if (filesToServer.length == 0) document.getElementById(filesInput).value = "";
		
		if ($(filesBlock).children('div.ddrdragfiles__file').length == 0) clearDrop();
		
		if (o.filesData != undefined && typeof o.filesData == 'function') o.filesData(filesToServer);
	});
	
	
	
	// Удаление уже добавленных файлов
	$('body').on(tapEvent, '[removealireadyfile]', function(e) {
		e.preventDefault();
		var thisId = $(this).attr('removealireadyfile');
		$(this).closest('.ddrdragfiles__file_already').remove();
		for (var i = 0; i < alreadyFilesNames.length; i++) {
			if (alreadyFiles[i]['id'] == thisId) alreadyFilesNames.splice(i, 1);
		}
		
		if ($(filesBlock).children('div.ddrdragfiles__file').length == 0) {
			console.log('clearDrop');
			clearDrop();
		}
		
		if (o.deleteAlready != undefined && typeof o.deleteAlready == 'function') o.deleteAlready(thisId);
	});
	
	
	function clearDrop() {
		$('.ddrdragfiles__dropzone').replaceWith('<label id="'+o.dropZone.slice(1)+'" class="ddrdragfiles__dropzone ddrdragfiles__dropzone_empty" for="'+filesInput+'"><div id="'+filesBlock.slice(1)+'" class="drow dgutter-5 dgutter-sm-10 dgutter-ml-15 ddrdragfiles__files"></div>'+emptyDropHtml+'</label>');
		firstDrop = true;
		clearedDrop = true;
	}
	
	
	return {
		clear: function() {
			allFiles = {},
			alreadyFiles = [],
			issetAlreadyFiles = false,
			alreadyFilesNames = [],
			firstDrop = true,
			clearedDrop = true;
			clearDrop();
			console.log('function clear');
		}
	};
};