// JavaScript Document
//get screen size
//window.onload = load;
//function load() {
   
  // var width = window.innerWidth
//|| document.documentElement.clientWidth
//|| document.body.clientWidth;

//var height = window.innerHeight
//|| document.documentElement.clientHeight
//|| document.body.clientHeight;

//alert (width);

//}

//remove all elements with id="titre"
function remove()
{
	//document.getElementById("titre").innerHTML="";
	
 var list = document.getElementsByClassName("remove");
 for(var i = list.length - 1; 0 <= i; i--)
 if(list[i] && list[i].parentElement)
 list[i].parentElement.removeChild(list[i]);
		
	};

//////////////////
/// display HTML file content
///////////////////////


function readHTML(input) 
{
    
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('editor1').value =  e.target.result;
        }

        reader.readAsText(input.files[0]);
    }
}
//////////////////
/// display CSS file content
///////////////////////
function readCSS(input) 
{
    
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('editor2').value =  e.target.result;
        }

        reader.readAsText(input.files[0]);
    }
}

///////////////////
//Add HTML field
/////////////////
i=0;
function AddFieldH(){
	
i++;

var input = document.createElement("INPUT");
input.setAttribute("placeholder", "Upload your HTML file");
input.setAttribute("type","file");
input.setAttribute("name","NAME");
input.setAttribute("accept", "text/html");
input.setAttribute("id", "TEXT_HTML" + i);
document.getElementById("html").appendChild(input);

}

function AddFieldC(){
	
i++;

var input = document.createElement("INPUT");
input.setAttribute("placeholder", "Upload your CSS file");
input.setAttribute("type","file");
input.setAttribute("name","NAME");
input.setAttribute("accept", ".css,text/css");
input.setAttribute("id", "TEXT_CSS" + i);
document.getElementById("css").appendChild(input); '<br/>'
}



///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////

/*

input1= document.getElementById('fileHTML');
 input2 = document.getElementById('fileCSS');          
input3 = document.getElementById('fileJS');

    if (!input1 || !input2 || !input3) {
      alert("Um, couldn't find the fileinput element.");
    }
    else if (!input1.files || !input2.files || !input3.files) {
      alert("This browser doesn't seem to support the `files` property of file inputs.");
    }
    else if (!input1.files[0] || !input2.files[0] || !input3.files[0]) {
      alert("Please select all files before clicking 'Evaluate'");               
    }
	
	else{
		
		alert("files are uploaded");
		
		}


*/
 
 

/*
  valid = true;

    if ( document.form.NAME.value == "" )
    {
        alert ( "Please select all files before clicking 'Evaluate'" );
        valid = false;
    }

    return valid;

  }
 */ 
/*

HCount = document.getElementById('fileHTML').length; 
	 
	 for (var i=0 ; i<HCount; i++)
	 {   var input ;
	      input[i]= document.getElementById('fileHTML'+i); 
		  
		   }
*/	

/*

}

*/
/*

else{
file1 = input1.files[0];
      fr1 = new FileReader();
      fr1.onload = receivedText;
      fr1.readAsText(file1);

      //fr.readAsDataURL(file1);
	  
	   file2 = input2.files[0];
      fr2 = new FileReader();
      fr2.onload = receivedText;
      fr2.readAsText(file2);
      //fr.readAsDataURL(file2);
	  
	   file3 = input3.files[0];
      fr3 = new FileReader();
      fr3.onload = receivedText;
      fr3.readAsText(file3);
      //fr.readAsDataURL(file1);
	  
	  
	  
	  else {
		file1 = input1.files[0];
		file2 = input2.files[0];
		file3 = input3.files[0];
	  alert('Files are uploaded !');
	  receivedText();
	  
    }
  }

  function receivedText() {
	 
    localStorage.setItem("file1",file1 );
	 alert(localStorage.getItem("file1"));
	 localStorage.setItem("file2",file2 );
	 alert(localStorage.getItem("file2"));
	 localStorage.setItem("file3",file3 );
	 alert(localStorage.getItem("file3"));
	//document.getElementById('editor1').value =  localStorage.getItem("fr1");
	
	
  }  
*/  
 








///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
/*

var div = document.createElement('div');
div.setAttribute("class", "mdl-textfield mdl-js-textfield mdl-textfield--file");

var input = document.createElement("INPUT");
input.setAttribute("class","mdl-textfield__input");
input.setAttribute("placeholder", "Upload your HTML file");
input.setAttribute("type","text");
input.setAttribute("id", "TEXT_HTML" + i);

var div2=document.createElement('div');
div2.setAttribute("class", "mdl-button mdl-button--icon mdl-button--file");

var i=document.createElement('i');
i.setAttribute("class", "material-icon");

////////doesn't work
i.setAttribute("type", "attach_file"); 

var script=document.createElement("script");
script.setAttribute('type', 'text/javascript');
script.innerHTML = 'document.getElementById("TEXT_HTML"+i).value=this.files[0].name;'; 

var input2=document.createElement("INPUT");
input2.setAttribute("onchange",script); 
////////////////

input2.setAttribute("accept", "text/html");
input2.setAttribute("type","file");
input2.setAttribute("id", "fileHTML" + i);

div2.appendChild(input2);
div2.appendChild(i);
div.appendChild(input);
div.appendChild(div2);
//div.appendChild(i);
//div.appendChild(input2);
document.getElementById("html").appendChild(div);
*/





// JavaScript Document