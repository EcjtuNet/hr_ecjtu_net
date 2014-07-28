$(document).ready(function() {
	var apartmentList = new Array();
		apartmentList['新闻出版中心'] = ['记者团'];
		apartmentList['技术研发中心'] = ['网站建设部','体验设计部','安全运维部'];
		apartmentList['行政管理中心'] = ['办公室','财务部','企划部','人力资源部','市场部'];
		apartmentList['产品运营中心'] = ['《交大青年》杂志社', '日新手机客户端', '日新微博', 'WEB应用产品项目部', '日新微信'];
		function setCentre(){
			var sc = document.getElementById("selCentre");
			for(var i in apartmentList){
				sc.add(new Option(i,i));
			}
		}
		function setApart(centre){
			//var centre=document.getElementById("selCentre").value;
			var apart = document.getElementById("selApart");
			//apart.options.length = 0;
			for(var i in apartmentList){
				if(i == centre){
					for(var j in apartmentList[i]){
						apart.add(new Option(apartmentList[i][j], apartmentList[i][j]));
					}
				}
			}
		}
		addEventListener('load',setCentre());
});
