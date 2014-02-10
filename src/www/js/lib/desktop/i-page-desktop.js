Util.Objects["page"] = new function() {
	this.init = function(page) {

		// main elements
		// header element
		page.hN = u.qs("#header", page);

		// content element
		page.cN = u.qs("#content", page);

		// navigation element
		page.nN = u.qs("#navigation", page);
		if(page.nN) {
			// move navigation in front of content node in the DOM
			page.nN = page.insertBefore(page.nN, page.cN);
		}

		// footer element
		page.fN = u.qs("#footer", page);


	}
}

u.e.addDOMReadyEvent(u.init)
