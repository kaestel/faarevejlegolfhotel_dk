if(navigator.userAgent.match(/(AppleWebKit)[^$]+(Mobile)/i) && !navigator.userAgent.match(/ipad/i)) {
	document.write('<style type="text/css">@import url(/css/mobile.css);</style>');
	document.onload = scrollTo(1,0);
}

var Util = new Object();

// Compiles mailto link based on name and domain
Util.otliam = function(name, domain){
	document.write('<a href="mailto:'+name+'@'+domain+'">'+name+"@"+domain+'</a>');
}

Util.quicktime = function(url, width, height, name, id) {
	var string;
	name = name ? name : "quicktime_" + new Date().getHours() + "_" + new Date().getMinutes() + "_" + new Date().getMilliseconds();
	id = id ? id : name;

	string = '<div class="object">';
	if(Util.explorer()) {
		string += '<object width="'+width+'" height="'+(height+30)+'" type="video/x-ms-wmv" data="'+url+'">';
		string += '<param name="src" value="'+url+'.avi" />';
		string += '<param name="controller" value="true" />';
		string += '<param name="autoplay" value="true" />';
		string += '<param name="scale" value="tofit" />';
		string += '</object>';
	}
	else {
		string += '<embed src="'+url+'.m4v" width="'+width+'" height="'+height+'" type="video/quicktime" controller="true" autoplay="true" scale="tofit" cache="true" pluginspage="http://www.apple.com/quicktime/download/" />';
	}
	string += '</div>';

	document.write(string);
}

// Browser definition utilities
Util.explorer = function() {
	return (document.all) ? true : false;
}
Util.safari = function() {
	return (navigator.appVersion.indexOf("Safari") >= 0) ? true : false;
}
Util.firefox = function() {
	return (navigator.userAgent.indexOf("Firefox") >= 0) ? true : false;
}
Util.opera = function() {
	return (navigator.userAgent.indexOf("Opera") >= 0) ? true : false;
}