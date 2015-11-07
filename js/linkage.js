$(document).ready(function () {
    var apartmentList = {};
    apartmentList['新闻出版中心'] = ['编辑部', '记者团'];
    apartmentList['技术研发中心'] = ['UED', 'DOD'];
    apartmentList['行政管理中心'] = ['办公室', '外联部'];
    apartmentList['产品运营中心'] = ['日新微博', '日新影视工作室', '视觉摄影产品', '日新青梅竹马', '《交大青年》杂志社'];
    function setCentre() {
        var sc = $(".selCentre");
        for (var i in apartmentList) {
            //console.log(apartmentList);
            $.each(sc, function () {
                console.log("do it");
                this.add(new Option(i, i));
            });
        }
    }

    function setApart(centre) {
        var apart = document.getElementById("selApart");
        apart.options.length = 0;
        //console.log(apart.options.length);
        for (var i in apartmentList) {
            if (i == centre) {
                for (var j in apartmentList[i]) {
                    //console.log(apartmentList[i]);
                    apart.add(new Option(apartmentList[i][j], apartmentList[i][j]));
                }
            }
        }
    }

    $("#selCentre").bind('change', function () {
        var centre = document.getElementById("selCentre").value;
        setApart(centre);
    });
    addEventListener('load', setCentre, false);
});
