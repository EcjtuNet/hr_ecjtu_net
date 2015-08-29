$(document).ready(function() {
	$("form").submit(function() {
		$("input[type=submit]").click(function(event) {
			preventDefault();
		});
		url = "http://hr.ecjtu.net/index.php/register/check";
		$.post(url, $(this).serialize());
	});
	$("#effect2").click(function(){
		$("#effect2").css("display","none");
		$("#return2").css("display","none");
  		$("#return").css("display","block");

	})
	$("#effect3").click(function(){
		$("#effect3").css("display","none");
		$("#return2").css("display","none");
  		$("#return").css("display","block");

	})
	$("#effect4").click(function(){
		$("#effect4").css("display","none");
		$("#return2").css("display","none");
  		$("#return").css("display","block");

	})
	$("#effect5").click(function(){
		$("#effect5").css("display","none");
		$("#return2").css("display","none");
  		$("#return").css("display","block");

	})
	$("#effect6").click(function(){
		$("#effect6").css("display","none");
		$("#return2").css("display","none");
  		$("#return").css("display","block");

	})
});
