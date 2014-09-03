$(document).ready(function() {
	$("input[type=submit]").click(function( evnet ) {
		event.preventDefault();
		url = "http://hr.ecjtu.net/index.php/register/ajax_check";
		$.post(url, $("form").serialize(), function (data, statu) {
			var status = data.status;
			console.log(status);
			if (status === "success") {
				location.reload();
			}
		}, 'json');
	});
});