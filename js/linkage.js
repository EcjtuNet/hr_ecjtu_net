$(document).ready(function() {
    var apartmentList = new Array();
    apartmentList['新闻出版中心'] = ['编辑部', '记者团'];
    apartmentList['技术研发中心'] = ['DOD','UED'];
    apartmentList['行政管理中心'] = ['办公室','外联部'];
    apartmentList['产品运营中心'] = ['日新微博', '日新影视工作室', '视觉摄影产品', '日新青梅竹马', '《交大青年》杂志社'];
    function setCentre(){
        var sc = document.getElementById("selCentre");
        for(var i in apartmentList){
            //console.log(apartmentList);
            sc.add(new Option(i,i));
        }
    }
    function setApart(centre){
        var apart = document.getElementById("selApart");
        apart.options.length = 0;
        //console.log(apart.options.length);
        for(var i in apartmentList){
            if(i == centre){
                for(var j in apartmentList[i]){
                    //console.log(apartmentList[i]);
                    apart.add(new Option(apartmentList[i][j], apartmentList[i][j]));
                }
            }
        }
    }
    $("#selCentre").bind('change', function() {
        var centre=document.getElementById("selCentre").value;
        setApart(centre);
    });
    addEventListener('load',setCentre());

    var submit = $("input[type='submit']");
    submit.bind("click",function(){
        var stopDefault = function(e) { 
            if (e && e.preventDefault) {//如果是FF下执行这个
                e.preventDefault(e); 
            }else{ 
                window.event.returnValue = false;//如果是IE下执行这个
            }
            return false;
        }
        stopDefault(e);
        var that = $(this),
        parent = that.parent().parent().parent(),
        name_input = parent.find("input[name='user_name']"),
        sex_input = parent.find("input[name='user_sex']"),
        phone_input = parent.find("input[name='user_phone']"),
        qq_input = parent.find("input[name='user_qq']"),
        college_input = parent.find("select[name='user_college']"),
        major_input = parent.find("input[name='user_major']"),
        selCentre = parent.find("#selCentre"),
        selApart = parent.find("#selApart"),
        texts = parent.find("textarea");
        
        $.ajax({
            url: 'http://hr.ecjtu.net/index.php/register/check',
            type: 'POST',
            dataType: 'json',
            data: { 
                    user_name:name_input.val(),
                    user_sex:sex_input.val(),
                    user_phone:phone_input.val(),
                    user_qq:qq_input.val(),
                    user_college:college_input.val(),
                    user_major:major_input.val(),
                    user_center:selCentre.val(),
                    user_department:selApart.val(),
                    user_remarks:texts.val()
                },
            success:function(data){      
                if(data.status==1){
                    alert("您的表单已经提交成功！");
                    return true;
                }
                if(data.status==2){
                    var result = data.result;
                    console.log(result);
                    name_input.attr("placeholder",result.user_name);
                    major_input.attr("placeholder",result.user_major);
                    phone_input.attr("placeholder",result.user_phone);
                    qq_input.attr("placeholder",result.user_qq);
                    texts.attr("placeholder",result.user_remarks);

                    var setTips = function(obj){
                        if($(obj).attr("placeholder")!=""){
                            $(obj).val("");
                        }
                    }
                    setTips(name_input);
                    setTips(major_input);
                    setTips(phone_input);
                    setTips(qq_input);
                    setTips(texts);
                    if(college_input.val()==(0||null)){
                        alert("请选择学院选项！");
                    }
                    if(selCentre.val()==(0||null)){
                        alert("请选择中心选项！");
                    }
                    //不知道部门提示怎么没用= =
                    if(selApart.val()==(0||null)){
                        alert("请选择部门方向选项！");
                    }
                    return false;
                }
                if(data.status==3){
                    alert("表单不可以重复提交！");
                    return false;
                }
            }
        });
    })
});
