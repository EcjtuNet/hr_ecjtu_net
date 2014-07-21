$(document).ready(function() {
	var hr    = $("#hr"),
		edit  = $("#edit"),
		intro = $("#intro");

	var tech     = $("#tech"),
		news     = $("#news"),
		prd      = $("#prd"),
		manage   = $("#manage"),
		register = $("#register");

	var techIntro = $(".tech"),
		newsIntro = $(".news"),
		prdIntro = $(".prd"),
		manageIntro = $(".manage"),
		main = $(".main"),
		job = $(".job"),
		pic = $(".pic");

	var next = $("#next");

	var logo = $("#logo"),
		about = $("#about"),
		back2index = $("#back2index");

	(function initializer () {
		hr.css('display', 'block');
		edit.css('display', 'none');
		intro.css('display', 'none');
	})();

	tech.click(function() {
		hr.css('display', 'none');
		edit.css('display', 'none');
		intro.css('display', 'block');
		$(".tech:eq(0)").css('display', 'block');
		next.click(function() {
			$(this).toggle(function() {
				$(this).parent().children('.tech:eq(0)').css('display', 'none').next().css('display', 'block');
				return false;
			}/*, function() {
				$(this).parent().children('.tech:eq(1)').css('display', 'none').next().css('display', 'block');
				return false;
			}*/);
		});
	});

	news.click(function() {
		hr.css('display', 'none');
		edit.css('display', 'none');
		intro.css('display', 'block');
		$(".news:eq(0)").css('display', 'block');
		next.click(function() {
			$(this).toggle(function() {
				$(this).parent().children('.news:eq(0)').css('display', 'none').next().css('display', 'block');
				return false;
			}/*, function() {
				$(this).parent().children('.news:eq(1)').css('display', 'none').next().css('display', 'block');
				return false;
			}*/);
		});
	});

	prd.click(function() {
		hr.css('display', 'none');
		edit.css('display', 'none');
		intro.css('display', 'block');
		$(".prd:eq(0)").css('display', 'block');
		next.click(function() {
			$(this).toggle(function() {
				$(this).parent().children('.prd:eq(0)').css('display', 'none').next().css('display', 'block');
				return false;
			}/*, function() {
				$(this).parent().children('.prd:eq(1)').css('display', 'none').next().css('display', 'block');
				return false;
			}*/);
		});
	});

	manage.click(function() {
		hr.css('display', 'none');
		edit.css('display', 'none');
		intro.css('display', 'block');
		$(".manage:eq(0)").css('display', 'block');
		next.click(function() {
			$(this).toggle(function() {
				$(this).parent().children('.manage:eq(0)').css('display', 'none').next().css('display', 'block');
				return false;
			}/*, function() {
				$(this).parent().children('.manage:eq(1)').css('display', 'none').next().css('display', 'block');
				return false;
			}*/);
		});
	});

	news.click(function() {
		hr.css('display', 'none');
		edit.css('display', 'none');
		intro.css('display', 'block');
		return false;
	});
	prd.click(function() {
		hr.css('display', 'none');
		edit.css('display', 'none');
		intro.css('display', 'block');
		return false;
	});
	manage.click(function() {
		hr.css('display', 'none');
		edit.css('display', 'none');
		intro.css('display', 'block');
		return false;
	});

	logo.click(function() {
		hr.css('display', 'block');
		edit.css('display', 'none');
		intro.css('display', 'none');
	});
	about.click(function() {
		hr.css('display', 'block');
		edit.css('display', 'none');
		intro.css('display', 'none');
	});
	back2index.click(function() {
		hr.css('display', 'block');
		edit.css('display', 'none');
		intro.css('display', 'none');
	});
	register.click(function() {
		hr.css('display', 'none');
		edit.css('display', 'block');
		intro.css('display', 'none');
	});

});








