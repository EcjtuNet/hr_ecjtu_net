/************************通用的函数**************/
/**获取ID toggleClass**/
function gId(id){
	return document.getElementById(id);
}
function hasClass(obj, cls) {  
    return obj.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));  
}  
      
function addClass(obj, cls) {  
    if (!this.hasClass(obj, cls)) obj.className += " " + cls;  
}  
  
function removeClass(obj, cls) {  
    if (hasClass(obj, cls)) {  
        var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');  
        obj.className = obj.className.replace(reg, ' ');  
    }  
}  
 function toggleClass(obj,cls){  
        if(hasClass(obj,cls)){  
            removeClass(obj, cls);  
        }else{  
            addClass(obj, cls);  
        }  
    }  
/**中心按钮函数*/
function showXinwen(){
	gId("effect").style.display = "block";
	gId("mask").style.display = "block";
	gId("btn").style.display = "none";
    toggleClass(gId('info'),"blur");  
    toggleClass(gId('footer'),"blur"); 
	gId("register").style.display = "none";
	gId("return").style.display = "block";
}
/**返回键的一系列函数**/
function hideXinwen(){
    gId("effect").style.display = "none";
    gId("mask").style.display = "none";
    gId("btn").style.display = "block"; 
    toggleClass(gId('info'),"blur");  
    toggleClass(gId('footer'),"blur"); 
    gId("register").style.display = "block";
    gId("return").style.display = "none";
}

function changeReturn(){
    gId("return").style.display = "none";
    gId("return2").style.display = "block";
}
/***结束****/

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
/**********点击报名**********/
function register(){
    gId("edit").style.display = "block";
    gId("mask").style.display = "block"; 
    toggleClass(gId('main'),"blur");  
    toggleClass(gId('footer'),"blur"); 
}
function returnRegister(){
    gId("edit").style.display = "none";
    gId("mask").style.display = "none";
    toggleClass(gId('main'),"blur");  
    toggleClass(gId('footer'),"blur"); 
}
