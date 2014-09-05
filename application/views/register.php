<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../../css/style.css" type="text/css" rel="stylesheet" />
<style>
html,body{height:100%;}
span{height:50px; display:block; font-family:"微软雅黑"; font-size:14px; color:#333;}
label{ font-family:"微软雅黑"; font-size:14px; color:#333; float:left; padding-top:6px;}
input{border:0; background:#fff;}
input [type="text"]{border:none; outline:none; height:16px; width:214px;}
.text_input{width:213px;}
* html input.text{border:none; outline:none; height:16px;}
select{border:solid 1px #b4b4b4; background:#f5f5f5; width:216px; height:27px; line-height:27px;}

.box{display:inline; height:16px; width:215px; padding:9px 4px; background:url(../../images/intro_image/input_text.gif) no-repeat; float:left;}
.radio_box{display:inline; width:215px; height:20px; width:215px; padding:7px 4px;float:left;}
.select_box{display:inline; height:27px; width:216px;float:left; padding-top:2px;}
textarea{width:500px; height:200px; border:0; background:#fff;}
a{display:block; width:81px; height:39px; background:url(../../images/intro_image/sub.gif); float:left; padding:0; margin:0;}
a:hover{background-image:url(../../images/intro_image/sub_hover.gif)}
a:active{background-image:url(../../images/intro_image/sub_active.gif)}
</style>
<title>招新报名表</title>
</head>
	<div style="width:810px; height:840px; padding:30px 45px; background-color:#fff;">
    	<div style="width:100%; height:100%;">
        	<p style=" font-family:'微软雅黑'; font-size:30px;color:#333333; text-align:center">日新招新报名表</p>
        	<div style="padding-top:40px; height:860px; width:100%;">
<!--            <form>-->
			<?php
				echo form_open('register/check');
                $sex = TRUE;
                $sex = set_value('user_sex')=='女' ? FALSE : TRUE;
			?>
            	<span><label>　　<font color="#FF0000">*</font>姓名：</label><div style="display:inline; height:16px; width:215px; padding:9px 4px; background:url(../../images/intro_image/input_text.gif) no-repeat; float:left;"><input name="user_name" class="text_input" style="border:0;" type="text" value="<?php echo set_value('user_name')?>"/></div><font color="#FF0000" style="line-height:40px; display:inline;"><?php echo form_error('user_name'); ?></font></span>
                <span><label>　　<font color="#FF0000">*</font>性别：</label><div class="radio_box">　<input name="user_sex" class="radio" type="radio" value="男"  <?php if($sex) echo 'checked'; ?> />男　　<input name="user_sex" class="radio" type="radio" value="女" <?php if(!$sex) echo 'checked'; ?> />女</div></span>
                <span><label><font color="#FF0000">*</font>选择中心：</label><div class="select_box"><select name="user_center" id="selCentre" onchange="setApart(this.value)"><option></option></select></div><label>　　<font color="#FF0000">*</font>部门（方向）：</label><div class="select_box"><select name="user_department" id="selApart"><option></option></select></div><font color="#FF0000" style="line-height:40px;"><?php echo form_error('user_department'); ?></font> <div id="detail" style="width:60px; height:20px;"></div></span>
                <span><label>　　<font color="#FF0000">*</font>学院：</label><div class="select_box"><select name="user_college" >
                <option>土木建筑学院</option>
                <option>电气与电子工程学院</option>
                <option>机电工程学院</option>
                <option>经济管理学院</option>
                <option>外国语学院</option>
                <option>信息工程学院</option>
                <option>理学院</option>
                <option>人文社会科学学院</option>
                <option>国际学院</option>
                <option>软件学院</option>                
                <option>体育学院</option>
                <option>轨道交通学院</option>
                <option>艺术学院</option>
                <option>国防生学院</option>
                </select></div><font color="#FF0000" style="line-height:40px;"></font></span>
                <span><label>　　<font color="#FF0000">*</font>专业：</label><div class="box"><input name="user_major" class="text_input"  type="text" value="<?php echo set_value('user_major')?>"/></div><font color="#FF0000" style="line-height:40px;"><?php echo form_error('user_major'); ?></font></span>
                <span><label>　　<font color="#FF0000">*</font>手机：</label><div class="box"><input name="user_phone" class="text_input" type="text" value="<?php echo set_value('user_phone')?>"/></div><font color="#FF0000" style="line-height:40px;"><?php echo form_error('user_phone'); ?></font></span>
                <span><label>　　&nbsp;<font color="#FF0000">*</font>QQ：</label><div class="box"><input name="user_qq" class="text_input" type="text" value="<?php echo set_value('user_qq')?>"/></div><font color="#FF0000" style="line-height:40px;"><?php echo form_error('user_qq'); ?></font></span>
                <span style="width:; height:230px"><label><font color="#FF0000">*</font>个人简介：</label><div class="radio_box" style="border:solid 1px #b4b4b4; width:504px; height:204px;"><textarea name="user_remarks"><?php echo set_value('user_remarks')?></textarea></div><font color="#FF0000" style="line-height:40px;"><?php echo form_error('user_remarks'); ?></font></span>
				<br />
                <span><span style="width:81px; height:39px; margin-left:70px;"><a id="botton"><input type="submit" value="" onclick="this.form.submit();" style="background:none; width:81px; height:39px;" /></a></span></span>
            </form>
            </div>
        </div>
        
    </div>
<script type="text/javascript" src="../../js/liandong.js">
</script>
<body>
</body>

</html>
