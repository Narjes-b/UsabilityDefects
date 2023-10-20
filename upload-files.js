// JavaScript Document

////////////////////
//test all files are uploaded
////////////////////

 function handleFileSelect()
  {      
           
    if (!window.File || !window.FileReader || !window.FileList || !window.Blob) {
      alert('The File APIs are not fully supported in this browser.');
      return;
    }   


input1= document.getElementById('fileHTML');
 //input2 = document.getElementById('fileCSS');          


    if (!input1  ) {
      alert("Um, couldn't find the fileinput element.");
    }
    else if (!input1.files[0]  ) {
      alert("Upload your file!");
    }
    else if(input1.files[0]  ) {
      alert("file is uploaded");               
    }
	
	



 }

/*

input=document.getElementsByName("NAME");
counter=document.getElementsByName("NAME").length;

for( var i=0; i<counter; i++)

{    
 if (!input[i].files[0])             

          {
			 alert("Please select all files before clicking on 'Evaluate Usability'");               
    
			  break;
			  }
else 
         {      
		 
		i++;
         }

 }
 
 ********************
  if (!input1 || !input2 ) {
      alert("Um, couldn't find the fileinput element.");
    }
    else if (!input1.files[0] || !input2.files[0] ) {
      alert("Upload all files first!");
    }
    else if(input1.files[0] && input2.files[0] ) {
      alert("files are uploaded");               
    }
	
 
 
 
 
 
 
 
 
*/
