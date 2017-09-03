(function($){
	var themePath = "/wp-content/themes/zp/";
	window.sourceLoader = {
		debug: false,
		devel: false,
		historyLoaded: {
			scripts: [],
			css: []
		},
		scripts: {
			main: themePath + "inc/js/main.js",
			filterHandler: themePath + "inc/js/filter-handler.js",
			common: themePath + "js/common.js",
			libs: themePath + "js/libs.js"
		},
		css: {
			mainSass: themePath + 'inc/css/main.css',
			headerSass: themePath + 'inc/css/header.css',
			spriteSass: themePath + 'inc/css/sprite.css',
			headerCss: themePath + 'css/header.min.css'
		},
        /**
         * Динамическая загрузка скрипта
         * @param src
         * @param callback
         */
         loadScript: function (src, callback) {
         	if (sourceLoader.historyLoaded.scripts.indexOf(src) >= 0) {
         		if (callback && typeof(callback) === "function") {
         			callback();
         		}
         		return false;
         	}
         	if (this.debug) {
         		console.log('load Script ' + src + ' (' + sourceLoader.scripts[src] + ')');
         	}
         	var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
         	s.type = 'text/javascript';
         	s.charset = 'UTF-8';
         	s.async = false;
         	sourceLoader.historyLoaded.scripts.push(src);
         	s.src = sourceLoader.scripts[src];
         	if (callback && typeof(callback) === "function") {
         		s.onload = callback;
         	}
         	var h = d[g]('body')[0];
         	h.appendChild(s);
         },
        /**
         * Динамическая загрузка стилей
         * @param src
         * @param async
         * @param callback
         */
         loadStyle: function (src, async, callback) {
         	if(this.devel){
         		async = false;
         	}
         	if (sourceLoader.historyLoaded.css.indexOf(src) >= 0) {
         		if (callback && typeof(callback) === "function") {
         			callback();
         		}
         		return false;
         	}
         	if (this.debug) {
         		var debugAsync = "";
         		if (async) {
         			var debugAsync = "Async "
         		}
         		console.log(debugAsync + 'load Style ' + src + ' (' + sourceLoader.css[src] + ')');
         	}

         	sourceLoader.historyLoaded.css.push(src);
         	if (async) {
         		$(document).load(sourceLoader.css[src], function (response, status, xhr) {
         			var lazyStyle = document.createElement('style');
         			lazyStyle.innerHTML = xhr.responseText;
         			document.head.appendChild(lazyStyle);
         			if (callback && typeof(callback) === "function") {
         				callback();
         			}
         		});
         	} else {
         		var d = document, s = d.createElement('link'), g = 'getElementsByTagName';
         		s.rel = 'stylesheet';
         		s.href = sourceLoader.css[src];
         		var h = d[g]('body')[0];
         		h.appendChild(s);
         	}
         },
         initPage: function (devel) {
         	if(devel){
         		this.debug = true;
         		this.devel = true;
         	}
         	if (this.debug) {
         		console.log('init Page ');
         	}





            sourceLoader.loadStyle("mainSass", true); //styles from inc/css/header.css - hardcoded in header.php
            sourceLoader.loadStyle("headerSass", true);
            sourceLoader.loadStyle("spriteSass", true);

            sourceLoader.loadStyle("headerCss", true);

            sourceLoader.loadScript("main", function(){});
            sourceLoader.loadScript("filterHandler", function(){});
            sourceLoader.loadScript("libs", function(){});
            sourceLoader.loadScript("common", function(){});
         },

      };

      $(document).ready(function () {
      	var devel = false;
      	if($('.enable-develop').length > 0){
      		devel = true;
      	}
      	sourceLoader.initPage(devel);

      });




   })(jQuery)