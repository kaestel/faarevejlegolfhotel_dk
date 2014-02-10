Util.Objects["page"] = new function() {
	this.init = function(page) {
		// e = page node in dom

//		alert("fisk")
//		u.s.Basic();

		var i, node;

		// remember home url (node may be moved around, altered or removed)
//		page.home_url = u.qs(".servicenavigation .front a").href;

		// main elements
		// header element
		page.hN = u.qs("#header", page);
		page.hN.page = page;
		// content element
		page.cN = u.qs("#content", page);
		page.cN.page = page;
		// navigation element
		page.nN = u.qs("#navigation", page);
		if(page.nN) {
			// move navigation in front of content node in the DOM
			page.nN = page.insertBefore(page.nN, page.cN);
			page.nN.page = page;
		}
		// footer element
		page.fN = u.qs("#footer", page);
		page.fN.page = page;

	}
}

u.e.addDOMReadyEvent(u.init)
