<script type="text/javascript">
var xmlHttp;
var a=new Array();
function createXMLHttpRequest(){
   if(window.ActiveXObject){
     xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
   else if(window.XMLHttpRequest){
      xmlHttp=new XMLHttpRequest();
   }
}
function validate(){
   createXMLHttpRequest();
   var date=document.getElementById("first");
   var url="xml?birthDate="+escape(date.value);
   xmlHttp.open("GET",url,true);
   xmlHttp.onreadystatechange=callback;
   xmlHttp.send(null);
}
function callback(){
   if(xmlHttp.readyState==4){
     show();
   }
}
function show(){
   var xmlDoc=xmlHttp.responseXML;
   var content=xmlDoc.getElementsByTagName("city");
   for(var i=0;i<content.length;i++){
      var y=content[i];
      a[i]=y.childNodes[0].data;
   }
  show1();
}
function show1(){
     var obj=document.getElementById("dataMessage");
     var number=obj.length;
     for(var j=obj.length-1;j>=0;j--){
               obj.removeChild(obj.childNodes.item(j));
          }
         for(var i=0;i<a.length;i++){
            var opt=document.createElement("OPTION");
             opt.text=a[i];
             obj.add(opt);
           }
}
</script>
