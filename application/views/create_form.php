<?php echo validation_errors(); ?>

<?php echo form_open('create/create_item_t') ?>
  <ul>
    <li><span>报名项目：</span><?php echo form_input('iname');?></li>
    <li><span>别名（即表名，用英文或拼音）：</span><?php echo form_input('tname');?></li>
    <li><span>选择项目所属模块</span><select name='mid'>
    <?php foreach ($modules as $module){echo "<option value={$module->mid}>{$module->mname}</option>";}
    ?>
    </select></li>
    <li><span>负责人邮箱：</span><?php echo form_input('person_email')?></li>
    <li><span>报名开始时间：</span><?php echo form_input('start_time')?></li>
    <li><span>报名结束时间：</span><?php echo form_input('end_time')?></li>
    <?php
    $arr = filde_change();
    foreach ($arr as $key=>$value)
    {
    	echo "<li><span>{$value}</span>".form_checkbox('content[]',$key)."</li>";
    } 
    ?>
    <li><span>级联菜单设置（没选勿填）</span> <input type="button" value='创建' onclick='add()'/></li>
    <div id="div" class=""  style='width:500px;overflow:hidden;height:auto;'>
	</div>

    <li><?php echo form_submit('','提交表单')?></li>
  </ul>
  <script type="text/javascript">
<!--
	function $(id){
	  return document.getElementById(id);
	}
  function add(){
   var div1=document.createElement('div');
   div1.innerHTML='第一级';
   div1.style.display='inline';
   var input1=document.createElement('input');
   input1.type='text';
   input1.name='menu_1[]';
   var div2=document.createElement('div');
   div2.innerHTML='第二级';
   div2.style.display='inline';
   var input2=document.createElement('input');
   input2.type='text';
   input2.name='menu_2[]';
   $('div').appendChild(div1);
   $('div').appendChild(input1);
   $('div').appendChild(div2);
   $('div').appendChild(input2);
   $('div').innerHTML=$('div').innerHTML+'<BR/>';

  }
 
//-->
</script>
<?php echo form_close()?>