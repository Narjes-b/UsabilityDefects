<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Compoments Propreties</title>

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
             
             <div style="margin-right:50px; margin-top:-40px;direction:rtl">
           <button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button mdl-button--icon" >
  <a href="index.php" class="mdl-navigation__link"><i class="material-icons">home</i></a>
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
            
               <a href="#tab2-panel" class="mdl-tabs__tab" >Components propreties</a>
            
                
             
            </div>
            <br /><br /><br /><br />
            
           
            <!--****************************************-->
            <!-- components-->
             <!--****************************************-->
             
             <center>
             
             
               <div id="analysis"> 
              <div>
                
     <table id="components" style="width:700px;  margin-top:-70px;margin-left:230px " class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
  <thead>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <th colspan="5" class="mdl-data-table__cell--non-numeric"><big><center>COMPONENTS PROPRETIES</center></big></th>
     <!-- <th><big>USABILITY ISSUES</big></th>-->
    </tr>
  </thead>
  <tbody >
    
    <!-- Row 1 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
    
      <th  class "mdl-data-table__cell--non-numeric">ELEMENT</th>
      <th>X</th>
      <th >Y</th>
      <th >WIDTH</th>
      <th >HEIGHT</th>
      <!--<td></td>-->
    </tr>
    
    <!-- Row 2 -->
    <?php 
    mysql_connect("mysql10.pro","xrwinoyd_miro","Mirodev1921**")or die (mysql_error());
 mysql_select_db("xrwinoyd_nar")or die (mysql_error());
    
    $sql=mysql_query("select * from valeur where ui='".$_GET['id']."'");
    
   
    while($d=mysql_fetch_array($sql)){
        
        
    ?> 
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      
      <td><center><?php echo $d['nom'];?></center></td>
      <td><center><?php echo $d['x'];?></center></td>
      <td><center><?php echo $d['y'];?></center></td>
      <td><center><?php echo $d['w'];?></center></td>
      <td><center><?php echo $d['h'];?></center></td>
      <!--<td></td>-->
    </tr>
    <?php } ?>
    <!-- Row 3 -->
 
   
  </tbody>
</table>

           
           
              
    </div>  
    <div style="margin-left:50px">
            
            
            <input type="button" class="btn btn-success" value="Back" onclick="window.history.back()" />  
                               </div>        
              </div>
               </center>
               
             
             
             
             
             <!--****************************************-->
            <!-- components-->
             <!--****************************************-->
             
             
             
           
                
</div>       
</main>
</div>

<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
 
 <script type="text/javascript" src="js/AddRow.js"></script>


</body>
</html>
