

window.getCount = function(parent, getChildrensChildren){
    var relevantChildren = 0;
    var children = parent.childNodes.length;
    for(var i=0; i < children; i++){
        if(parent.childNodes[i].nodeType != 3){
            if(getChildrensChildren)
                relevantChildren += getCount(parent.childNodes[i],true);
            relevantChildren++;
        }
    }
    return relevantChildren;
}


/*

  <!--Number of tags and inner tags-->  id "count" is for the body tag
        <a href="#" onclick="alert(getCount(document.getElementById('count'), false));"> Count of Children</a> <br/>
<a href="#" onclick="alert(getCount(document.getElementById('count'), true));">Count Inner Children</a> 
*/