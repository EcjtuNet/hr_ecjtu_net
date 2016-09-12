$(document).ready(function () {
    /*
    * 联动
     */
    var apartmentList = {};
    apartmentList['新闻出版中心'] = ['编辑部', '记者团'];
    apartmentList['技术研发中心'] = ['UED', 'DOD'];
    apartmentList['行政管理中心'] = ['办公室', '外联部'];
    apartmentList['产品运营中心'] = ['日新微博', '日新影视工作室', '视觉摄影产品', '日新青梅竹马', '《交大青年》杂志社'];
    function setCentre() {
        //中心选项
        var sc = $(".selCentre");
        for (var i in apartmentList) {
            $.each(sc, function () {
                this.add(new Option(i, i));
            });
        }
    }

    $(".selCentre").bind('change', function () {
        var that = $(this);
        var centre = that.val();
        function setApart(centre) {
            //部门方向选项
            var parent = that.parent().parent().parent(),
                apart = parent.find(".selApart");
            apart.empty();

            //apart.length = 0;
            for (var i in apartmentList) {
                if (i == centre) {
                    for (var j in apartmentList[i]) {
                        $.each(apart,function(){
                            this.add(new Option(apartmentList[i][j], apartmentList[i][j]));
                        })
                    }
                }
            }
        }
        //中心选项的值
        setApart(centre);

    });
    addEventListener('load', setCentre, false);
    /*
    * 提交表单
     */
    var submit = $("input[type='submit']");
    submit.bind("click",function(e){
        //event.preventDault 兼容ie&&ff
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
            parent = that.parent().parent(),
            name_input = parent.find("input[name='user_name']"),
            sex_input = parent.find("input[name='user_sex']"),
            phone_input = parent.find("input[name='user_phone']"),
            qq_input = parent.find("input[name='user_qq']"),
            college_input = parent.find("select[name='user_college']"),
            major_input = parent.find("input[name='user_major']"),
            selCentre = parent.find(".selCentre"),
            selApart = parent.find(".selApart"),
            texts = parent.find("textarea"),
            wrapper = parent.parent().parent(),
            main = wrapper.find(".main"),
            footer = wrapper.find(".footer"),
            bg = wrapper.find(".bg"),
            edit = wrapper.find(".edit"),
            mask = wrapper.find(".mask"),
            popup = wrapper.find(".popup"),
            info = popup.find(".info"),
            close_tips = wrapper.find(".close_tips");
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
                /*
                * alert tips funcs
                 */
                var openTips = function(){
                    popup.fadeIn(200);
                    edit.fadeOut(200);
                }
                var closeTips = function(){
                    close_tips.bind("click",function(){
                        popup.fadeOut(200);
                        edit.fadeIn(200);
                    })
                }
                var changeBlur = function(){
                    for(i=0;i<arguments.length;++i){
                        $(arguments[i]).removeClass("blur");
                    }
                }

                info.text("");      
                if(data.status==1){
                    openTips();
                    info.append("<p>您的表单已经提交成功！</p>");
                    close_tips.bind("click",function(){
                        changeBlur(main,footer,bg);
                        popup.fadeOut(200);
                        edit.fadeOut(1);
                        mask.fadeOut(200); 
                    })
                    parent.find("input").each(function(){
                        $(this).val("");
                    });
                    parent.find("select").each(function(){
                        $(this).val("");
                    })
                    parent.find(texts).val("");
                    window.canScroll = true;
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

                    //input&&textarea的提示在placeholder显示
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
                    //alert-tips append
                    if(college_input.val()==0){
                        openTips();
                        info.append("<p>请选择学院选项！</p>");
                        closeTips();
                    }
                    if(selCentre.val()==0){
                        openTips();
                        info.append("<p>请选择中心选项！</p>");
                        closeTips();
                    }
                    //不知道部门提示怎么没用= =
                    return false;
                }

                if(data.status==3){
                    openTips();
                    info.append("<p>表单不可以重复提交！</p>");
                    close_tips.bind("click",function(){
                        changeBlur(main,footer,bg);
                        popup.fadeOut(200);
                        edit.fadeOut(1);
                        mask.fadeOut(200); 
                    })
                    window.canScroll = true;
                    return true;
                }
            }
        });
    })
});
