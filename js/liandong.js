// JavaScript Document
var apartmentList = new Array();
	apartmentList['新闻出版中心'] = ['记者团'];
	apartmentList['技术研发中心'] = ['网站建设部','体验设计部','安全运维部'];
	apartmentList['行政管理中心'] = ['办公室','驻外办','市场部'];
	//apartmentList['产品运营中心'] = ['校园文化', '《交大青年》杂志社', '日新博客', '日新论坛', '日新手机客户端', '日新微博', 'WEB应用产品项目部', '日新微信'];
	apartmentList['产品运营中心'] = ['《交大青年》杂志社', '日新手机客户端', '日新微博', '日新网络应用', '日新微信','日新微博','日新视频'];
    /*cityList['北京市'] = ['朝阳区','东城区','西城区', '海淀区','宣武区','丰台区','怀柔','延庆','房山'];
	cityList['上海市'] = ['长宁区','丰贤区', '虹口区','黄浦区','青浦区','南汇区','徐汇区','卢湾区'];
	cityList['广州省'] = ['广州市','惠州市','汕头市','珠海市','佛山市','中山市','东莞市'];
    cityList['深圳市'] = ['福田区', '罗湖区', '盐田区', '宝安区', '龙岗区', '南山区', '深圳周边'];
	cityList['重庆市'] = ['南岸区', '江北区', '沙坪坝区', '九龙坡区', '渝北区', '大渡口区', '北碚区'];
    cityList['天津市'] = ['河西区', '南开区', '河北区', '河东区', '红桥区', '塘古区', '开发区'];
	cityList['江苏省'] = ['南京市','苏州市','无锡市'];
	cityList['浙江省'] = ['杭州市','宁波市','温州市'];
	cityList['四川省'] = ['四川省','成都市'];
	cityList['海南省'] = ['海口市'];
	cityList['福建省'] = ['福州市','厦门市','泉州市','漳州市'];
	cityList['山东省'] = ['济南市','青岛市','烟台市'];
	cityList['江西省'] = ['江西省','南昌市'];
	cityList['广西省'] = ['柳州市','南宁市'];
	cityList['安徽省'] = ['安徽省','合肥市'];
	cityList['河北省'] = ['邯郸市','石家庄市'];
	cityList['河南省'] = ['郑州市','洛阳市'];
	cityList['湖北省'] = ['武汉市','宜昌市'];
	cityList['湖南省'] = ['湖南省','长沙市'];
	cityList['陕西省'] = ['陕西省','西安市'];
	cityList['山西省'] = ['山西省','太原市'];
	cityList['黑龙江省'] = ['黑龙江省','哈尔滨市'];
	cityList['其他'] = ['其他'];*/
	
	
	function setCentre(){
		var sp = document.getElementById('selCentre');
		for(var i in apartmentList){
			//alert(i);
			sp.add(new Option(i,i));
		}
	}
	
	function setApart(centre){
		//var centre=document.getElementById("selCentre").value;
			var apart=document.getElementById("selApart");
			
			apart.options.length = 0;
			//alert(apart.options.length);
			for(var i in apartmentList){
				
				if(i == centre){
					for(var j in apartmentList[i]){
						//alert(apartmentList[i][j]);
						apart.add(new Option(apartmentList[i][j],apartmentList[i][j]));
					}
				}
			}	
	}
addEventListener('load',setCentre());