/*******技术*******/
function hideXinwen_jishu(){
    gId("effect").style.display = "none";
    gId("mask").style.display = "none";
    gId("btn").style.display = "block"; 
    toggleClass(gId('info'),"blur");  
    toggleClass(gId('footer'),"blur"); 
    gId("register").style.display = "block";
    gId("return").style.display = "none";
    gId("btn0_l").style.display = "none";
	gId("btn0_r").style.display = "none";
}
function hideEffect_jishu(){
    gId("effect2").style.display = "none";
    gId("effect3").style.display = "none";
    gId("effect4").style.display = "none";
    gId("return").style.display = "block";
    gId("return2").style.display = "none";
}

function showBtns(){
	gId("btn0_l").style.display = "block";
	gId("btn0_r").style.display = "block";
}
