<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Usability Issues</title>

<!-- Material Design Lite -->
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
   <link rel="stylesheet" 
    href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.red-purple.min.css" /> 
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
   
   <!-- code to import MDL Library -->
        
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">


  
   <!-- finish -->
   <link rel="stylesheet" href="css/style_sheet.css">

</head>


<body>
<!-- header -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
       <header class="mdl-layout__header">
    
           <div  class="madl-layout__header-row" id="plugin-name" >
              &nbsp;<span class="mdl-layout-title" dir="lte">PHILIP:Hybrid mobile Interface usabiLIty Prediction</span>
              
              <div style="margin-left:30px ; margin-bottom:20px; margin-top:-40px" align="left" id="img" >
              <img src="img/logo.png" style="height:100px; width:100px "  />
              </div>
              
           </div> 
             
             <div style="margin-right:50px;margin-top:-40px; direction:rtl">
           <button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button mdl-button--icon" >
  <a href="plugin-main.html" class="mdl-navigation__link"><i class="material-icons">home</i></a>
</button>
              </div>
           
           
           
           <!-- menu 
           <div style="margin-right:50px; direction:rtl">
           <button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button mdl-button--icon" >
  <i class="material-icons"></i>
</button>

<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-right">
  <a href="profile.html" class="mdl-navigation__link"><li style="float:left">Quitter</li></a>

</ul>
</div>
 -->
</header>


<main class="mdl-layout__content">    
         <div class="mdl-tabs mdl-js-tabs">
            <div class="mdl-tabs__tab-bar">
            
               <a href="#tab1-panel" class="mdl-tabs__tab" >Detected Usability Issues</a>
            
            </div>
            <br /><br /><br /><br />
            

             
             
            <!--****************************************-->
            <!-- issues-->
             <!--****************************************-->
             
             <center>
             
             
               <div id="analysis"> 
              <div>
                
     <table id="issues" style="width:700px;  margin-top:-70px;margin-left:230px " class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
  <thead>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <th class="mdl-data-table__cell--non-numeric"><big><center>Usability Defects</center></big></th>
     <!-- <th><big>USABILITY ISSUES</big></th>-->
    </tr>
  </thead>
   <?php
