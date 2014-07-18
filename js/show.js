
var mover,mover2,topr,topr2;
function startMove(evt){
	var event=window.event?window.event:evt;
	var target=event.target?event.target:event.srcElement;
	window.clearInterval(mover2);
	mover=window.setInterval(function(){
	       var oldHeight=target.offsetHeight;
           var oldWidth=target.offsetWidth;
		   var newHeight=oldHeight+2;
		   var newWidth=oldWidth+2;
		   target.style.width=newWidth+'px';
		   target.style.height=newHeight+'px';
		   var moveTop=target.style.marginTop.slice(0,-2);
		   target.style.marginTop=(moveTop-1)+'px';
		   if(newWidth>=113){window.clearInterval(mover);return false;}
		  },10);
	}
function stopMove(evt){
    var event=window.event?window.event:evt;
	var target=event.target?event.target:event.srcElement;
     window.clearInterval(mover);
	mover2=window.setInterval(function(){
           var oldHeight2=target.offsetHeight;
           var oldWidth2=target.offsetWidth;
		   var newHeight2=oldHeight2-2;
		   var newWidth2=oldWidth2-2;
		   target.style.width=newWidth2+'px';
		   target.style.height=newHeight2+'px';
		   var moveTop2=target.style.marginTop.slice(0,-2);
		   moveTop2=Number(moveTop2)+1;
		   target.style.marginTop=Number(moveTop2)+'px';
		   if(newWidth2<=108){
			   window.clearInterval(mover2);return false;}
		  },10);
}

function moveTop(evt){
    var event=window.event?window.event:evt;
	var target=event.target?event.target:event.srcElement;
	window.clearInterval(topr2);
	topr=window.setInterval(function(){
	        var moveUp=target.style.marginTop.slice(0,-2);
			moveUp=Number(moveUp)-1;
			target.style.marginTop=Number(moveUp)+'px';
			if(moveUp<=3){window.clearInterval(topr);return false;}
	
	},30);
}
function moveBot(evt){
    var event=window.event?window.event:evt;
	var target=event.target?event.target:event.srcElement;
	window.clearInterval(topr);
	topr2=window.setInterval(function(){
	        var moveDown=target.style.marginTop.slice(0,-2);
			moveDown=Number(moveDown)+1;
			target.style.marginTop=Number(moveDown)+'px';
			if(moveDown>=8){window.clearInterval(topr2);return false;}
	
	},20);
}