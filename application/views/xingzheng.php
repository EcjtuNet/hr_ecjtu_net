<!DOCTYPE html>
<!--
华东交通大学团委、学工处 [ 版权所有 交大日新 ] 赣ICP备05003322号 日新工作室 维护 联系：214@ecjtu.net
CopyRight 2001-2014 [ecjtu.net]. All Rights Reserved-->
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<title>日新行政管理中心</title>
	<link type="text/css" rel="stylesheet" href="../../css/same.css" >
	<link type="text/css" rel="stylesheet" href="../../css/xinwen.css" >
	<link type="text/css" rel="stylesheet" href="../../css/xinzheng.css" >
	<link type="text/css" rel="stylesheet" href="../../css/register.css" >
<style type="text/css">
/************点击办公室出现的效果*************/
#effect2 .jizhe_t{
	left: 7.61%;
	top: 44%;
}
#effect2 .jizhe_r{
	top: 37.94%;
	left: 37.85%;
}
#effect3 .jizhe_r{
	right: 6.59%;
	top: 29.1%;
}
#effect3 .jizhe_t{
	position: fixed;	
	bottom: -12.64%;
	right: 34.92%;
}
</style>
</head>
<body>
<div class="wrapper">
	<div class="box"></div>
	<div id="main">
		<div id="info">
			<p><img class="title" src="../../images/xingzheng3.png">
			是日新工作室部门之一，其前身为日新行政部。下设办公室、财务部、外联部三个部门。对内主要负责网站内部的行政建设，运行日新部分网络产品及线下精品活动，做好网站的后勤服务、组织内部人员活动。</p>			
		</div>
		<input id="btn" type="button" onclick="showXinwen()" />
	</div>
	<!-- effect为点击start出现三角鼎立页面 -->
		<div id="effect">
			<div class="content">
				<a class="btn3" id="caiwu" onmouseover="showRenyuanzanman('caiwu')" onmouseout="cleanRenyuanzanman1()">财务部</a>
				<div class="btn1">
					<div class="btn2" style="background: url(../../images/xingzheng2.png) no-repeat center;background-color: #FACC9E;"></div>
				</div>
				<a class="btn4" onclick="changeReturn();hideEffectTemplate2('effect2','effect3')">办公室</a>
				<a class="btn5" onclick="changeReturn();hideEffectTemplate2('effect3','effect2')" >外联部</a>
			<!-- 此时return为返回到首页 -->
			<a id="return" onclick="hideXinwen()"></a>			
			</div>	
		</div>
		<!-- 此时return为返回到上一页 -->
			<a id="return2" onclick="hideEffectTemplate4('return','effect2','effect3','return2')"></a>	
	<!-- effect2为点击办公室出现的介绍页面 -->
		<div id="effect2">
			<div class="jizhe_r">
				<h2>办公室文员</h2>
				<ul>
					<li>职位要求：</li>
					<li>1、工作有高度的热情、有较强的执行力和责任心；</li>
					<li>2、具备较强的组织协调、管理、创新能力；</li>
					<li>3、强烈的团队合作精神、敬业奉献精神。</li>
				</ul>
			</div>
			<div class="jizhe_t">
				<div class="info">办公</br><span style="margin-left:54px">室是日新网行政管理中</br></span><span style="margin-left:25px">心部门之一，办公室主要负责协</br></span>&nbsp;&nbsp;&nbsp;助全站进行网站的行政建设与校内外</br>&nbsp;单位的走访交流合作，以及日新网的线</br>&nbsp;下精品活动栏目，同时负责学校南区礼</br>&nbsp;堂周末影院的日常管理工作，此外，办</br>&nbsp;&nbsp;&nbsp;公室负责对办公场所的使用情况进行</br><span style="margin-left:25px">登记归档，负责对来访人员的</br></span><span style="margin-left:80px">欢迎接待工作。</span>
				</div>
			</div>
		</div>
	<!-- effect3为点击外联部出现的介绍页面 -->
		<div id="effect3">
			<div class="jizhe_r">
				<h2>外联部文员</h2>
				<ul>
					<li>职位要求：</li>
					<li>1、工作有高度的热情和强烈的责任心；</li>
					<li>2、有一定的沟通交际能力，团队协作意识强；</li>
					<li>3、对于市场开拓以及活动对接有兴趣；</li>
					<li>4、学习能力强，会使用office系列办公软件。</li>
				</ul>
			</div>
			<div class="jizhe_t">
				<div class="info">驻外办隶属于行政管理中心，</br><span style="margin-left:27px">主要负责日新网的对外联络工作。重</br></span>&nbsp;&nbsp;&nbsp;点对接中国江西高校传媒联盟以及江西高校</br>网络联盟（负责承接江西高校网盟和江西高校</br>传媒联盟的活动，从策划到组织到执行）。能</br>够与学校各大社团社长对接，与全省各大高校</br>媒体交流，与全国各大校园媒体联系。到省级</br>&nbsp;&nbsp;活动上积极宣传推广日新网，并能参加全国</br>&nbsp;&nbsp;&nbsp;活动去对外交流经验，学习先进的理念。
				</div>
			</div>
		</div>
	<div id="mask"></div>
	<div id="footer">
		<div class="nav">
			<div class="line">
				<div class="l1"></div>
				<a class="circle" href="http://hr.ecjtu.net"></a>
				<div class="l3 l3_c"></div>
				<a class="circle" href="/index.php/hr/xinwen"></a>
				<div class="l3 l3_c"></div>
				<a class="circle" href="/index.php/hr/jishu"></a>
				<div class="l2"></div>
				<a class="logo" href="/index.php/hr/xingzheng"></a>
				<div class="l3_e"></div>
				<a class="circle" href="/index.php/hr/chanpin"></a>
				<div class="l4"></div>
			</div>
			<div class="tips">
				<a href="" class="t1" style="width:35px;height:20px;background-image:url(../../images/shouye.png)"></a>
				<a href="" class="t3" style="width:93px;height:20px;background-image:url(../../images/xinwen1.png);margin-left:43px;"></a>
				<a href="" class="t3" style="width:94px;height:20px;background-image:url(../../images/jishu1.png)"></a>
				<a href="" class="t4" style="width:95px;height:20px;background-image:url(../../images/xingzheng1.png)"></a>
				<a href="" class="t5" style="width:96px;height:20px;background-image:url(../../images/chanpin1.png)"></a>
			</div>
		</div>
		<a id="register" onclick="register()"></a>
		<img class="wind" src="../../images/wind.png">
	</div>
	<!-- 报名表 -->
		<div id="edit">
			<h2>报名表</h2>
			<div id="form">
				<form method="post" accept-charset="UTF-8" action="http://hr.ecjtu.net/index.php/register/check">
					<p><span>姓名-</span>&nbsp;<input type="text" name="user_name" class="text_input"></p>
					<p><span>性别-</span><input type="radio"style="margin-left:46px;" name="user_sex" class="radio" value="男" checked/> 男
					<input type="radio" name="user_sex" class="radio" value="女" /> 女</p>
					<p><span>手机-</span><input type="tel" name="user_phone" maxlength="11" /></p>
					<p><span>QQ&nbsp;-&nbsp;</span><input type="number" name="user_qq" /></p>
					<p class="select"><span>学院-</span>
						<select name="user_college" class="text_input">
							<option value=""></option>
							<option value="土木建筑学院">土木建筑学院</option>
							<option value="电气与电子工程学院">电气与电子工程学院</option>
							<option value="机电工程学院">机电工程学院</option>
							<option value="经济管理学院">经济管理学院</option>
							<option value="外国语学院">外国语学院</option>
							<option value="信息工程学院">信息工程学院</option>
							<option value="基础科学学院">基础科学学院</option>
							<option value="人文社会科学学院">人文社会科学学院</option>
							<option value="国际学院">国际学院</option>
							<option value="软件学院">软件学院</option>
							<option value="体育学院">体育学院</option>
							<option value="轨道交通学院">轨道交通学院</option>
							<option value="艺术学院">艺术学院</option>
							<option value="国防生学院">国防生学院</option>
						</select>
					</p>
					<p><span>专业-&nbsp;</span>
						<input type="text" name="user_major" class="text_input">
					</p>
					<p class="select"><span class="select">选择中心-</span>
						<select id="selCentre" name="user_center">
							<option value=""></option>
						</select>
					</p>
					<p class="select"><span class="select">部门方向-</span>
						<select id="selApart" name="user_department">
						</select>
					</p>
					<p><span id="personal"  style="margin-top:10px;">个人简介-</span>
						<textarea name="user_remarks" cols="30" rows="10"></textarea>
					</p>
					<h3>
						<input type="submit" value="提交"></input>
						<a id="back2index" onclick="returnRegister()">返回首页</a>
					</h3>
				</form>
			</div>
		</div>
</div>
<script type="text/javascript" src="../../js/same.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/linkage.js"></script>
<script type="text/javascript" src="../../js/form.js"></script>
<script type="text/javascript" src="../../js/jquery-1.7.2.js"></script>
<script type="text/javascript">
$("#btn").on("click",function(){
	$('.btn1').addClass('magictime swashIn');
		setTimeout(function(){
		  	$('.btn3').addClass('magictime swashIn');
		  	$('.btn4').addClass('magictime swashIn');
		  	$('.btn5').addClass('magictime swashIn');
	    },900)
	    setTimeout(function(){
			$(".btn3").css("opacity",1);
			$(".btn4").css("opacity",1);
			$(".btn5").css("opacity",1);
		},900)
	$('#effect3').addClass('magictime slideDownRetourn');
	$('#effect2').addClass('magictime slideDownRetourn'); 
})
</script>
</body>
</html>