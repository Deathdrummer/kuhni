let isIos=/iPhone|iPad|iPod/i.test(navigator.userAgent);tapEvent="ontouchstart"in window&&!isIos?"tap":"click",breakpoints={},["SM","MD","LG","XL"].forEach(function(e){var t=parseInt($(":root").css("--breakpoint-"+e.toLowerCase()));window["breakpoint"+e]=t,breakpoints[e.toLowerCase()]=t}),getCurrentBreakPoint=function(e){let i=["xs","sm","md","lg","xl"],l=$(window).width(),o;return i.forEach(function(e,t){var n=breakpoints[e]||0,t=breakpoints[i[t+1]]||null;if(l>=n&&(null==t||l<t))return o=e,!1}),e&&"object"==typeof e&&e[o]||o},window.thisDevice="desktop",/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)&&(window.thisDevice="mobile"),tapEventInfo=function(e,t){var n,i,l="",e="mobile"!=thisDevice||isIos?(i=e.target.attributes||!1,e.target.className||!1):(i=null!=e.changedTouches&&e.changedTouches[0].target.attributes,null!=e.changedTouches&&e.changedTouches[0].target.className);if(i.length&&$.each(i,function(e,t){l+=" "+t.name}),n={classes:!(!e||"string"!=typeof e)&&e.split(" "),attributes:!(!l||"string"!=typeof l)&&l.trim().split(" ")},null!=t&&t.class){if(n.classes){var o=!1;return"object"==typeof t.class?($.each(t.class,function(e,t){-1!=n.classes.indexOf(t)&&(o=!0)}),o):-1!=n.classes.indexOf(t.class)}return!1}if(null!=t&&t.attribute){if(n.attributes){o=!1;return"object"==typeof t.attribute?($.each(t.attribute,function(e,t){-1!=n.attributes.indexOf(t)&&(o=!0)}),o):-1!=n.attributes.indexOf(t.attribute)}return!1}return!(!n.classes&&!n.attributes)&&n},$.fn.replaceTag=function(t){let o=$(this);for(;0<o.length;o++){let e=$(o[0]).html(),l="";for(let e,t=0,n=o[0].attributes,i=n.length;t<i;t++)e=n[t],l+=" "+e.nodeName+'="'+e.nodeValue+'"';$(o[0]).replaceWith("<"+t+l+">"+e+"</"+t+">")}},pageReload=function(){location.reload(),location.reload(),window.location.reload(),window.location.reload(),window.location.reload(),window.location.reload(),self.location.reload(),self.location.reload(),self.location.reload(),self.location.reload(),window.location=window.location},$.fn.imgLoaded=function(e){var t=new Image,n=$(this).attr("src");t.onload=function(){"function"==typeof e&&e()},t.src=n},Counter=function(e,t,n){var i=e||0;return function(e){return i=null!=e?e:i,null!=t&&"+"!=t||"-"==t?i-=n:i+=n}},searchInObject=function(e,n,i){return e.findIndex(function(e,t){if(e[n]==i)return t})},isJson=function(e){if(null==e||void 0===e)return!1;try{JSON.parse(e)}catch(e){return!1}return!0},isInt=function(e){return null!=e&&void 0!==e&&("string"!=typeof e?Number(e)===e&&e%1==0:Number(e)+""===e)},isFloat=function(e){return null!=e&&void 0!==e&&("string"!=typeof e?Number(e)===e&&e%1!=0:Number(e)+""===e&&Number(e)%1!=0)},count=function(e){var t=e.length;return null!=t?t:Object.values(e).length},hasIn=function(e,t,n){if(null==t||null==e||0==e.length)return!1;if(null==n||1!=n)return-1!=(i=e.indexOf(t))&&i;var i,n=Object.keys(e);return-1!=(i=n.indexOf(t))&&e[n[i]]},getFileName=function(e,t,n){var i=e.split("."),e=i.pop(),i=i.join(".");return null==t||1==t?(null!=n&&isInt(n)&&i.length>n?i.substr(0,n):i)||e:2==t?e:void 0},$.fn.disableDrop=function(l,o){function t(e,t){if(l&&"function"!=typeof l){var n=!1;if("object"==typeof l)for(var i=0;i<l.length;i++)0!=$(e.target).hasClass(l[i])&&(n=!0);else 0!=$(e.target).hasClass(l)&&(n=!0);n||(e.preventDefault(),t&&o&&"function"==typeof o&&o(e.target))}else e.preventDefault(),t&&l&&"function"==typeof l&&l(e.target)}$(this).off(tapEvent).on(tapEvent,function(e){t(e,!0)}),$(this).off("dragover").on("dragover",function(e){t(e)}),$(this).off("dragleave").on("dragleave",function(e){t(e)}),$(this).off("drop").on("drop",function(e){t(e,!0)})},$.fn.setAttrib=function(e,t){return null!=e&&(0!=$(this).length&&($(this).attr(e,t||""),void $(this)[0].setAttribute(e,t||"")))},$.fn.removeAttrib=function(e){return null!=e&&(0!=$(this).length&&($(this).prop(e,!1),$(this).removeAttr(e),void $(this)[0].removeAttribute(e)))},$.fn.hasAttr=function(e){e=$(this).attr(e);return void 0!==e&&!1!==e},disableScroll=function(){var e=[self.pageXOffset||document.documentElement.scrollLeft||document.body.scrollLeft,self.pageYOffset||document.documentElement.scrollTop||document.body.scrollTop];$("html").setAttrib("scroll-position",e.join("|")),$("html").setAttrib("previous-overflow",$("html").css("overflow")),$("html").css("overflow","hidden"),window.scrollTo(e[0],e[1])},enableScroll=function(){var e=$("html").attr("scroll-position");e&&(e=e.split("|"),$("html").css("overflow",$("html").attr("previous-overflow")),$("html").removeAttrib("scroll-position"),$("html").removeAttrib("previous-overflow"),$("html").removeAttrib("style"),window.scrollTo(e[0],e[1]))},$.fn.errorLabel=function(e){var t=".field, .textarea, .select, .file, .ddrselect";0==$(this).closest(t).length?(0<$(this).siblings("span.error").length?$(this).siblings("span.error").html(e):$(this).after('<span class="error">'+e+"</span>"),$(this).addClass("error")):(0==$(this).closest(t).find("span.error").length?$(this).closest(t).append('<span class="error">'+e+"</span>"):$(this).closest(t).find("span.error").html(e),$(this).closest(t).addClass("error"))},$.fn.scrollFix=function(e){var t,n=this,i=$.extend({cls:"fixed",pos:200},e),l=$(window).scrollTop();l>i.pos&&!$(n).hasClass(i.cls)?$(n).addClass(i.cls):l<=i.pos&&$(n).hasClass(i.cls)&&$(n).removeClass(i.cls),$(window).scroll(function(e){clearTimeout(t),t=setTimeout(function(){(l=$(window).scrollTop())>i.pos&&!$(n).hasClass(i.cls)?$(n).addClass(i.cls):l<=i.pos&&$(n).hasClass(i.cls)&&$(n).removeClass(i.cls)},10)})},random=function(e,t){return Math.floor(Math.random()*(t-e+1))+e},generateCode=function(e){for(var t=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"],n="",i=0;i<e.length;i++)"l"==e.substr(i,1)?n+=t[random(0,25)]:"L"==e.substr(i,1)?n+=t[random(0,25)].toUpperCase():"n"==e.substr(i,1)&&(n+=random(0,9));return n},getContenteditable=function(e){var t=$(e).html(),e=document.createElement("div"),t=t.replace(/<br><br>/gu,"\n").replace(/<div><br><\/div>/gu,"\n").replace(/<br>/gu,"\n").replace(/<div>/gu,"\n").replace(/<\/div>/gu,"").replace(/&nbsp;/gu,"");return e.innerHTML=t,(e.textContent||e.innerText).trim()||null},getArgs=function(e){var n,t=location.search.substr(1,location.search.length).split("&"),i={};return $.each(t,function(e,t){return""==t||(n=t.split("="),void(i[n[0]]=n[1]))}),null!=e&&null!=i[e]?i[e]:(null==e||null!=i[e])&&(0<Object.keys(i).length?i:null)},urlExists=function(e){var t=new XMLHttpRequest;return t.open("HEAD",e,!1),t.send(),404!=t.status},showError=function(e){var t,n=generateCode("lLLnnn");e.responseText&&(t="<div>"+e.responseText+"</div>",e=0<$(t).find("#container").length?'<div class="show_error"><div>'+$(t).find("#container").html()+'</div><button id="'+n+'">Закрыть</button></div>':'<div class="show_error"><div>'+e.responseText+'</div><button id="'+n+'">Закрыть</button></div>',$("body").append(e),$("#"+n).on(tapEvent,function(){$(this).parent(".show_error").remove()}))},getAjaxHtml=function(){let e=arguments;var t="string"==typeof e[0]&&("/"!=e[0].substr(0,1)&&"http://"!=e[0].substr(0,7)&&"https://"!=e[0].substr(0,7)?"/"+e[0]:e[0]);if(!t)throw new Error("getAjaxHtml Ошибка! не передан URL");var n="object"==typeof e[1]&&e[1];let i=n||"function"!=typeof e[1]?void 0!==e[2]&&"function"==typeof e[2]&&e[2]:e[1],l="function"==typeof e[1]&&"function"==typeof e[2]?e[2]:"function"==typeof e[2]&&"function"==typeof e[3]&&e[3];$.ajax({url:t,method:"POST",data:n,dataType:"html",success:function(e){(e=e.trim())&&i?i(e,!0):i&&i('<p class="empty center">Нет данных</p>',!1)},error:function(e){notify("Системная ошибка!","error"),showError(e)},complete:function(){l&&l()}})},getSectionData=function(t,n){if(null==t)return!1;let e=t.data||{};e.json=1,t.section&&(e.section=t.section),t.template&&(e.template=t.template),$.ajax({url:location.href,method:"POST",data:e,dataType:t.template?"html":"json",success:function(e){t.template?(html=e.trim(),html&&n?n(html,!0):n&&n('<p class="empty center">Нет данных</p>',!1)):n(e)},error:function(e){notify("Системная ошибка!","error"),showError(e),n(!1)}})},$.fn.changeInputs=function(n){if(0==this.length)return console.warn("changeInputs ошибка! Селектор: не найден!"),!1;if(null==n||"function"!=typeof n)return console.warn("changeInputs ошибка! callback функция не задана!"),!1;var i;function l(e){return{t:e.type,k:e.keyCode,s:e.currentTarget.localName,st:null==e.currentTarget.type?"contenteditable":"select-one"==e.currentTarget.type?e.currentTarget.type.replace("select-one","select"):e.currentTarget.type,isShiftKey:e.shiftKey,isCtrlKey:e.ctrlKey,codeShift:16==e.keyCode,codeCtrl:17==e.keyCode,codeEnter:13==e.keyCode,codeX:88==e.keyCode,codeV:86==e.keyCode}}function o(e,t){n(e,t)}$(this).on("change",'select, input[type="checkbox"], input[type="radio"], input[type="color"], input[type="number"]',function(e){o(this,l(e))}),$(this).on("keyup keydown","input, textarea, [contenteditable]",function(e){var t=this,n=l(e);-1==["text","password","email","tel","number"].indexOf(n.st)&&("textarea"!=n.s||n.codeShift||n.codeCtrl)&&"contenteditable"!=n.st||("keydown"==n.t?i="contenteditable"==n.st?$(t).html():$(t).val():"keyup"==n.t&&(e="contenteditable"==n.st?$(t).html():$(t).val(),(i!==e||"contenteditable"==n.st&&n.codeEnter)&&(i=e,o(t,n))))})},initEditors=function(){var e=!1,t=[],n=[];for(i=0;i<100;i++)t.push(""+i),n.push(i+"px");options={disableDragAndDrop:!0,height:500,lang:"en-US",emptyPara:"",lineHeights:n,fontSizes:t,codeviewFilter:!1,codeviewIframeFilter:!0,disableGrammar:!0,codemirror:{theme:"monokai"},toolbar:[["font",["bold","italic","underline","clear"]],["height",["height"]],["style",["style"]],["fontsize",["fontsize"]],["fontname",["fontname"]],["color",["color"]],["para",["ul","ol","paragraph"]],["table",["table"]],["insert",["link","image","video"]],["view",["fullscreen","codeview"]]],callbacks:{onChange:function(e){$(this).closest("tr").find("[save], [update]").length&&$(this).closest("tr").find("[save], [update]").removeAttrib("disabled")}},buttons:{image:function(n){return $.summernote.ui.button({contents:'<i class="note-icon-picture"></i>',tooltip:"тултип",className:"editorfile",click:function(){$("#clientFileManager:not(.visible)").addClass("visible"),currentDir=lscache.get("clientmanagerdir")||!1,currentDir&&!e&&(getAjaxHtml("filemanager/files_get",{directory:currentDir,filetypes:"png|jpg|jpeg|gif|ico|bmp",client:1},function(e){$("#clientFilemanagerContentFiles").html(e)}),getAjaxHtml("filemanager/dirs_get",{current_dir:currentDir},function(e){$("#clientFilemanagerDirs").html(e)}),e=!0),$("#clientFilemanagerContentFiles").off(tapEvent,".image").on(tapEvent,".image",function(){var e=$(this).closest(".clientfilemanager__file"),t=$(e).attr("dirfile");$(e).attr("namefile"),$(this).find("img").attr("src");n.invoke("editor.insertImage",location.origin+"/public/filemanager/"+t),$("#clientFileManager").removeClass("visible")})}}).render()}}},$("body").find("[editor]:not(.activated)").summernote(options),$("body").find("[editor]").addClass("activated")},ddrInitTabs=function(){var e=location.hash.substr(1,location.hash.length).split("."),t=e[0];null!=e[1]?($("#"+t).find(".tabstitles:not(.sub) li").removeClass("active"),$("#"+t).find(".tabstitles:not(.sub) li#"+e[1]).addClass("active"),$("#"+t).find(".tabstitles:not(.sub)").siblings(".tabscontent").find("[tabid]").removeClass("visible"),$("#"+t).find(".tabstitles:not(.sub)").siblings(".tabscontent").find('[tabid="'+e[1]+'"]').addClass("visible")):($("#"+t).find(".tabstitles:not(.sub) li:first").addClass("active"),$("#"+t).find(".tabstitles:not(.sub)").siblings(".tabscontent").find("[tabid]:first").addClass("visible")),null!=e[2]?0<$("#"+t).find(".tabstitles:not(.sub)").siblings(".tabscontent").find(".tabstitles.sub").length&&$("#"+t).find(".tabstitles:not(.sub)").siblings(".tabscontent").find(".tabstitles.sub").each(function(){0<$(this).children("li#"+e[2]).length?($(this).children("li").removeClass("active"),$(this).children("li#"+e[2]).addClass("active"),$(this).siblings(".tabscontent").find("[tabid]").removeClass("visible"),$(this).siblings(".tabscontent").find('[tabid="'+e[2]+'"]').addClass("visible")):($(this).children("li:first").addClass("active"),$(this).siblings(".tabscontent").find("[tabid]:first").addClass("visible"))}):0<$("#"+t).find(".tabstitles:not(.sub)").siblings(".tabscontent").find(".tabstitles.sub").length&&$("#"+t).find(".tabstitles:not(.sub)").siblings(".tabscontent").find(".tabstitles.sub").each(function(){$(this).children("li").removeClass("active"),$(this).children("li:first").addClass("active"),$(this).siblings(".tabscontent").find("[tabid]").removeClass("visible"),$(this).siblings(".tabscontent").find("[tabid]:first").addClass("visible")})},clientFileManager=function(e){var i,t,n=!1,l=!1,o={all:"png|jpg|jpeg|gif|ico|bmp|mp4|avi|mov|wmv|mpeg|3gp|flv|m4v|mpg|swf|mp3|wav|wma|m3u|ogg|wav|wave|doc|docx|pdf|ppt|pptx|rtf|xls|xlsx|txt|glb|gltf|obj",images:"png|jpg|jpeg|gif|ico|bmp",threed:"glb|gltf|obj",videos:"mp4|avi|mov|wmv|mpeg|3gp|flv|m4v|mpg|swf",audios:"mp3|wav|wma|m3u|ogg|wav|wave",docs:"doc|docx|pdf|ppt|pptx|rtf|xls|xlsx|txt"},a=["#clientFileManager","[filemanager]",".editorfile"],s=$.extend({onOpenFilemanager:!1,onRemoveFile:!1,onChooseFile:!1},e);$("body").append('<div class="clientfilemanager" id="clientFileManager"><div class="clientfilemanager__dirs mb-2"><ul class="noselect" id="clientFilemanagerDirs"></ul></div><div class="clientfilemanager__files noselect" id="clientFilemanagerContentFiles"><p class="empty center">Выберите раздел</p></div></div>'),$("body").off(tapEvent,"[filemanager]").on(tapEvent,"[filemanager]",function(){return!(0<$(this).find("[fileremove]:hover, [filedelete]:hover").length)&&(t=lscache.get("clientmanagerdir")||!1,i=this,l&&l!=$(i).attr("filemanager")?(l=$(i).attr("filemanager")||0,getAjaxHtml("filemanager/files_get",{directory:t,filetypes:o[l]||l,client:1},function(e){$("#clientFilemanagerContentFiles").html(e)})):l=$(i).attr("filemanager")||0,void(0!=$("#clientFileManager").hasClass("visible")&&0!=$("#clientFileManager").length||(t&&!n&&(getAjaxHtml("filemanager/files_get",{directory:t,filetypes:o[l]||l,client:1},function(e){$("#clientFilemanagerContentFiles").html(e)}),getAjaxHtml("filemanager/dirs_get",{current_dir:t},function(e){$("#clientFilemanagerDirs").html(e)}),n=!0,null!=s.onOpenFilemanager&&"function"==typeof s.onOpenFilemanager&&s.onOpenFilemanager(i)),$("#clientFileManager").addClass("visible"))))}),$("body").off(tapEvent,"[fileremove], [filedelete]").on(tapEvent,"[fileremove], [filedelete]",function(e){var t=$(this).closest(".file");ext=$(t).find("[filemanager]").attr("filemanager"),noneImg="none.png",/images|jpg|png|jpeg|ico|bmp/.test(ext)&&(noneImg="none_img.png"),$(this)[0].hasAttribute("fileremove")?($(t).addClass("empty"),$(t).find("[filename]").text(""),$(t).find("[fileimage]").children("img").attr("src","./public/images/"+noneImg),$(t).find("[filesrc]").val(""),null!=s.onRemoveFile&&"function"==typeof s.onRemoveFile&&s.onRemoveFile(t)):$(this)[0].hasAttribute("filedelete")&&($(t).remove(),null!=s.onDeleteFile&&"function"==typeof s.onDeleteFile&&s.onDeleteFile())}),getAjaxHtml("filemanager/dirs_get",{current_dir:t},function(e){$("#clientFilemanagerDirs").html(e)}),$("#clientFilemanagerDirs").off(tapEvent,"[directory]:not(.disabled):not(.active)").on(tapEvent,"[directory]:not(.disabled):not(.active)",function(){var e=$(this).attr("directory");lscache.set("clientmanagerdir",e),$("#clientFilemanagerDirs").find("[directory]").removeClass("active"),$(this).addClass("active"),$("#clientFilemanagerContentFiles").addClass(" clientfilemanager__files_loading"),console.log("before"),getAjaxHtml("filemanager/files_get",{directory:e,filetypes:o[l]||l,client:1},function(e,t){console.log("after",t),$("#clientFilemanagerContentFiles").html(e),$("#clientFilemanagerContentFiles").removeClass("clientfilemanager__files_loading")})}),$("#clientFilemanagerContentFiles").off(tapEvent,".image").on(tapEvent,".image",function(){var e=$(this).closest(".clientfilemanager__file"),t=$(e).attr("dirfile"),n=$(e).attr("namefile"),e=$(this).find("img").attr("src");$(i).closest(".file").removeClass("empty"),$(i).closest(".file").find("[filesrc]").prop("value",t),$(i).closest(".file").find("[fileimage]").children("img").attr("src",e),$(i).closest(".file").find("[filename]").text(n),$("#clientFileManager").removeClass("visible"),null!=s.onChooseFile&&"function"==typeof s.onChooseFile?s.onChooseFile(i):$(i).addClass("changed")}),$("body").on(tapEvent,function(){0==$(a.join(":hover, ")+":hover").length&&$("#clientFileManager").hasClass("visible")&&$("#clientFileManager").removeClass("visible")}),$("#clientFileManager").on("mouseenter",function(){disableScroll()}),$("#clientFileManager").on("mouseleave",function(){enableScroll()})},notify=function(e,t,n){icon="fa fa-info","success"==(t=t||"success")?icon="fa fa-check-circle":"error"==t?icon="fa fa-exclamation-triangle":"info"==t&&(icon="fa fa-info-circle"),$.notify.addStyle("ddr",{html:'<div><i class="'+icon+'"></i><span data-notify-text/></div>'}),$.notify(e,{clickToHide:!0,autoHide:!0,autoHideDelay:n?1e3*n:5e3,arrowShow:!1,arrowSize:15,position:"top right",style:"ddr",className:t,showAnimation:"fadeIn",showDuration:200,hideAnimation:"fadeOut",hideDuration:100,gap:2})};