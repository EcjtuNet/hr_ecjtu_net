$(document).ready(function() {
    /*********form********/
    $("form").submit(function() {
        $("input[type=submit]").click(function(event) {
            preventDefault();
        });
        url = "http://hr.ecjtu.net/index.php/register/check";
        $.post(url, $(this).serialize());
    });
    /*******点击屏幕介绍消失*******/
    $("#effect2").click(function(){
        $("#effect2,#return2").css("display","none");
        $("#return").css("display","block");

    })
    $("#effect3").click(function(){
        $("#effect3,#return2").css("display","none");
        $("#return").css("display","block");

    })
    $("#effect4").click(function(){
        $("#effect4,#return2").css("display","none");
        $("#return").css("display","block");

    })
    $("#effect5").click(function(){
        $("#effect5,#return2").css("display","none");
        $("#return").css("display","block");

    })
    $("#effect6").click(function(){
        $("#effect6,#return2").css("display","none");
        $("#return").css("display","block");

    })
    /***结束****/
});
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