<!DOCTYPE html>
<!--
华东交通大学团委、学工处 [ 版权所有 交大日新 ] 赣ICP备05003322号 日新工作室 维护 联系：214@ecjtu.net
CopyRight 2001-2014 [ecjtu.net]. All Rights Reserved-->
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<title>日新产品运营中心</title>
	<link type="text/css" rel="stylesheet" href="../../css/same.css" >
	<link type="text/css" rel="stylesheet" href="../../css/xinwen.css" >
	<link type="text/css" rel="stylesheet" href="../../css/chanpin.css" >
	<link type="text/css" rel="stylesheet" href="../../css/register.css" >
<style type="text/css">
.line{
	background-color: #545454;
}
.line .l3_c{
	background-color: #545454;
}
/*******点击产品中心出现的效果********/
#effect{
	width: 660px;
	height:515px;
	position: absolute;
	left: 50%;
	margin-left: -330px;
	top: 10%;
}
#effect .btns_top .btn0{
	width: 105px;
	height: 105px;
	line-height: 105px;
	margin-left: 188px;
	margin-top: 0;
}
#effect .btns_top .btn3{
	width: 77px;
	height: 77px;
	line-height: 77px;
	text-align: center;
	margin: 30px 127px auto auto;
}
#effect .btns_mid .btn0{
	height: 109px;
	height: 109px;
	line-height: 109px;
	margin-top: 0;
}
#effect .btns_mid .btn3{
	height: 107px;
	line-height: 107px;
	position: relative;
	margin-right: 58px;
	top: -172px;
}
#effect .btns_mid .btn3 span{
	display: block;
	width: 90px;
	height: 20px;
	margin: 0 auto;
	line-height: 90px;
}
#effect .btns_btm .btn0{
	width: 93px;
	height: 93px;
	line-height: 93px;
	text-align: center;
	margin: 65px auto auto 325px;
}
/*******点击视频部出现的效果********/
/*#effect2 .jizhe_t{
	width: 383px;
	height: 383px;
	top: 47.8%;
	left: 22.52%;
}
#effect2 .jizhe_r{
	width: 28.55%;
	height: auto;
	top: 67.8%;
	left: 56.22%;
}*/
/*******点击微博出现的效果********/	
#effect4 .jizhe_t{
	width: 240px;
	height: 240px;
	top: -11%;
	right: 39%;
}
#effect4 .jizhe_t .info{
	margin: 75px auto auto 25px;
	text-indent: 7px;
}
#effect4 .jizhe_l{
	width: 30.21%;
	height: auto;
	top: 25%;
	right: 2.93%;
}
/*******点击青梅出现的效果********/
#effect6 .jizhe_t{
	width: 380px;
	height: 380px;
	top: 5%;
	left: 13%;
}
#effect6 .jizhe_t .info{
	margin: 60px auto auto 30px;
	text-indent: 56px;
}
#effect6 .jizhe_l{
	width: 28.21%;
	height: auto;
	top: 0%;
	left: 48%;
}
</style>
</head>
<body>
<div class="wrapper">
	<div class="box"></div>
	<div id="main">
		<div id="info">
			<p><img class="title" src="../../images/chanpin3.png">
			是日新工作室部门之一，于2012年正式成立，日新网所有上线产品均在产品运营中心运营，每个产品都由相应的产品经理负责管理，目前下设产品有：论坛产品、微博产品、博客产品、青梅手机客户端产品、Web应用产品、《交大青年》杂志、维权产品和短期项目。产品部门思维活跃，勇于创新，努力为广大网友提供最新最快的校园时讯。逛论坛，织围脖，写博客，上青梅，玩应用，品评《交大青年》，当然也可以通过我们来维护自己在校权益，参加我们举办的“缘来是你”相亲活动，因为我们的职责就是为在校师生提供互动交流的服务平台。</p>			
		</div>
		<input id="btn" type="button" onclick="showXinwen()"/>
	</div>
	<!-- effect为点击start出现的页面 -->
		<div id="effect">
			<div class="content">
				<div class="btns_top">
					<a id="app" class="btn0" onclick="changeReturn();hideEffectTemplate4('effect6','effect3','effect5','effect4')">青梅竹马</a>
					<a  class="btn3" onclick="changeReturn();hideEffectTemplate3('effect4','effect3','effect5')" >日新微博</a>
				</div>
				<div class="btns_mid">
					<a class="btn0" onclick="changeReturn();hideEffectTemplate4('effect5','effect3','effect4','effect6')" >日新影视工作室</a>
					<div class="btn1">
						<div class="btn2" style="background: url(../../images/chanpin2.png) no-repeat center;background-color: #FACC9E;"></div>
					</div>
					<a class="btn3" onclick="changeReturn();hideEffectTemplate4('effect3','effect4','effect5','effect6')" ><span>《交大青年》</span><span>杂志社</span>
					</a>
				</div>
				<div class="btns_btm">
					<a class="btn0">视觉摄影产品</a>
				</div>
				<!-- 此时return为返回到首页 -->
				<a id="return" onclick="hideXinwen()"></a>
			</div>
		</div>
		<!-- 此时return为返回到上一页 -->
				<a id="return2" onclick="hideEffectTemplate6('return','effect3','effect4','return2','effect5','effect6')"></a>
	<!-- effect2为点击视频部出现的介绍页面
		<div id="effect2">
			<div class="jizhe_r">
				<h2>视频产品专员</h2>
				<ul>
					<li>职位要求：</li>
					<li>1、有很强的学习能力，有合作精神，责任心强；</li>
					<li>2、对摄影方面有兴趣，有一定的想象和创作能力，对微电影有自己的见解和看法；</li>
					<li>3、热爱和关注生活，能从生活中提取素材，勇于创新；</li>
					<li>4、有一定的文学功底，和交流沟通能力以及组织能力。</li>
				</ul>
			</div>
			<div class="jizhe_t">
				<div class="info">视频</br><span style="margin-left:70px">部，隶属于华东交大日新网</br></span><span style="margin-left:33px">旗下的产品之一，成立于2014年。本</br></span>&nbsp;&nbsp;&nbsp;&nbsp;产品囊括了导演组、策划组、摄影组、演员</br>&nbsp;&nbsp;组、创作组六大组，具有培养写作、表演、策</br>划、摄影能力等多种功能。视频部自成立以来，</br>致力于服务广大师生，为他们提供视频拍摄，也</br>&nbsp;会制作精彩微电影给大家欣赏。日新视频部是</br><span style="margin-left:13px">以校园为基础，贴近师生生活，打造文化校</br></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;园的视频平台，同时希望广大师生喜欢</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;并支持我们的工作，欢迎各位的</br><span style="margin-left:127px">光顾！</span>
				
				</div>
			</div>
		</div> -->
	<!-- effect3为点击交大青年出现的介绍页面 -->
		<div id="effect3">
			<div class="jizhe_r">
				<h2>《交大青年》产品专员</h2>
				<ul>
					<li>职位要求：</li>
					<li>1、责任心强，有良好的学习和团队协作能力；</li>
					<li>2、对杂志的采编、排版有一定的了解；</li>
					<li>3、能较快的学习并掌握publisher、PS等相关杂志排版软件；</li>
					<li>4、具备一定的文字功底、摄影基础、美编能力（一项或一项以上）。</li>
				</ul>
			</div>
			<div class="jizhe_t">
				<h2>《交大青年》产品经理</h2>
				<ul>
					<li>职位要求：</li>
					<li>1、能准确把握杂志的定位和方向，结合产品特性和日新文化完成每期杂志的选题、策划、组织和管理工作；</li>
					<li>2、熟悉校园平面媒体的运作模式，具有一定的营销能力；</li>
					<li>3、热爱工作，具备敬业精神和职业操守，有良好的团队精神和协调能力；</li>
					<li>4、有良好的大局观，在主持编校过程中发现并解决问题，全面把控、提高稿件质量；</li>
					<li>5、熟悉publisher,PS等相关杂志排版软件。</li>
				</ul>
			</div>
			<div class="jizhe_l">
				<h2>责任编辑</h2>
					<ul>
						<li>职位要求：</li>
						<li>1、具有较强的文字处理、专题策划能力，能够按期保质保量地完成约稿、撰稿 、校对、编辑工作，对媒体的内容策划有独特见解；</li>
						<li>2、平面设计能力强，思维活跃，能够根据需要进行创意设计与制作，具有较好的审美能力；</li>
						<li>3、熟练掌握publisher、PS等相关杂志排版软件；</li>
						<li>4、具有独立撰写重要选题的能力；</li>
						<li>5、学习能力强，具有较好的团队合作意识和强烈的责任感。</li>
					</ul>
			</div>
			<div class="jizhe_b">
				<div class="info">《交大青年》是日新网旗下<br/><span style="margin-left:37px">杂志，于2011年3月由华东交通大学学<br/></span><span style="margin-left:17px">工处、校团委、日新网联合发起筹备创办，目</span><br/>前发行量数千册。其具体定位为“综合类校园杂<br/>志”，旨在传播知识、交流观点、启迪心灵，树立<br/>华东交大之精神。 杂志目前由日新网新闻出版中心<br/>负责编辑出版，通常情况下杂志固定为两月出版一<br/>期，假期停刊。除固定出版的双月刊外，日新网新<br/>闻出版中心也会根据需要出版特刊（如交大40周<br/>&nbsp;年校庆专刊，建团九十周年特刊等）。《交大青<br/>&nbsp;&nbsp;&nbsp;&nbsp;年》创办短短两年，但已覆盖整个交大校园。<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;此外，通过与校外媒体间的交流，《交<br/>
				<span style="margin-left:60px">大青年》已名闻全国众多高校。</span>
				</div>
			</div>
		</div>
	<!-- effect4为点击微博出现的介绍页面 -->
		<div id="effect4">
			<div class="jizhe_l">
				<h2>微博产品专员</h2>
				<ul>
					<li>职位要求：</li>
					<li>1、积极活泼，有责任心；</li>
					<li>2、喜欢微博，具有团队意识和合作精神；</li>
					<li>3、思维活跃，具有创新思维和沟通能力;</li>
					<li>4、关注微博热点，经常出没各种论坛网站，最好是个微博控；</li>
					<li>5、善于接受新事物，拥有较好的学习能力和执行能力，最好会ps简单操作。</li>
				</ul>
			</div>
			<div class="jizhe_t">
				<div class="info">
				日新网微博是华东交通大学<br/>校园门户网站日新网官方微博，<br/>是专为服务“花椒”而设，新<br/>&nbsp;&nbsp;闻爆料，热点时事，趣事百<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;科，花椒求助等等。
				</div>				
			</div>			
		</div>
	<!-- effect5为点击日新影视工作室出现的介绍页面 -->
		<div id="effect5">
			<div class="bianju yinshi">
				<h2>编剧</h2>
				<ul>
					<li>职位要求：</li>
					<li>能编写剧本，即创作出故事、台词，主戏以及过场戏，突出故事中心，塑造人物性格。能把一定内容以剧本或稿本形式表现出来，掌握一定的写作技巧，善于运用视听造型来表达事情。</li>
				</ul>
			</div>
			<div class="cehua yinshi">
				<h2>策划</h2>
				<ul>
					<li>职位要求：</li>
					<li>具有较强策划能力，工作与沟通能力强，能够熟练处理剧组内的繁杂事物。</li>
				</ul>
			</div>
			<div class="texiaoshi yinshi">
				<h2>特效师</h2>
					<ul>
						<li>职位要求：</li>
						<li>有一定美术功底，有较好的色彩感和画面感，良好的镜头感和节奏感；熟练操作After Effect等二维、三维特效软件，熟悉三维特效（粒子、动力学、流体、布料）制作方法。</li>
					</ul>
			</div>
			<div class="daoyan yinshi">
				<h2>导演</h2>
					<ul>
						<li>职位要求：</li>
						<li>具有熟练的蒙太奇思想，熟悉电影制作流程，能研究和分析剧本，为剧本找到恰当的表达形式，同时需要较强现场指导能力。</li>
					</ul>
			</div>
			<div class="yanyuan yinshi">
				<h2>演员</h2>
					<ul>
						<li>职位要求：</li>
						<li>具有姣好的面容，有较强的舞台表现能力和学习能力。</li>
					</ul>
			</div>
			<div class="jianjishi yinshi">
				<h2>剪辑师</h2>
					<ul>
						<li>职位要求：</li>
						<li>能够选择、整理、剪裁全部分割拍摄的镜头素材（画面素材和声音素材），能够运用pr等视频编辑软件进行视频合成。</li>						
					</ul>
			</div>
			<div class="main">
				<div class="info">日新影视工作室脱胎于原日<br/><span style="margin-left:30px">新视频部。工作室集影视前期策划、<br/></span><span style="margin-left:17px">拍摄 、后期制作特效合成等专业影视制</span><br/>作。我们有强大的影视制作及创意班底，有专<br/>业摄像队伍及后期剪辑制作人员，更有优秀的<br/>导演进行视频指导。工作室致力于新理念微电<br/>&nbsp;&nbsp;&nbsp;影创作，创作有《织梦》、《遇·青梅》等<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;优秀作品，其中《织梦》更是荣获<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;校微电影大赛“最佳影片奖”<br/>
				<span style="margin-left:130px">。</span>
				</div>
			</div>
		</div>
	<!-- effect6为点击日新青梅出现的介绍页面 -->
		<div id="effect6">
			<div class="jizhe_l">
				<h2>青梅、竹马手机客户端产品专员</h2>
				<ul>
					<li>职位要求：</li>
					<li>1.有较强的责任心，使用的手机为安卓或iOS系统：</li>
					<li>2.手机控，熟悉各种手机应用，有较多的时间；</li>
					<li>3.有良好的学习能力和沟通能力，组织能力，团队意识强；</li>
					<li>4.有责任心，无拖延症；</li>
					<li>5.有较强的自主工作能力；</li>
					<li>6.有想法、有创造、有自己的坚持、敢于挑战。</li>
				</ul>
			</div>
			<div class="jizhe_t">
				<div class="info">
				华东交通大学日新网手机客户端<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;——日新青梅竹马，交大手机客户端，我<br/>&nbsp;&nbsp;&nbsp;&nbsp;们一直以花椒视角为主线 ，并以关心花椒为重&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;头，不断开发符合花椒习惯和爱好的活动和栏目。<br/>逛交大，评老师，看学院；火速知活动，提前晓电影<br/>。来青梅，给你一个在交大不孤独的机会。这里有你<br/>们正在逝去的校园情怀，正在发生的校园当下，本校<br/>和你一样神奇的小伙伴，以及诸多的不可复制能力。<br/>&nbsp;&nbsp;&nbsp;来竹马，一起来温柔的撬动整个校园吧。日新<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;手机客户端，给你一个在交大忒 骄傲的<br/><span style="margin-left:137px">生活。</span>
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
				<div class="l3 l3_c"></div>
				<a class="circle" href="/index.php/hr/xingzheng"></a>
				<div class="l2"></div>
				<a class="logo" href="/index.php/hr/chanpin"></a>
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
					<p><span>性别-</span><input type="radio"style="margin-left:46px;" name="user_sex" class="radio" value="男" checked/> <label for="male">男</label>
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
						<input type="submit" value="提交"></input>
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
		$('#effect3').addClass('magictime slideRightRetourn');
		$('#effect4,#effect6').addClass('magictime slideUpRetourn');
		$('#effect5').addClass('magictime slideLeftRetourn');
	})
});
</script>
</body>
</html>