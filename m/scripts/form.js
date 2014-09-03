$(document).ready(function() {
	$("form").submit(function() {
		$("input[type=submit]").click(function(event) {
			preventDefault();
		});
		url = "http://hr.ecjtu.net/index.php/register/check";
		$.post(url, $(this).serialize());
	});
});