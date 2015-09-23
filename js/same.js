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
function showWuwenan(id){   
    gId(id).innerHTML="暂无文案";
}
function cleanRenyuanzanman1(){
    gId("caiwu").innerHTML="财务部";
}
function cleanWuwenan1(){
    gId("wuwenan").innerHTML="视觉摄影产品";
}
/***********display block的几个函数*************/
function hideEffectTemplate(){
    gId(arguments[0]).style.display = "block";
    for(i=1;i<arguments.length;++i){
        gId(arguments[i]).style.display = "none";
    }
}
