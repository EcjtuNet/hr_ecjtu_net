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
/*****display BLOCK/BLUR********/
function disBlock(){
    for(i=0;i<arguments.length;++i){
        $(arguments[i]).toggleClass("none");
    }
}
function changeBlur(){
    for(i=0;i<arguments.length;++i){
        $(arguments[i]).toggleClass("blur");
    }
}
function templateBlock(){
    for(i=0;i<arguments.length;++i){
        $(arguments[i]).css("display","block");
    }
}
/******effect的Animation*****/
//$('.main').onepage_scroll();
$(document).ready(function(){
    $("#section1 .btn").on("click",function(){
        $("#section1 .btn1").addClass('magictime swashIn');
        setTimeout(function(){
            $("#section1 .btn0").addClass('magictime spaceInRight');
            $("#section1 .btn3").addClass('magictime spaceInLeft');
        },800);
        setTimeout(function(){
            $('#section1 .btn0,#section1 .btn3').css("opacity",1);
        },800);
        $("#section1 #effect4").addClass('magictime slideLeftRetourn');
        $("#section1 #effect2").addClass('magictime slideRightRetourn');
    });

    $("#section2 .btn").on("click",function(){
        $('#section2 .btn1').addClass('magictime swashIn');
        setTimeout(function(){
            $('#section2 .btn0').addClass('magictime spaceInRight');
            $('#section2 .btn3').addClass('magictime spaceInLeft');
        },800);
        setTimeout(function(){
            $("#section2 .btn0,#section2 .btn3").css("opacity",1);
        },800);
        $('#section2 #effect1,#section2 #effect3').addClass('magictime slideUpRetourn');
    });
    $("#section3 .btn").on("click",function(){
        $('#section3 .btn1').addClass('magictime swashIn');
        setTimeout(function(){
            $('#section3 .btn3,#section3 .btn4,#section3 .btn5').addClass('magictime swashIn');
        },900);
        setTimeout(function(){
            $("#section3 .btn3,#section3 .btn4,#section3 .btn5").css("opacity",1);
        },900);
        $('#section3 #effect5,#section3 #effect6').addClass('magictime slideDownRetourn');
    });
    $("#section4 .btn").on("click",function(){
        $('#section4 .btn1').addClass('magictime swashIn');
        setTimeout(function(){
            $('#section4 .btn0').addClass('magictime spaceInRight');
            $('#section4 .btn3').addClass('magictime spaceInLeft');
        },800);
        setTimeout(function(){
            $("#section4 .btn0,#section4 .btn3").css("opacity",1);
        },800);
        $('#section4 #effect7').addClass('magictime slideRightRetourn');
        $('#section4 #effect8,#section4 #effect10').addClass('magictime slideUpRetourn');
        $('#section4 #effect9').addClass('magictime slideLeftRetourn');
    });
});
/*******bg与鼠标之间的移动差********/
var lastX = 0,lastY = 0;
function mousePosition(bg,e) {
    //兼容IE
    e = e ? e : window.event;
    if (e.offsetX) {
        x = e.offsetX;
        y = e.offsetY;
    }
    //兼容ff
    else if (e.layerX) {
        x = e.layerX;
        y = e.layerY;
    }
    var oldLeft = parseInt($(bg).css("left"));
    var oldBottom = parseInt($(bg).css("bottom"));
    if (x > lastX) {//鼠标向左
        if (oldLeft > -12) {
            $(bg).css("left", oldLeft - 1 + "px");
        }
    } else if (x < lastX) {//向右
        if (oldLeft < 12) {
            $(bg).css("left", oldLeft + 1 + "px");
        }
    }
    lastX = x;

    if (y > lastY) {//向下
        if (oldBottom < -15) {
            $(bg).css("bottom", oldBottom + 1 + "px");
        }
    } else if (y < lastY) {//向上
        if (oldBottom > -45) {
            $(bg).css("bottom", oldBottom - 1 + "px");
        }
    }
    lastY = y;
}
/***slider****/
$(function(){
        $("#container").switchPage({
            'loop' : true,
            'keyboard' : true,
            'direction' : 'horizontal'
        });
    });