mysql_connect("localhost","root","root")or die (mysql_error());
 mysql_select_db("xrwinoyd_nar")or die (mysql_error());
 $sql=mysql_query("select * from form");
 $tab="";
 while($data=mysql_fetch_array($sql)){
     $tab[0]=$data['id'];
     $tab[1]=$data['age'];
     $tab[2]=$data['sex'];
     $tab[3]=$data['eud'];
     $tab[4]=$data['ue'];
 }
 $sql=mysql_query("select * from resultat where nom='".$_GET['id']."' ");
 $data=mysql_fetch_array($sql);
 if($data['density']<="0.52" and $tab[3]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric"> Incorrect appearance of
widgets </td>

      <!--<td></td>-->
    </tr><?php }if($data['nba']<="1" and $tab[2]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Lack of task support </td>

      <!--<td></td>-->
    </tr><?php }  if($data['cohesion']<="0.54" and $tab[3]=="low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">   Incomprehensible instructions </td>

      <!--<td></td>-->
    </tr><?php }if($data['uniform']<="0.38" and $tab[5]=="low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">   Missing

functionality 
  </td>

      <!--<td></td>-->
    </tr><?php }
    if($data['uniform']>="0.38"and $tab[2]=="low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Screen clutter  </td>

      <!--<td></td>-->
    </tr><?php }if($data['nba']<="1" and $tab[4]=="High"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numerc">   Lack of task support    </td>

      <!--<td></td>-->
    </tr><?php }if($data['economy']<="0.20" and $tab[4]=="High"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Home page is too busy    </td>

      <!--<td></td>-->
    </tr><?php }if($data['symmetry']>="0.57" and $tab[5]=="High"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Incorrect layout of widgets    </td>

      <!--<td></td>-->
    </tr><?php }if($data['nbc']<="2" and $tab[2]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Incorrect appearance of widgets    </td>

      <!--<td></td>-->
    </tr><?php }if($data['density']<="0.52" and $tab[2]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Terminology unclear    </td>

      <!--<td></td>-->
    </tr><?php }if($data['density']>="0.52" and $tab[5]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Home page is too busy    </td>

      <!--<td></td>-->
    </tr><?php }if($data['sequency']<="0.43" and $tab[3]=="High"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Missing functionality   </td>

      <!--<td></td>-->
    </tr><?php }if($data['rm']<="0.73" and $tab[3]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Missing functionality    </td>

      <!--<td></td>-->
    </tr><?php }if($data['grouping']<="0.17" and $tab[2]=="High"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Functionality unclear   </td>

      <!--<td></td>-->
    </tr><?php }if($data['rm']<="0.73" and $tab[2]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Screen clutter    </td>

      <!--<td></td>-->
    </tr><?php }if($data['simplicity']<="0.26" and $tab[2]=="High"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Deficient content inside the "about us" tab </td>

      <!--<td></td>-->
    </tr><?php }if($data['simplicity']>="0.81" and $tab[4]=="High"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Incomprehensible instructions    </td>

      <!--<td></td>-->
    </tr><?php }if($data['balance']>="0.53" and $tab[2]=="High"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Screen clutter    </td>

      <!--<td></td>-->
    </tr><?php }if($data['word']<="50" and $tab[2]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric"> Deficient content inside the "about us" tab   </td>

      <!--<td></td>-->
    </tr><?php }if($data['unity']>="0.93" and $tab[2]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Expected information missing   </td>

      <!--<td></td>-->
    </tr><?php }if($data['simplicity']<="0.26" and $tab[2]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Functionality unclear   </td>

      <!--<td></td>-->
    </tr><?php }if($data['comp']>="0.83" and $tab[5]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Screen clutter    </td>

      <!--<td></td>-->
    </tr><?php }if($data['rm']<="0.73" and $tab[5]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Terminology unclear    </td>

      <!--<td></td>-->
    </tr><?php }if($data['font']<="0.09" and $tab[3]=="High"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">   Lack of task support   </td>

      <!--<td></td>-->
    </tr><?php }if($data['homog']>="0.96" and $tab[5]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Screen clutter    </td>

      <!--<td></td>-->
    </tr><?php }if($data['cohesion']>="0.54" and $tab[5]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Home page is too busy    </td>

      <!--<td></td>-->
    </tr><?php }if($data['homog']>="0.64" and $tab[4]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Terminology unclear    </td>

      <!--<td></td>-->
    </tr><?php }if($data['nba']<="1" and $tab[4]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Incomprehensible instructions  </td>

      <!--<td></td>-->
    </tr><?php }if($data['comp']>="0.83" and $tab[5]=="High"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Missing functionality   </td>

      <!--<td></td>-->
    </tr><?php }if($data['font']<="2" and $tab[4]=="High"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Incorrect layout of widgets   </td>

      <!--<td></td>-->
    </tr><?php }if($data['unity']<="0.93" and $tab[3]=="High"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Information overload   </td>

      <!--<td></td>-->
    </tr><?php }if($data['nba']<="1" and $tab[4]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Lack of task

support 
  </td>

      <!--<td></td>-->
    </tr><?php }if($data['density']>="0.57" and $tab[3]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Terminology unclear    </td>

      <!--<td></td>-->
    </tr><?php }if($data['density']<="0.57" and $tab[5]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Lack of task support  </td>

      <!--<td></td>-->
    </tr><?php }if($data['nba']<="1" and $tab[4]=="High"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Lack of task support   </td>
      **************************************************************************

      <!--<td></td>-->
    </tr><?php }if($data['homog']<="0.96" and $tab[3]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Functionality unclear    </td>

      <!--<td></td>-->
    </tr><?php }if($data['economy']<="0.20" and $tab[2]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Incorrect appearance of

widgets 
   </td>

      <!--<td></td>-->
    </tr><?php }if($data['homog']<="0.96" and $tab[5]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Home page is too busy    </td>

      <!--<td></td>-->
    </tr><?php }if($data['density']>="0.52" and $tab[4]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Lack of task   </td>

      <!--<td></td>-->
    </tr><?php }if($data['economy']>="0.20" and $tab[5]=="High"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Expected information missing    </td>

      <!--<td></td>-->
    </tr><?php }if($data['font']<="2" and $tab[3]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  ( Incorrect layout of widgets    </td>

      <!--<td></td>-->
    </tr><?php }if($data['cohesion']<="0.54" and $tab[5]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Terminology unclear   </td>

      <!--<td></td>-->
    </tr><?php }if($data['economy']<="0.20" and $tab[2]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">   Incorrect layout of

widgets 
  </td>

      <!--<td></td>-->
    </tr><?php }if($data['word']>="100" and $tab[2]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Screen clutter    </td>

      <!--<td></td>-->
    </tr><?php }if($data['balance']<="0.53" and $tab[2]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Incomprehensible

instructions
   </td>

      <!--<td></td>-->
    </tr><?php }if($data['uniform']>="0.38" and $tab[4]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Expected information missing   </td>

      <!--<td></td>-->
    </tr><?php }if($data['unity']<="0.93" and $tab[2]=="High"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Incorrect appearance of widgets    </td>

      <!--<td></td>-->
    </tr><?php }if($data['balance']<="0.53" and $tab[4]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Functionality unclear    </td>

      <!--<td></td>-->
    </tr><?php }if($data['unity']>="0.93" and $tab[4]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Inconsistent spacing   </td>

      <!--<td></td>-->
    </tr><?php }if($data['font']<="2" and $tab[2]=="Low"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Incorrect appearance of widgets    </td>

      <!--<td></td>-->
    </tr><?php }if($data['symmetry']>="0.57" and $tab[3]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Lack of task support    </td>

      <!--<td></td>-->
    </tr><?php }if($data['sequency']<="0.43" and $tab[3]=="Meduim"){
 ?>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">  Inconsistent spacing    </td>

      <!--<td></td>-->
    </tr><?php } ?>
    
  <tbody >
    
    
    
    <!-- Row 1 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      
      <td style="text-align:center">Button</td>
      
      <!--<td></td>-->
    </tr>
    
    <!-- Row 3 -->
 
   
  </tbody>
</table>

        
           
           
              
    </div>  
    <div style="margin-left:50px">
            
            
            <input type="button" class="btn btn-success" value="Back" id="target" onclick="window.history.back()" />  
                               </div>        
              </div>
               </center>
               
             
             
             
             
             <!--****************************************-->
            <!-- issues-->
             <!--****************************************-->
             
             
           
                
</div>       
</main>
</div>

<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
 
 <script type="text/javascript" src=""></script>


</body>
</html>
<script type="text/javascript">

 var getStyle = function (e, styleName) {
    var styleValue = "";
    if(document.defaultView && document.defaultView.getComputedStyle) {
        styleValue = document.defaultView.getComputedStyle(e, "").getPropertyValue(styleName);
    }
    else if(e.currentStyle) {
        styleName = styleName.replace(/\-(\w)/g, function (strMatch, p1) {
            return p1.toUpperCase();
        });
        styleValue = e.currentStyle[styleName];
    }
    return styleValue;
}
var e = document.getElementTagName('target');
var marLeft = getStyle(e, 'margin-left');
var mar = getStyle(e, 'margin-top');
</script>