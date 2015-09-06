/************************通用的函数**************/
/**获取ID toggleClass**/
function gId(id){
	return document.getElementById(id);
}
/*********************财务部和APP人员暂满***********************/
function showRenyuanzanman(id){
    //gId("caiwu").innerHTML.replace(/财务部/g,"人员暂满");    
    gId(id).innerHTML="人员暂满";
}
function cleanRenyuanzanman1(){
    gId("caiwu").innerHTML="财务部";
}
/***********display block的几个函数*************/
function hideEffectTemplate1(block){
    gId(block).style.display = "block";
}
function hideEffectTemplate2(block,none1){
    gId(block).style.display = "block";
    gId(none1).style.display = "none";
}
function hideEffectTemplate3(block,none1,none2){
    gId(block).style.display = "block";
    gId(none1).style.display = "none";
    gId(none2).style.display = "none";
}
function hideEffectTemplate4(block,none1,none2,none3){
    gId(block).style.display = "block";
    gId(none1).style.display = "none";
    gId(none2).style.display = "none";
    gId(none3).style.display = "none";  
}
function hideEffectTemplate5(block,none1,none2,none3,none4){
    gId(block).style.display = "block";
    gId(none1).style.display = "none";
    gId(none2).style.display = "none";
    gId(none3).style.display = "none"; 
    gId(none4).style.display = "none";  
}
function hideEffectTemplate6(block,none1,none2,none3,none4,none5){
    gId(block).style.display = "block";
    gId(none1).style.display = "none";
    gId(none2).style.display = "none";
    gId(none3).style.display = "none"; 
    gId(none4).style.display = "none";  
    gId(none5).style.display = "none"; 
}
function hideEffectTemplate7(block,none1,none2,none3,none4,none5,none6){
    gId(block).style.display = "block";
    gId(none1).style.display = "none";
    gId(none2).style.display = "none";
    gId(none3).style.display = "none"; 
    gId(none4).style.display = "none"; 
    gId(none5).style.display = "none"; 
    gId(none6).style.display = "none"; 
}
