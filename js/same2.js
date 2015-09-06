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
function changeReturn(){
    $("#return").css("display","none");
    $("#return2").css("display","block");
}
/***结束****/

/***********display block的几个函数*************/
// function hideEffectTemplate(block,array){
//     $("block").css("display","block");
//     for (var i = 0; i = array.length; ++i) {
//         $("#array["+i+"]").css("display","none");
//     }
// }
/**********点击报名**********/
function register(){
    $("#edit,#mask").css("display","block");
    $("#main,#footer").toggleClass("blur");
}
function returnRegister(){
    $("#edit,#mask").css("display","none");
    $("#main,#footer").toggleClass("blur");
}
