<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Usability Plugin !</title>

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


<body id="count">

<!-- header -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" >
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
               <a href="#tab1-panel" class="mdl-tabs__tab"  onclick="remove()">metrics result</a>
              
                <a href="#tab4-panel" class="mdl-tabs__tab" onclick="remove()">About</a>
                
             
            </div>
            <br /><br />
            
            
            
           <center>  
          <?php 
   mysql_connect("localhost","root","root")or die (mysql_error());
 mysql_select_db("xrwinoyd_nar")or die (mysql_error());
    
    $sql=mysql_query("select * from resultat");
    
    $nom="";
    while($d=mysql_fetch_array($sql)){
        if($nom!=$d['nom']){
            $nom=$d['nom'];
        
    ?>   <center>        
<div class="remove">

      <p class="xx-large" id="titre" style="color: #CCC; font-size:18px; font-family: 'Arial Black', Gadget, sans-serif;" >INTERFACE NAME : <?php echo $d['nom'];?> </p> <br /><br />   <br /><br />

</div>
            
           

<div id="analysis"   >
        <table id="metrics" style="width:500px; align-content:left; margin-top:-20px ; " class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
  <thead>
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <th class="mdl-data-table__cell--non-numeric"><big>METRICS</big></th>
      <th><big><center>RESULTS</center></big></th>
     
     <!-- <th><big>USABILITY ISSUES</big></th>-->
    </tr>
  </thead>
  <tbody>
    
    <!-- Row 1 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Density</td>
      <td><center><?php echo abs(number_format($d['density'], 2, '.', ''));?></center></td>
     
      <!--<td></td>-->
    </tr>
    
    <!-- Row 2 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Sequence</td>
      <td><center><?php echo abs(number_format($d['sequency'], 2, '.', ''));?></center></td>
    
      <!--<td></td>-->
    </tr>
    
    <!-- Row 3 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Grouping</td>
      <td><center><?php echo abs(number_format($d['grouping'], 2, '.', ''));?></center></td>
  
     
      <!--<td></td>-->
    </tr>
    
     <!-- Row 4 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Regularity</td>
      <td><center><?php echo abs(number_format($d['rm'], 2, '.', ''));?></center></td>
    
      <!--<td></td>-->
    </tr>
    
      <!-- Row 5 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Homogeneity</td>
      <td><center><?php echo abs(number_format($d['homog'], 2, '.', ''));?></center></td>
  
     <!-- <td></td>-->
    </tr>
       <!-- Row 6 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Economy</td>
      <td><center><?php echo abs(number_format($d['economy'], 2, '.', ''));?></center></td>
    
      <!--<td></td>-->
    </tr>
       <!-- Row 7 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Simplicity</td>
      <td><center><?php echo abs(number_format($d['simplicity'], 2, '.', ''));?></center></td>
    
     <!-- <td></td>-->
    </tr>
       <!-- Row 8 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Balance</td>
      <td><center><?php echo abs(number_format($d['balance'], 2, '.', ''));?></center></td>
     
     <!-- <td></td>-->
    </tr>
       <!-- Row 9 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Layout complexity</td>
      <td><center><?php echo abs(number_format($d['comp'], 2, '.', ''));?></center></td>
    
     <!-- <td></td>-->
    </tr>
       <!-- Row 10 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Layout uniformity</td>
      <td><center><?php echo abs(number_format($d['uniform'], 2, '.', ''));?></center></td>
    
      <!--<td></td>-->
    </tr>
       <!-- Row 11 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Symmetry</td>
      <td><center><?php echo abs(number_format($d['symmetry'], 2, '.', ''));?></center></td>
   
     <!-- <td></td>-->
    </tr>
       <!-- Row 12 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Unity</td>
      <td><center><?php echo abs(number_format($d['unity'], 2, '.', ''));?></center></td>
     
     <!-- <td></td>-->
    </tr>
       <!-- Row 13 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Cohesion</td>
      <td><center><?php echo abs(number_format($d['cohesion'], 2, '.', ''));?></center></td>
   
      <!--<td></td>-->
    </tr>  
    
     <!-- Row 14 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Word count</td>
      <td><center><?php echo abs(number_format($d['word'], 2, '.', ''));?></center></td>
 
     <!-- <td></td>-->
    </tr>
    
      <!-- Row 15 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Link count</td>
      <td><center><?php echo abs(number_format($d['nba'], 2, '.', ''));?></center></td>
   
     <!-- <td></td>-->
    </tr>
    
      <!-- Row 16 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Color count</td>
      <td><center><?php echo abs(number_format($d['nbc'], 2, '.', ''));?></center></td>
   
     <!-- <td></td>-->
    </tr>
    
      <!-- Row 17 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Graphics count</td>
      <td><center><?php echo abs(number_format($d['graph'], 2, '.', ''));?></center></td>
    
     <!-- <td></td>-->
    </tr>
    
      <!-- Row 18 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class="mdl-data-table__cell--non-numeric">Fonts count</td>
      <td><center><?php echo abs(number_format($d['font'], 2, '.', ''));?></center></td>
    
      <!--<td></td>-->
    </tr>
    
  </tbody>
</table>
       
    </div>   <br /><br /><br /><br />
<div class="remove">
          <a href="components.php?id=<?php echo $d['nom'];?>" ><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored " type="button" name= "action" >Components propreties</button></a>

      
        </div>
        <br>
        <div class="remove">
          <a href="issue.php?id=<?php echo $d['nom'];?>" ><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored " type="button" name= "action" > Detected usability defects</button></a>

      
        </div>
   <?php }} ?>
   
        
       
