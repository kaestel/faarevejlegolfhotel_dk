Util.Objects["front"] = new function() {
	this.init = function(scene) {
		scene.photos_priority = [2,22,8,5,12]; 
		u.createSlideShow(scene, scene.photos_priority);
	}
}

Util.Objects["hotel"] = new function() {
	this.init = function(scene) {
		scene.photos_priority = [3,11,13,19]; 
		u.createSlideShow(scene, scene.photos_priority);
	}
}

Util.Objects["rooms"] = new function() {
	this.init = function(scene) {
		scene.photos_priority = [18,6,19]; 
		u.createSlideShow(scene, scene.photos_priority);
	}
}

Util.Objects["scene"] = new function() {
	this.init = function(scene) {
		scene.photos_priority = false; 
		u.createSlideShow(scene, scene.photos_priority);
	}
}

// 
// Util.Objects["conference"] = new function() {
// 	this.init = function(scene) {
// 		scene.photos_priority = false; 
// 		u.createSlideShow(scene, scene.photos_priority);
// 	}
// }
// 
// Util.Objects["restaurant"] = new function() {
// 	this.init = function(scene) {
// 		scene.photos_priority = false; 
// 		u.createSlideShow(scene, scene.photos_priority);
// 	}
// }
// 
// Util.Objects["prices"] = new function() {
// 	this.init = function(scene) {
// 		scene.photos_priority = false; 
// 		u.createSlideShow(scene, scene.photos_priority);
// 	}
// }
// 
// Util.Objects["golf"] = new function() {
// 	this.init = function(scene) {
// 		scene.photos_priority = false; 
// 		u.createSlideShow(scene, scene.photos_priority);
// 	}
// }
// 
// Util.Objects["golfoffers"] = new function() {
// 	this.init = function(scene) {
// 		scene.photos_priority = false; 
// 		u.createSlideShow(scene, scene.photos_priority);
// 	}
// }
// 
// Util.Objects["golf4"] = new function() {
// 	this.init = function(scene) {
// 		scene.photos_priority = false; 
// 		u.createSlideShow(scene, scene.photos_priority);
// 	}
// }
// 
// Util.Objects["terms"] = new function() {
// 	this.init = function(scene) {
// 		scene.photos_priority = false; 
// 		u.createSlideShow(scene, scene.photos_priority);
// 	}
// }
// 
// Util.Objects["local"] = new function() {
// 	this.init = function(scene) {
// 		scene.photos_priority = false; 
// 		u.createSlideShow(scene, scene.photos_priority);
// 	}
// }
// 
// Util.Objects["offers"] = new function() {
// 	this.init = function(scene) {
// 		scene.photos_priority = false; 
// 		u.createSlideShow(scene, scene.photos_priority);
// 	}
// }
// 
// Util.Objects["contact"] = new function() {
// 	this.init = function(scene) {
// 		scene.photos_priority = false; 
// 		u.createSlideShow(scene, scene.photos_priority);
// 	}
// }


Util.Objects["openhouse"] = new function() {
	this.init = function(scene) {

		scene.photo_sequence = [
			"/img/aabent_hus_20112702/pi_her_starter_skattejagt.jpg",
			"/img/aabent_hus_20112702/pi_ude_paa_skattejagt.jpg",
			"/img/aabent_hus_20112702/pi_mad_til_alle.jpg",
			"/img/aabent_hus_20112702/pi_klar_til_skattejagt.jpg",
			"/img/aabent_hus_20112702/pi_fyldt_restaurant.jpg",
			"/img/aabent_hus_20112702/pi_alfrednielsen_joergenkalvslund.jpg",
			"/img/aabent_hus_20112702/pi_afsloering_af_vaerk.jpg",
			"/img/aabent_hus_20112702/pi_marianne_kasper_foran_vaerk.jpg",
		];

		u.createPhotoList(scene, scene.photo_sequence);
	}
}


u.createSlideShow = function(scene, priority) {

	// adjust page height
	if(page.offsetHeight < u.browserH()) {
		u.as(page, "height", u.browserH()+"px");
	}

	var photos = JSON.parse(JSON.stringify(u.photos));

	scene.slideshow_wrapper = u.ae(page, "div", {"class":"photo_wrapper"});
	scene.slideshow = u.ae(scene.slideshow_wrapper, "ul", {"class":"photos"});

	u.as(scene.slideshow_wrapper, "height", page.offsetHeight+"px", false);

	var i, object, li;
	if(priority) {

		for(i = 0; object = photos[priority[i]]; i++) {

			li = u.ae(scene.slideshow, "li", {"class":"photo", "html":"<span>"+object.text+"</span>"});
			li.object = object;
			li.loaded = function(queue) {

				this.ready = true;
				u.as(this, "backgroundImage", "url("+queue[0]._image.src+")");

			}
			u.preloader(li, [object.image]);


			if(object.link) {
				u.ce(li);
				u.ac(li, "link");
				li.clicked = function() {
					location.href = this.object.link;
				}
			}

		}

		// sort array numerically to avoid having to recalulate index after each removal
		priority.sort(function(a,b) {return a - b;});
		for(i = 0; index = priority[i]; i++) {
			photos.splice(index, 1);
		}

	}



	// inject remaining photos in slideshow
	while(photos.length) {

		object = photos.splice(u.random(0, photos.length-1), 1)[0];

		li = u.ae(scene.slideshow, "li", {"class":"photo", "html":"<span>"+object.text+"</span>"});
		li.object = object;

		li.loaded = function(queue) {

			this.ready = true;
			u.as(this, "backgroundImage", "url("+queue[0]._image.src+")");

		}

		if(object.link) {
			u.ce(li);
			u.ac(li, "link");
			li.clicked = function() {
				location.href = this.object.link;
			}
		}

		u.preloader(li, [object.image]);

		// only load to fill screen
		if(li.offsetTop >= page.offsetHeight) {
			break;
		}
	}


	scene.slideshow.nodes = u.qsa("li", scene.slideshow);

	// start slideshow
	scene.slider = function() {

		this.slideshow.transitioned = function() {
			u.a.transition(this, "none");
			u.ae(this, this.firstChild);
			u.a.translate(this, 0, 0);

			var i, li;
			for(i = 0; li = this.nodes[i]; i++) {
				if(!li.ready && li.offsetTop - li.offsetHeight < page.offsetHeight) {
					u.preloader(li, [li.object.image]);
				}
			}
		}

		u.a.transition(this.slideshow, "all 0.7s ease-in-out");
		u.a.translate(this.slideshow, 0, -this.slideshow.firstChild.offsetHeight);

		u.t.setTimer(this, this.slider, 4000);

	}

	u.t.setTimer(scene, scene.slider, 4000);
}


// create custom photo list
u.createPhotoList = function(scene, photo_list) {

	scene.photo_list_wrapper = u.ae(page, "div", {"class":"photo_wrapper"});
	scene.photo_list = u.ae(scene.photo_list_wrapper, "ul", {"class":"photos"});

	var i, li;
	for(i = 0; i < photo_list.length; i++) {
		li = u.ae(scene.photo_list, "li", {"class":"photo"});
		u.as(li, "backgroundImage", "url("+photo_list[i]+")");
	}

	u.as(page, "height", scene.photo_list.offsetHeight+"px");
}



