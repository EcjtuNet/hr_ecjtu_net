window.onload = function () {
	(function initializer () {
		var hr    = document.getElementById('hr');
		var	edit  = document.getElementById('edit');
		var	intro = document.getElementById('intro');
		hr.style.display = "block";
		edit.style.display = "none";
		intro.style.display = "none";
	})();
	(function introduce () {
		var tech     = document.getElementById('tech');
		var	news     = document.getElementById('news');
		var	prd      = document.getElementById('prd');
		var	manage   = document.getElementById('manage');
		var	register = document.getElementById('register');
		register.onclick = function () {
			var hr    = document.getElementById('hr');
			var	edit  = document.getElementById('edit');
			var	intro = document.getElementById('intro');
			hr.style.display = "none";
			edit.style.display = "block";
			intro.style.display = "none";
		};
		tech.onclick = function () {
			var hr    = document.getElementById('hr');
			var	edit  = document.getElementById('edit');
			var	intro = document.getElementById('intro');
			hr.style.display = "none";
			edit.style.display = "none";
			intro.style.display = "block";
		};
		news.onclick = function () {
			var hr    = document.getElementById('hr');
			var	edit  = document.getElementById('edit');
			var	intro = document.getElementById('intro');
			hr.style.display = "none";
			edit.style.display = "none";
			intro.style.display = "block";
		};
		prd.onclick = function () {
			var hr    = document.getElementById('hr');
			var	edit  = document.getElementById('edit');
			var	intro = document.getElementById('intro');
			hr.style.display = "none";
			edit.style.display = "none";
			intro.style.display = "block";
		};
		manage.onclick = function () {
			var hr    = document.getElementById('hr');
			var	edit  = document.getElementById('edit');
			var	intro = document.getElementById('intro');
			hr.style.display = "none";
			edit.style.display = "none";
			intro.style.display = "block";
		};
	})();
	(function back () {
		var back2index = document.getElementById('back2index');
		back2index.onclick = function () {
			var hr    = document.getElementById('hr');
			var	edit  = document.getElementById('edit');
			var	intro = document.getElementById('intro');
			hr.style.display = "block";
			edit.style.display = "none";
			intro.sytle.display = "none";
		}
	})();
}
