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


		// global resize handler 
		page.resized = function() {
//			u.bug("page resized: " + u.browserW()+"x"+u.browserH());

			if(u.qs(".photo_wrapper")) {
				u.as(u.qs(".photo_wrapper"), "height", page.offsetHeight+"px", false);

			}
		}

		// set resize handler
		u.e.addEvent(window, "resize", page.resized);


	}
}

u.e.addDOMReadyEvent(u.init)
