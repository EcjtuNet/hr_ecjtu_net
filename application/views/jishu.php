<!DOCTYPE html>
<!--
华东交通大学团委、学工处 [ 版权所有 交大日新 ] 赣ICP备05003322号 日新工作室 维护 联系：214@ecjtu.net
CopyRight 2001-2014 [ecjtu.net]. All Rights Reserved-->
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<title>日新技术研发中心</title>
	<link type="text/css" rel="stylesheet" href="css/same.css" >
	<link type="text/css" rel="stylesheet" href="css/xinwen.css" >
	<link type="text/css" rel="stylesheet" href="css/jishu.css" >
	<link type="text/css" rel="stylesheet" href="css/register.css" >
<style type="text/css">
#main #btn{
	margin: 12% auto auto;
}
/*********点击DOD出现的效果**************/
#effect4 .jizhe_t{
	top: 0;
	right: 32.24%;
}	
#effect4 .jizhe_l{
	right: 0%;
	bottom: 2%;
}
#effect4 .jizhe_r{
	right: 0;
	top: 0;
}
#effect4 .jizhe_l2{
	width: 40%;
	height: auto;
	padding: 15px;
	position: absolute;
	bottom: 2%;
	left: 20.58%;
	background-color: #FCFCFC;
	background-color: rgba(255, 255, 255, 0.8);
	font-size: 14px;
	color: #4C4C4C;
}
/************点击UED出现的效果*************/
/*原有的效果UED,中心圆,DOD重定位**/
#effect{
	width: 870px;
	height: 400px;
	margin-top: -109px;
	margin: 0 auto;
}
#effect .btn0{
	float: left;
	position: absolute;
	top: 107px;
	left: 82px;
}
#effect .btn1{
	position: absolute;
	margin-top: 107px;
    margin-left: 348px;
}
#effect .btn3{
	float: right;
	margin: 134px 82px auto auto;
}
/**新加的效果（靠左边的那三个UED圆）***/
.btns{
	width: 365px;
	height: 400px;
	float: left;
	position: relative;
}
.btns #btn0_l{
	float: left;
	margin-top: 0;
	display: none;
	position: absolute;
	top: 0;
	left: 0;
}
.btns #btn0_r{
	margin-top: 170px;
	margin-left: 85px;
	display: none;
}
</style>
</head>
<body>
<div class="wrapper">
	<div class="box"></div>
	<div id="main">
		<div id="info">
			<p><img class="title" src="images/jishu3.png">
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
				<div class="btns">
					<a id="btn0_l"class="btn0" onclick="changeReturn();hideEffectTemplate3('effect2','effect3','effect4')" >设计体验部</a>
					<a class="btn0" onclick="showBtns()" >UED</a>
					<a id="btn0_r" class="btn0" onclick="changeReturn();hideEffectTemplate3('effect3','effect2','effect4')" >网站建设部</a>
				</div>
				<a class="btn3" onclick="changeReturn();hideEffectTemplate1('effect4')" >DOD</a>
				<div class="btn1">
					<div class="btn2" style="background: url(images/jishu2.png) no-repeat center;background-color: #FACC9E;"></div>
				</div>
				<!-- 此时return为返回到首页 -->
				<a id="return" onclick="hideXinwen_jishu()"></a>
				<!-- 此时return为返回到上一页 -->
				<a id="return2" onclick="hideEffect_jishu()"></a>
			</div>
		</div>
	</div>
	<!-- effect2为点击设计出现的介绍页面 -->
		<div id="effect2">
			<div class="jizhe_r">
				<h2>视觉设计师</h2>
				<ul>
					<li>职位要求：</li>
					<li>1、能够熟练使用PS/AI/FW/CDR/PA等其中任意一款进行网页设计（WEB/WAP）或视觉设计（印刷品/APP）；</li>
					<li>2、微操微控能力较强，耐心并且能够承受较大压力；</li>
					<li>3、对于网页设计或者移动端界面设计的微未来有独特的看法，能虚心学习参与项目。</li>
					<li>职位职责：</li>
					<li>1、负责为网站产品（WEB/WAP）以及移动端APP设计视觉交互界面，并提出设计改善方案；</li>
					<li>2、负责网站产品（WEB/WAP）以及移动端APP的视觉界面优化和内容整理，负责各种产品日常的各项设计；</li>
					<li>3、定期的头脑风暴，有空余时间。</li>
				</ul>
			</div>
			<div class="jizhe_l">
				<h2>交互设计师</h2>
				<ul>
					<li>职位要求：</li>
					<li>1、能够使用Axure, Microsoft Office Visio等原型设计软件；</li>
					<li>2、了解Photoshop并能够基本的使用；</li>
					<li>3、逻辑分析能力强，善于分解任务，沟通和协调，对于人力管理有一定了解；</li>
					<li>4、对用户体验有较高的理解，知道交互设计的方法，擅长调研等；</li>
					<li>职位职责：</li>
					<li>1、进行产品前期的框架分析，能整理数据进行调研；</li>
					<li>2、负责一个系列产品线的交互界面设计，从用户体验的角度出发，提出最佳的交互设计和界面设 计方案；</li>
					<li>3、定期的头脑风暴，有空余时间。</li>
				</ul>
			</div>
		</div>
	<!-- effect3为点击网建出现的介绍页面 -->
		<div id="effect3">
			<div class="jizhe_t">
				<h2>Web前端开发</h2>
				<ul>
					<li>职位要求：</li>
					<li>1、熟悉并能熟练掌握HTML、CSS、JavaScript相关语言；</li>
					<li>2、熟悉并能合理运用CSS Sprites、JQuery、JQuery UI等技巧对页面效果优化；</li>
					<li>3、了解HTML 5、CSS 3等前沿技术。</li>
					<li>职位职责：</li>
					<li>1、参与网站的前台页面的设计，能够与美工人员良好交流一同改善界面体验；</li>
					<li>2、负责网站的前台页面的编码实现、更新、优化；</li>
					<li>3、定期技术分享，有空余时间。</li>
				</ul>
			</div>
			<div class="jizhe_r">
				<h2>移动开发程序员员</h2>
				<ul>
					<li>职位要求：</li>
					<li>1、熟悉并能熟练掌握java/J2ME、Object-C、Swift一种或多种语言；</li>
					<li>2、熟悉iOS或Android平台及体系结构，熟悉iOS或Android应用开发技术；</li>
					<li>3、熟悉并能熟练掌握Titanium、PhoneGap、jQueryMobile、Sencha一种或多种移动web开发框架，且具有一定的后端程序开发知识。</li>
					<li>职位职责：</li>
					<li>1、参与移动端app以及web app新产品功能的研发和实现；</li>
					<li>2、负责移动端app以及web app产品的更新、优化；</li>
					<li>3、定期技术分享，有空余时间。</li>
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
				<a class="circle" href="index.html"></a>
				<div class="l3 l3_c"></div>
				<a class="circle" href="xinwen.html"></a>
				<div class="l2"></div>
				<a class="logo" href="jishu.html"></a>
				<div class="l3_e"></div>
				<a class="circle" href="xingzheng.html"></a>
				<div class="l3"></div>
				<a class="circle" href="chanpin.html"></a>
				<div class="l4"></div>
			</div>
			<div class="tips">
				<a href="" class="t1" style="width:35px;height:20px;background-image:url(images/shouye.png)"></a>
				<a href="" class="t3" style="width:93px;height:20px;background-image:url(images/xinwen1.png);margin-left:43px;"></a>
				<a href="" class="t3" style="width:94px;height:20px;background-image:url(images/jishu1.png)"></a>
				<a href="" class="t4" style="width:95px;height:20px;background-image:url(images/xingzheng1.png)"></a>
				<a href="" class="t5" style="width:96px;height:20px;background-image:url(images/chanpin1.png)"></a>
			</div>
		</div>
		<a id="register" onclick="register()"></a>
		<img class="wind" src="images/wind.png">
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
<script type="text/javascript" src="js/same.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/linkage.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/xingzheng.js"></script>
</body>
</html>