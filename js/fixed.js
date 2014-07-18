
window.onscroll = fixed_top;  
function fixed_top()
{
	
	var T1=document.documentElement.scrollTop;
	var T2=document.body.scrollTop;
	if(T1>159||T2>159)
	{
		$("#right_nav").addClass("fixed-top");
	}
	else
	{
		$("#right_nav").removeClass("fixed-top");
		
	}
}
