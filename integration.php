<?php 
session_start();

  $page="";  
$t=$_GET['t'];
for($i=0;$i<$t;$i++){
 
   if(isset($_GET[$i])) {
       $page=$page.";".$_GET[$i];
$_SESSION[$i]=$_GET[$i];
$source=fopen($_GET[$i],"a+");

$script='<script type="text/javascript">
var location = window.location.pathname;

  var x = document.getElementsByTagName("*");
var tab=new Array();

var elementn="";
  var i=0;
  var tai=x.length;
  
  for(i=0;i<x.length;i++){
  
  //alert(x[i].tagName);
elementn=";"+x[i].tagName;
  var position = getPosition(x[i]);
  elementn=elementn+";"+position.x;
  elementn=elementn+";"+position.y;
//alert("The image is located at: " + position.x + ", " + position.y);
  var wi=x[i].offsetWidth;
  var hi=x[i].offsetHeight;
  var area=wi*hi;
  
  //alert(x[i].tagName+": area :"+area);
 var nbe=nbel(x[i].tagName);
 
 
 elementn=elementn+";"+area;
 elementn=elementn+";"+x[i].offsetWidth;
  elementn=elementn+";"+x[i].offsetHeight;

//alert("nombre same element: "+nbe);
  tab.push(elementn);
 
 }
 window.location.href = "../../cal.php?tab="+tab+"&tt="+tai+"&t="+location+"&w="+screen.width+"&h="+screen.height;
 
 function nbel(e){
 var aa=document.getElementsByTagName(e);
 return aa.length;
 }
 function margt(ee){
 var margtt=document.getElementsByTagName(ee).style.marginTop;
 return margtt;
 }
 function margl(eee){
 var margll=document.getElementsByTagName(eee).style.marginLeft;
 return margll;}
function getPosition(el) {
  var xPos = 0;
  var yPos = 0;
 
  while (el) {
    if (el.tagName == "BODY") {
      // deal with browser quirks with body/window/document and page scroll
      var xScroll = el.scrollLeft || document.documentElement.scrollLeft;
      var yScroll = el.scrollTop || document.documentElement.scrollTop;
 
      xPos += (el.offsetLeft - xScroll + el.clientLeft);
      yPos += (el.offsetTop - yScroll + el.clientTop);
    } else {
      // for all other non-BODY elements
      xPos += (el.offsetLeft - el.scrollLeft + el.clientLeft);
      yPos += (el.offsetTop - el.scrollTop + el.clientTop);
    }
 
    el = el.offsetParent;
  }
  return {
    x: xPos,
    y: yPos
  };
}
 
</script>';


fputs($source,$script);
fclose($source);


}}
    
 echo '<meta http-equiv="refresh" content="0;URL=http://localhost:8888/www/narj/red.php?t='.$page.'">';
  
    
    
    
    
    

?>