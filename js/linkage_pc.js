$(document).ready(function () {
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
    var submit = $("input[type='submit']");
    submit.bind("click",function(){
        var that = $(this),
            parent = that.parent().parent().parent(),
            all_input = parent.find("input"),
            validate_input = [all_input[0], all_input[3],all_input[4],all_input[5]],
            selects = parent.find("select"),
            texts = parent.find("textarea"),
            submit = parent.find();
        if(!(validate_input.val()&&selects.val()&&texts.val())){
            alert("请输入全部信息！");
            event.preventDefault();
        }else{
            submit.bind('click',function(event){ 
                event.preventDefault(); }, false);
        }  
    })
    addEventListener('load', setCentre, false);
});