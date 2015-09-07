<!DOCTYPE html>
<!--
华东交通大学团委、学工处 [ 版权所有 交大日新 ] 赣ICP备05003322号 日新工作室 维护 联系：214@ecjtu.net
CopyRight 2001-2014 [ecjtu.net]. All Rights Reserved-->
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<title>日新技术研发中心</title>
	<link type="text/css" rel="stylesheet" href="../../css/same.css" >
	<link type="text/css" rel="stylesheet" href="../../css/xinwen.css" >
	<link type="text/css" rel="stylesheet" href="../../css/register.css" >
<style type="text/css">
#main #btn{
	margin: 3% auto auto;
}
/*********点击DOD出现的效果**************/
#effect4 .jizhe_l{
	position: absolute;
	width: 30.89%;
	height: auto;
	right: 0;
	top: 10%;
	padding: 15px;
	float: left;
	background-color: #FCFCFC;
	background-color: rgba(255, 255, 255, 0.8);
	font-size: 14px;
	color: #4C4C4C;
}
/************点击UED出现的效果*************/
#effect2 .jizhe_t{
	width: 30.89%;
	height: auto;
	padding: 15px;
	position: absolute;
	top: 10%;
	left: 0;
	border-radius: 0;
	background-color: #FCFCFC;
	background-color: rgba(255, 255, 255, 0.8);
	font-size: 14px;
	color: #4C4C4C;
}
.line .l3_c{
	background-color: #545454;
}
</style>
</head>
<body>
<div class="wrapper">
	<div class="box"></div>
	<div id="main">
		<div id="info">
			<p><img class="title" src="../../images/jishu3.png">
		日新网技术研发中心是日新工作室所属中心之一，现有面向用户的设计开发（UED）部门和面向数据的设计开发（DOD）部门。中心主要负责校内外网站建设、软件开发及全校师生的电脑维护等工作。</p>
			<p>下属部门及职务：</p>
			<p>-UED-面向用户的设计开发部门</p>
			<p>全面负责所有面向用户的开发和设计，包括，交互设计，视觉设计，页面重构，前端开发，app开发</p>
			<p>-DOD-面向数据的设计开发部门</p>
			<p>全面负责日新网所有产品的数据提供，数据保存，数据挖掘和数据维护，包括数据接口开发，数据库开发，数据部署，数据挖掘，服务器维护，服务器升级。</p> 
		</div>
		<input id="btn" type="button" onclick="showXinwen()" />
	<!-- effect为点击start出现的页面 -->
		<div id="effect">
			<div class="content">					
				<a class="btn0" onclick="changeReturn();hideEffectTemplate2('effect2','effect4')" >UED</a>
				<a class="btn3" onclick="changeReturn();hideEffectTemplate1('effect4','effect2')" >DOD</a>
				<div class="btn1">
					<div class="btn2" style="background: url(../../images/jishu2.png) no-repeat center;background-color: #FACC9E;"></div>
				</div>
				<!-- 此时return为返回到首页 -->
				<a id="return" onclick="hideXinwen()"></a>
				<!-- 此时return为返回到上一页 -->
				<a id="return2" onclick="hideEffectTemplate4('return','effect2','effect4','return2')"></a>
			</div>
		</div>
	</div>
	<!-- effect2为点击UED出现的介绍页面 -->
		<div id="effect2">
			<div class="jizhe_t">
				<h2>技术实习生</h2>
					<ul>
						<li>职位要求：</li>
						<li>1. WEB前端开发语言（HTML/CSS/JS）</li>
						<li>2. WEB后端开发语言（PHP/Python/Ruby） </li>
						<li>3. 服务器运维部署（Linux） </li>
						<li>4. 视觉/交互设计（PS）；</li>
						<li>5. 客户端开发（Android/iOS） </li>
						<li>6. 用户调研、产品设计</li>
					</ul>
			</div>	
		</div>
	<!-- effect4为点击DOD出现的介绍页面 -->
		<div id="effect4">
			<div class="jizhe_l">
				<h2>技术实习生</h2>
					<ul>
						<li>职位要求：</li>
						<li>1. WEB前端开发语言（HTML/CSS/JS）</li>
						<li>2. WEB后端开发语言（PHP/Python/Ruby） </li>
						<li>3. 服务器运维部署（Linux） </li>
						<li>4. 视觉/交互设计（PS）；</li>
						<li>5. 客户端开发（Android/iOS） </li>
						<li>6. 用户调研、产品设计</li>
					</ul>
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
				<div class="l2"></div>
				<a class="logo" href="/index.php/hr/jishu"></a>
				<div class="l3_e"></div>
				<a class="circle" href="/index.php/hr/xingzheng"></a>
				<div class="l3"></div>
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
					<p><span>姓名-</span><input type="text" name="user_name" class="text_input"></p>
					<p><span>性别-</span><input type="radio" style="margin-left:46px;" name="user_sex" class="radio" value="男" checked/> <label for="male">男</label>
					<input type="radio" name="user_sex" class="radio" value="女" /> <label for="female">女</label></p>
					<p><span>手机-</span><input type="tel" name="user_phone" maxlength="11" /></p>
					<p><span>QQ&nbsp;-</span><input type="number" name="user_qq" /></p>
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
					<p><span>专业-</span>
						<input type="text" name="user_major" class="text_input">
					</p>
					<p class="select"><span class="select">选择中心-</span>
						<select id="selCentre" name="user_center" style="margin:0 8px;">
							<option value=""></option>
						</select>
					</p>
					<p class="select"><span class="select">部门方向-</span>
						<select id="selApart" name="user_department" style="margin:0 8px;">
						</select>
					</p>
					<p><span id="personal" style="margin-top:10px;">个人简介-</span>
						<textarea name="user_remarks" cols="30" rows="10" style="margin:0 8px;text-indent:10px;"></textarea>
					</p>
					<h3>
						<input type="submit" value="提交" />
						<a id="back2index" onclick="returnRegister()">返回首页</a>
					</h3>
				</form>
			</div>
		</div>
</div>
<script type="text/javascript" src="../../js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="../../js/same.js"></script>
<script type="text/javascript" src="../../js/linkage.js"></script>
<script type="text/javascript" src="../../js/same2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#btn").on("click",function(){
		$('.btn1').addClass('magictime swashIn');
			setTimeout(function(){
			  	$('.btn0').addClass('magictime spaceInRight');
			  	$('.btn3').addClass('magictime spaceInLeft');
		    },800)
		    setTimeout(function(){
				$(".btn0,.btn3").css("opacity",1);
			},800)
		$('#effect2,#effect4').addClass('magictime slideUpRetourn');
	})
});
</script>
</body>
</html>