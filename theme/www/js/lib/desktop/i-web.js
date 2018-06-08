Util.Objects["web"] = new function() {
	this.init = function(scene) {

		scene.resized = function() {
//			u.bug("scene.resized:" + u.nodeId(this));
		}

		scene.scrolled = function() {
//			u.bug("scene.scrolled:" + u.nodeId(this))
		}

		scene.ready = function() {
		console.log("web site Desk")
//			u.bug("scene.ready:" + u.nodeId(this));

		}

		// scene is ready
		scene.ready();
	}
}
