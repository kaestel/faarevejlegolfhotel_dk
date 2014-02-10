Util.Objects["front"] = new function() {
	this.init = function(scene) {

		scene.photo_sequence = [
			"/img/desktop/pi_entrance_1.jpg",
			"/img/desktop/pi_restaurant_4.jpg",
			"/img/desktop/pi_local_2.jpg",
			"/img/desktop/pi_hotel_1.jpg"
		];

		u.createPhotoList(scene, scene.photo_sequence);
	}
}

Util.Objects["hotel"] = new function() {
	this.init = function(scene) {

		scene.photo_sequence = [
			"/img/desktop/pi_entrance_2.jpg",
			"/img/desktop/pi_restaurant_3.jpg",
			"/img/desktop/pi_restaurant_5.jpg",
			"/img/desktop/pi_rooms_2.jpg"
		];

		u.createPhotoList(scene, scene.photo_sequence);
	}
}

Util.Objects["rooms"] = new function() {
	this.init = function(scene) {

		scene.photo_sequence = [
			"/img/desktop/pi_rooms_1.jpg",
			"/img/desktop/pi_hotel_2.jpg",
			"/img/desktop/pi_rooms_2.jpg"
		];

		u.createPhotoList(scene, scene.photo_sequence);
	}
}

Util.Objects["parties"] = new function() {
	this.init = function(scene) {

		scene.photo_sequence = [
			"/img/desktop/pi_restaurant_5.jpg",
			"/img/desktop/pi_restaurant_9.jpg",
			"/img/desktop/pi_restaurant_2.jpg"
		];

		u.createPhotoList(scene, scene.photo_sequence);
	}
}

Util.Objects["conference"] = new function() {
	this.init = function(scene) {

		scene.photo_sequence = [
			"/img/desktop/pi_entrance_2.jpg",
			"/img/desktop/pi_restaurant_3.jpg",
			"/img/desktop/pi_entrance_3.jpg",
			"/img/desktop/pi_restaurant_4.jpg",
			"/img/desktop/pi_birdview_2.jpg"
		];

		u.createPhotoList(scene, scene.photo_sequence);
	}
}

Util.Objects["restaurant"] = new function() {
	this.init = function(scene) {

		scene.photo_sequence = [
			"/img/desktop/pi_restaurant_1.jpg",
			"/img/desktop/pi_restaurant_6.jpg",
			"/img/desktop/pi_restaurant_3.jpg",
			"/img/desktop/pi_restaurant_4.jpg",
			"/img/desktop/pi_restaurant_5.jpg"
		];

		u.createPhotoList(scene, scene.photo_sequence);
	}
}

Util.Objects["prices"] = new function() {
	this.init = function(scene) {

		scene.photo_sequence = [
			"/img/desktop/pi_local_2.jpg",
			"/img/desktop/pi_hotel_1.jpg",
			"/img/desktop/pi_entrance_3.jpg",
			"/img/desktop/pi_restaurant_5.jpg"
		];

		u.createPhotoList(scene, scene.photo_sequence);
	}
}


u.createPhotoList = function(scene, photo_list) {

	scene.photo_list = u.ae(page, "ul", {"class":"photos"});

	var i, li;
	for(i = 0; i < photo_list.length; i++) {
		li = u.ae(scene.photo_list, "li", {"class":"photo"});
		u.as(li, "backgroundImage", "url("+photo_list[i]+")");
	}

	u.as(page, "height", scene.photo_list.offsetHeight+"px");
}


