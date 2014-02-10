Util.Objects["front"] = new function() {
	this.init = function(scene) {

		scene.photo_list = u.ae(page, "ul", {"class":"photos"});

		li = u.ae(scene.photo_list, "li", {"class":"photo"});
		u.as(li, "backgroundImage", "url(/img/desktop/pi_birdview.jpg)");

		li = u.ae(scene.photo_list, "li", {"class":"photo"});
		u.as(li, "backgroundImage", "url(/img/desktop/pi_entrance.jpg)");

		li = u.ae(scene.photo_list, "li", {"class":"photo"});
		u.as(li, "backgroundImage", "url(/img/desktop/pi_restaurant.jpg)");

		u.as(page, "height", scene.photo_list.offsetHeight+"px");
		

	}
}


Util.Objects["hotel"] = new function() {
	this.init = function(scene) {

		scene.photo_list = u.ae(page, "ul", {"class":"photos"});

		li = u.ae(scene.photo_list, "li", {"class":"photo"});
		u.as(li, "backgroundImage", "url(/img/desktop/pi_rooms_1.jpg)");

		li = u.ae(scene.photo_list, "li", {"class":"photo"});
		u.as(li, "backgroundImage", "url(/img/desktop/pi_rooms_2.jpg)");

		u.as(page, "height", scene.photo_list.offsetHeight+"px");
		

	}
}
