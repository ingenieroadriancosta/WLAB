// InfoFuncs
		
		
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////

	function getallinfobrowser(){
	        var today = new Date();
            var date = ""+today.getFullYear()+'/'+(today.getMonth()+1)+'/'+today.getDate();
            var time = ""+today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
			var Str2Ret = 
				"__TRO__" +
				
				"__TDO__" + date + "__TDC__" +
				"__TDO__" + time + "__TDC__" +
				
				
				
				"__TDO__" + getOSName() + "__TDC__" +
				"__TDO__" + getBrowserName() + "__TDC__" +
				//"__TDO__" + navigator.language + "__TDC__" +
				//"__TDO__" + navigator.languages + "__TDC__" +
				"__TDO__" + navigator.userAgent + "__TDC__" +
				"__TDO__" + (isMobile() ? 'Mobile' : 'Desktop') + "__TDC__" +
				//"__TDO__" + (document.referrer || 'N/A') + "__TDC__" +
				"__TDO__" + navigator.onLine + "__TDC__" +
				"__TDO__" + Intl.DateTimeFormat().resolvedOptions().timeZone + "__TDC__" +
				"__TDO__" + screen.width + ' x ' + screen.height + "__TDC__" +
				"__TDO__" + navigator.cookieEnabled + "__TDC__" +
				"__TRC__"
				;
			//document.write( Str2Ret );
			//
			//
			var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                   // Typical action to be performed when the document is ready:
                   //document.getElementById("demo").innerHTML = xhttp.responseText;
                   //alert( xhttp.responseText );
                }
            };
            xhttp.open("GET", 
                "https://adriancosta.000webhostapp.com/WUSERVISIT.php?p="+
                Str2Ret
            , true);
            xhttp.send();
			//
			//alert( Str2Ret );
			//
			//
			//
			return Str2Ret;
	}
function isMobile() {
	return /Mobi/.test(navigator.userAgent);
}

function getBrowserName() {
	// Opera 8.0+
	if ((window.opr && window.opr.addons)
		|| window.opera
		|| navigator.userAgent.indexOf(' OPR/') >= 0) {
		return 'Opera';
	}

	// Firefox 1.0+
	if (typeof InstallTrigger !== 'undefined') {
		return 'Firefox';
	}

	// Safari 3.0+ "[object HTMLElementConstructor]"
	if (/constructor/i.test(window.HTMLElement) || (function (p) {
		return p.toString() === '[object SafariRemoteNotification]';
	})(!window['safari'])) {
		return 'Safari';
	}

	// Internet Explorer 6-11
	if (/* @cc_on!@*/false || document.documentMode) {
		return 'Internet Explorer';
	}

	// Edge 20+
	if (!(document.documentMode) && window.StyleMedia) {
		return 'Microsoft Edge';
	}
	
	// Chrome
	if (window.chrome) {
		return 'Chrome';
	}
}

function getOSName() {
	var os;
	if (isMobile()) {
		if (/Windows/.test(navigator.userAgent)) {
			os = 'Windows';
			if (/Phone 8.0/.test(navigator.userAgent)) {
				os += ' Phone 8.0';
			} else if (/Phone 10.0/.test(navigator.userAgent)) {
				os += ' Phone 10.0';
			}
		} else if (/Android/.test(navigator.userAgent)) {
			function androidVersion() {
				if (/Android/.test(navigator.appVersion)) {
					var v = (navigator.appVersion).match(/Android (\d+).(\d+)/);
					return v;
				}
			}

			var ver = androidVersion();
			os = ver[0];
		} else if (/iPhone;/.test(navigator.userAgent)) {
			function iOSversion() {
				if (/iP(hone|od|ad)/.test(navigator.appVersion)) {
					var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
					return [parseInt(v[1], 10), parseInt(v[2], 10), parseInt(v[3] || 0, 10)];
				}
			}

			var ver = iOSversion();
			os = 'iOS ' + ver[0] + '.' + ver[1] + '.' + ver[2];
		} else if (/iPad;/.test(navigator.userAgent)) {
			function iOSversion() {
				if (/iP(hone|od|ad)/.test(navigator.appVersion)) {
					var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
					return [parseInt(v[1], 10), parseInt(v[2], 10), parseInt(v[3] || 0, 10)];
				}
			}

			var ver = iOSversion();
			os = 'iOS ' + ver[0] + '.' + ver[1] + '.' + ver[2];
		} else if (/BBd*/.test(navigator.userAgent)) {
			os = 'BlackBerry';
		}
	} else {
		if (/Windows/.test(navigator.userAgent)) {
			os = 'Windows';
			if (/5.1;/.test(navigator.userAgent)) {
				os += ' XP';
			} else if (/6.0;/.test(navigator.userAgent)) {
				os += ' Vista';
			} else if (/6.1;/.test(navigator.userAgent)) {
				os += ' 7';
			} else if (/6.2/.test(navigator.userAgent)) {
				os += ' 8';
			} else if (/10.0;/.test(navigator.userAgent)) {
				os += ' 10';
			}

			if (/64/.test(navigator.userAgent)) {
				os += ' 64-bit';
			} else {
				os += ' 32-bit';
			}
		} else if (/Macintosh/.test(navigator.userAgent)) {
			os = 'Macintosh';
			if (/OS X/.test(navigator.userAgent)) {
				os += ' OS X';
			}
		}
	}

	return os;
}

function getBrowser() {
	return {
		os: getOSName(),
		browser: getBrowserName(),
		language: navigator.language,
		languages: navigator.languages,
		user_agent: navigator.userAgent,
		device: isMobile() ? 'Mobile' : 'Desktop',
		referrer: document.referrer || 'N/A',
		online: navigator.onLine,
		timezone: Intl.DateTimeFormat().resolvedOptions().timeZone,
		screen_resolution: screen.width + ' x ' + screen.height,
		cookie_enabled: navigator.cookieEnabled,
	};
}
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////