$(document).ready(function() {
	$("input[type=submit]").click(function( evnet ) {
		event.preventDefault();
		url = "http://hr.ecjtu.net/index.php/register/ajax_check";
		$.post(url, $("form").serialize(), function (data, statu) {
			var status = data.status;
			console.log(status);
			if (status === "success") {
				alert("提交成功咯~");
				location.reload();
			} else {
				var errorCode = data["error_code"];
				if (error === "1") {
					alert("你的资料填写错啦，好好检查检查唷");
				} else {
					alert("你已经提交过了喔");
				}
			}
		}, 'json');
	});
});