</form>  
</center>

            </center>   
            
         <!--****************************************-->
            <!-- Uploaded files-->
             <!--****************************************-->
             <center>
             
            <div class="mdl-tabs__panel " id="tab2-panel" style="margin-left:20px">
            
            <p >HTML File : </p>
            <textarea style="width:900px; height:300px"  id="editor1" title="HTML file"></textarea>
            
             <p >CSS File : </p>
            <textarea style="width:900px; height:300px"  id="editor2" title="css file"></textarea>
            
          
            </div>
       
         </center>
              <!--****************************************-->
            <!-- GUI Analyzis-->
             <!--****************************************-->
           
           
           
            
             <div class="mdl-tabs__panel " id="tab1-panel" style="margin-left:20px">
             
            <div id="analysis">
             
                    <div>
            
           
                </div>
                
                <div>
                
                
                <div style="margin-left:50px">
            
            <a href="components.html" class="btn btn-success" >Components propreties</a>
            
                               </div><br/>
                               
                               
                                <div style="margin-left:50px">
            
           <a href="issues.html" class="btn btn-success" >Detected Usability Issues</a>
           
                                </div> <br/><br/><br/>
            
                                
                               
                               
              </div>
            
        </div>
            
            
            
            
            
    </div>
          <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>  
               <!--****************************************-->
            <!-- GUI Analyzis-->
             <!--****************************************-->
            
            
            
              <!--****************************************-->
            <!-- code smell-->
             <!--****************************************-->
             <center>
                <div class="mdl-tabs__panel " id="tab3-panel" style="margin-left:20px; margin-top:-200px">
                 <p class="xx-large" id="titre" style="color: #CCC; font-size:18px; font-family: 'Arial Black', Gadget, sans-serif;" >Not developed yet ! </p> <br /><br />
                </div>
                </center>
             
              <!--****************************************-->
            <!-- code smell-->
             <!--****************************************-->
             
             
             
              <!--****************************************-->
            <!-- About-->
             <!--****************************************-->
            
               <center>
                <div class="mdl-tabs__panel " id="tab4-panel" style="margin-left:20px">
                
                <center>
                <div style="margin-top:-300px" class="main" > 
    
   <div class="demo-card-wide mdl-card mdl-shadow--8dp" >
     <!-- MDL Card Container -->
     
      <div class="mdl-card__title">
        <!-- MDL Card Title container -->
        <h2 class="mdl-card__title-text"></h2>
                 <!-- title text -->
      </div>
     
     <!-- Supporting Text -->
      <div class="mdl-card__supporting-text">
       <p style="text-align:justify">This plugin has been elaborated as a contribution of a Master Thesis . This tool aims to predict the usability of Hybrid mobile apps UI before they are being wrapped into a native container . It is based on 18 structural predictive metrics , which they proved their reliability in estimating the usability in an early design phase.</p>
       <p style="text-align:left"> Elaborated by: </p>
       <p style="text-align:left">M.SC ESE - Higher Institute of Computer science and Multimedia of Sfax -  2017 / 2018</p>
       <p style="text-align:left">Version : 1.0</p>
      </div>
     
    </div>
  </div> <!-- End of .main class -->
                </center>
                </div>
                
                
                
                
                
                
               </center>
               
          
              <!--****************************************-->
            <!-- About-->
             <!--****************************************-->
           
                
</div>       
</main>
</div>






 
 
 
 
 
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
 
<script type="text/javascript" src="plugin.js"></script>
<script type="text/javascript" src="upload-files.js"></script>
<script type="text/javascript" src="js/plugin-metrics.js"></script>
<script type="text/javascript" src="js/plugin-parser.js"></script>
<script type="text/javascript" src="js/plugin-defects.js"></script>

 

 
</body>
</html>
