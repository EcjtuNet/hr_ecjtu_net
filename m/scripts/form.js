$(document).ready(function() {
	$("form").submit(function() {
		$("input[type=submit]").click(function(event) {
			preventDefault();
		});
		url = "http://hr.ecjtu.net/index.php/register/ajax_check";
		$.post(url, $(this).serialize(), function (data, statu) {
			var status = data.status;
			if (status === "success") {
				location.reload();
			}
		}, 'json');
	});
});