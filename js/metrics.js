// JavaScript Document


//////////////
//word_count metric
///////////

function word_count() {
	
	///// calcul text in H tags
	
  var h = ["h1", "h2", "h3", "h4", "h5", "h6"];
  var headings = [];
  var text="";
  var spans;
  var ptext;
  var divText;
  var Btext;
  
   ///// calcul text in h tags
  for (var i = 0; i < h.length; i++) 
  {
      if (document.getElementsByTagName(h[i])) {
          headings[i] = document.querySelector(h[i]);
                if (headings[i]) {
                text=text+(headings[i].textContent)+"\n";
		
                                 }
                                              } 
	else {
      alert(h[i] + "doesn't exist");}
  }
  
	 //alert(text);
 
  ///// calcul text in span tags
  spans=document.getElementsByTagName('span');
  
  for(i=0;i<spans.length;i++)
{
  //alert(spans[i].innerHTML);
  text=text+(spans[i].innerHTML)+"\n";
}
  
 ///// calcul text in p tags
  ptext=document.getElementsByTagName('p');
  
  for(i=0;i<ptext.length;i++)
{
  text=text+(ptext[i].innerHTML)+"\n";
} 
 
 
 ///// calcul text in div tags
  divText=document.getElementsByTagName('div');
  
  for(i=0;i<divText.length;i++)
{
  text=text+(divText[i].innerHTML)+"\n";
} 
 
 
  ////display final number of words
  var words=text.trim().split(/\s+/).length;
  document.getElementById("WC").innerHTML= "number of words on the UI="+words;
  alert(text); 
}

////////////////////
//read all table cells
///////////////////

var t=["color","font","a"];

function calculate()
{   var lnk=0;
    var word=0;
	var font=0;
	var colr=0;
	var tab=[];
	var table = document.getElementById("tab");
	var len=table.rows.length;

for (var i = 0; i< len; i++) 
{
		
                        for (var j=0; j<table.rows[i].cells.length; j++)
		  
		                     {
			  
			                     tab[j]= table.rows[i].cells[j].innerHTML;
		
							    // alert(tab[j]);
                                if(tab[j]== t[0])
	                             { colr++;
								   word++;}
								else if(tab[j]== t[1])
	                             { font++;
								 word++;}
								else if(tab[j]== t[2])
	                             { lnk++;
								 word++;}
		                     }
  } 
  					                    
document.getElementById("res").innerHTML= "color =" +colr+  "\n font =" +font+ "\n link =" +lnk+ "\n word =" +word;
  } 


////////////////////
//link count metric from table
///////////////////
function link()
{ var lnk=0;
    
	var tab=[];
	var table = document.getElementById("tab");
	var len=table.rows.length;

for (var i = 0; i< len; i++) 
{

	tab[i]= table.rows[i].cells[0].innerHTML;
		
	if(tab[i]== "a")
	{ lnk++;}
	
	document.getElementById("LC").innerHTML= "link =" +lnk;	                   
  } 
  
}


function Link_count()
{  	                    
var lnk= document.body.querySelectorAll('a').length;
document.getElementById("LC").innerHTML="Count of links =" + lnk ;
  } 


////////////////////////
// Graphics count metric
///////////////////////
function Graphic_count()

{
	
	var tab=[];
    var count=0;
	var newtab=[];
	var current = null;
	var table = document.getElementById("tab");
	var len=table.rows.length;

for(var i = 0; i <len; i++){
	
	tab[i]= table.rows[i].cells[0].innerHTML;

		if(tab[i] != current)
		
		{  
		current = tab[i];
		if( ! newtab.includes(current) )
		{
		newtab[i]=current;
        count = count+1;
		} 
		}
			
		
  
}
document.getElementById("GC").innerHTML= "Number of used different widgets =" +count;
}


/////////////////////
////total-widgets
////////////////

function total_widgets()

{
	var table = document.getElementById("tab");
	var len=table.rows.length;
document.getElementById("TW").innerHTML= "Number of total number of widgets =" +len;	
	}


/////////////////////
////color count metric
////////////////



function Color_count()


{
	var list = document.querySelectorAll('[color]');
	alert(list.length);
	}



/////////////////////
////parse-button -number
////////////////

function button() {
	
	var b= document.getElementsByTagName('button');
	var btn= document.querySelectorAll('[type=button]').length;
	var sum =  (parseFloat(b.length)+parseFloat(btn)); 
 document.getElementById("btn").innerHTML="Count of buttons =" + sum ;
}




