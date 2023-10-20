// JavaScript Document

///// calcul text in div tags
function get_text(el) {
    ret = "";
    var length = el.childNodes.length;
    for(var i = 0; i < length; i++) {
        var node = el.childNodes[i];
        if(node.nodeType != 8) {
            ret += node.nodeType != 1 ? node.nodeValue : get_text(node);
        }
    }
    return ret;
}

 //text=text+divText+"\n";
 
  
 
var words = get_text(document.getElementById('div'));
var count = !s ? 0 : (s.split(/^\s+$/).length === 2 ? 0 : 2 +
    s.split(/\s+/).length - s.split(/^\s+/).length - s.split(/\s+$/).length);
alert(count);
