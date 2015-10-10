$(document).ready(function() {
    /*********form********/
    $("form").submit(function() {
        $("input[type=submit]").click(function(event) {
            preventDefault();
        });
        url = "http://hr.ecjtu.net/index.php/register/check";
        $.post(url, $(this).serialize());
    });
});
/**首页换背景***/
function changeBg(){
$("#img1,#img2,#nav").toggleClass("none"); 
}
/**中心按钮函数*/
function showXinwen(){
    $("#effect,#mask,#return").css("display","block");
    $("#btn,#register").css("display","none");
    $("#info,#footer").toggleClass("blur");  
}
/**返回键的一系列函数**/
function hideXinwen(){
    $("#effect,#mask,#return").css("display","none");
    $("#btn,#register").css("display","block");
    $("#info,#footer").toggleClass("blur"); 
}
/**********点击报名**********/
function register(){
    $("#edit,#mask").css("display","block");
    $("#main,#footer").toggleClass("blur");
}
function returnRegister(){
    $("#edit,#mask").css("display","none");
    $("#main,#footer").toggleClass("blur");
}

