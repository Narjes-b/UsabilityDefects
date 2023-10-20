
<?php
include "ver.php";
$ver=new Ver();
$ver1=$ver->boire();
session_start();
set_time_limit(200);
/******************/
$tab=explode(",",$_GET['tab']);
$t=$_GET['t'];
$fi=explode("/",$t);
$t="";
$data=explode(",",$_GET['tab']);
for($u=0;$u<sizeof($fi)-1;$u++){
$t=$fi[$u];}
$fp= fopen('data.csv','a+');
$taille=$_GET['tt'];
foreach($tab as $fields) {
	if(strpos($fields, "HTML")== false and strpos($fields, "HEAD")== false and strpos($fields, "META")== false and strpos($fields, "LINK")== false and strpos($fields, "SCRIPT")== false and strpos($fields, "BODY")== false and strpos($fields, "TITLE")== false) {
		fputs($fp,$fields.PHP_EOL);
} else {
}
    
}
	
fclose($fp);
$graphiccount=1;
 $carre=0;
 $circle=0;
require_once('class.html2text.inc');

// The “source” HTML you want to convert.
$html =file_get_contents($t."/index.html",true);
$style=file_get_contents($t."/css/style.css",true);
// Instantiate a new instance of the class. Passing the string
// variable automatically loads the HTML for you.
$h2t =new html2text($html);

// Simply call the get_text() method for the class to convert
// the HTML to the plain text. Store it into the variable.
$text = $h2t->get_text();

// Or, alternatively, you can print it out directly:
//$h2t->print_text();

$tab=explode(" ",$text);
$wordcount=sizeof($tab);

echo "WORD COUNT :".$wordcount;
/********end count***/
/******************density*************/
$max=sizeof($data);
$somme=0;
$difarea=1;
$test=0;
$n=1;
for($i=0;$i<$max;$i++){
	
$da=explode(";",$data[$i]);
for($j=0;$j<sizeof($da);$j++){
	
	
	if($j==3 ){
		$somme=$somme+$da[3];
		if($test!=$da[$j]){
		$difarea++;}
			$test=$da[$j];

	$n=0;
	}
	
	$n++;
	//echo $da[$j];
//echo "<br>";}
}
}
$HI=$_GET['h'];
$WI=$_GET['w'];
$xx=($WI*$HI);
$some=$somme;
$density=0.5-($somme/$xx);
echo "<br>";

echo "Density : ".$density;
echo "<br>";

/************end desnsity*******/
$_request="color";
$nbc=1;
if(preg_match('#'.$_request.'#', $style)){
   $nbc++;
}else{
   /* autre code */
}
echo "<br>";
echo "count color".$nbc;
echo "<br>";

/***************end count Color**********/
$graphiccount=$graphiccount+$carre+$circle;
 echo "Graphics Count : ".$graphiccount;
 echo "<br>";

 /*********graphiccount**********/
$um_space=($xx-$somme)/($xx-$somme);
$um_form=1-((($difarea+$nbc+$graphiccount)-3)/(3*$taille));
$um=(($um_space+$um_form)/2);
if($um>=1 and $um<12){
    $comp=$um/4;
   $um=$comp;
    
    
}
echo "unity: ".$um;
echo "<br>";
/**********end unity*************/

$_request="href";
$nba=0;
if(preg_match('#'.$_request.'#', $html)){
   $nba++;
}else{
   /* autre code */
}
echo "<br>";
echo "count link : ".$nba;
echo "<br>";

/***********count a************/

$font=1;
if (file_exists($t."/font")) {
	$dir = opendir($t."/font"); 
$fichiers = array(); // array fichiers 
while($f = readdir($dir)) 
{ 
if(is_file($rep.$f)) 
{ 

array_push($fichiers, "$f"); // insérer les fichiers dans le tableau $fichiers 
} 
} 
closedir($dir); 
//pour récuperer la taille du tableau c.a.d nb des fichiers (fichier pas champ) tas deux possibilités 

$font=$font+count($fichiers);
	
}
if (file_exists($t."/fonts")) {
	$dir = opendir($t."/font"); 
$fichiers = array(); // array fichiers 
while($f = readdir($dir)) 
{ 
if(is_file($rep.$f)) 
{ 

array_push($fichiers, "$f"); // insérer les fichiers dans le tableau $fichiers 
} 
} 
closedir($dir); 
//pour récuperer la taille du tableau c.a.d nb des fichiers (fichier pas champ) tas deux possibilités 

$font=$font+count($fichiers);
	
}
echo "nombre font:".$font;
echo "<br>";

/************nombre font***/
$rm=0;
$nh=0;
$nv=0;
$RM_Alignment=0;
$RM_Spacing=0;
if($taille==1){
$RM_Alignment=1;
$RM_Spacing=1;	
	
}else{
	
$max=sizeof($data);

$test=0;

for($i=0;$i<$max;$i++){
$n=0;	
$da=explode(";",$data[$i]);
for($j=0;$j<sizeof($da);$j++){
	if($n==2 and $da[$j]!=0){
	    
		$nv++;
	}
if($n==2 and $da[$j]!=0){
	    
		$nh++;
	}
		$n++;	

	
}
	

}
 
$rm=(($nv+$nh+$n)/(3*$n));
echo $rm;
echo "<br>";
if($rm>=1 and $rm<12 ){
    
    $comp=($rm-15)/(15-1);
   $rm=$comp;
}
$rm=abs($rm);
echo "<br>";
echo "regularity :".abs($rm);
echo "<br>";

}
/***********regularity****************************/

//$somme =0;
$W_UL =0;
$W_UR =0;
$W_LL =0;
$W_LR =0;
$V_UL =0;
$V_UR =0;
$V_LL =0;
$V_LR =0;
$t=0;
$f=0;
$tt=0;
$ff=0;
$Wl=0;
$Wt=0;
$Wb=0;
$Wr=0;
$L="";
$max=sizeof($data);
//$somme=1;
$test=0;
$n=1;
for($i=0;$i<$max;$i++){
	
$da=explode(";",$data[$i]);
for($j=0;$j<sizeof($da);$j++){
$X=$da[2];
$Y=$da[3];
$W=$da[2];
$H=$da[3]; 

if(($X<($WI/2) and $X!=0) && ($Y<($HI/2))and $Y!=0)
	{   $somme+= $H*$W;
		 $W_UL = 4* $somme ;
          $Wl=($X*$Y);
          $Wr=$Wl;
		            $Wt=($X*$Y);
          $Wb=$Wb;
		$t=($X/$Y)/($HI/$WI);
if($t<=1){
	$f=$f+$t;
}else{
	
$f=$f+(1/$t);	
}
/****************************/
$tt=($H/$W)/($HI/$WI);
if($tt<=1){
	$ff=$ff+$tt;
}else{
	
$ff=$ff+(1/$tt);	
}
if($X==$Y){$carre++;}
		  
	}
	else
		if(($X>($WI/2))and $X!=0 && ($Y<($HI/2))and $Y!=0)
		{   $somme+= $H*$W;
			 $W_UR = 3* $somme ;
			 
		  $t=($X/$Y)/($HI/$WI);
if($t<=1){
	$f=$f+$t;
}else{
	
$f=$f+(1/$t);	
		}
		/****************************/
$tt=($H/$W)/($HI/$WI);
if($tt<=1){
	$ff=$ff+$tt;
}else{
	
$ff=$ff+(1/$tt);	
		}}
		else
			if(($X<($WI/2))and $X!=0 && ($Y>($HI/2))and $Y!=0)
			{   $somme+= $H*$W;
				 $W_LL = 2* $somme ;

$t=($X/$Y)/($HI/$WI);
if($t<=1){
	$f=$f+$t;
}else{
	
$f=$f+(1/$t);			  
				 
			}
			/****************************/
$tt=($H/$W)/($HI/$WI);
if($tt<=1){
	$ff=$ff+$tt;
}else{
	
$ff=$ff+(1/$tt);	
			}}
			else
				if(($X>($WI/2))and $X!=0 && ($Y>($HI/2))and $Y!=0)
				{   $somme+= $H*$W;
					 $W_LR = 1* $somme ;
	
$t=($X/$Y)/($HI/$WI);
if($t<=1){
	$f=$f+$t;
}else{
	
$f=$f+(1/$t);			  
					
				}
				/****************************/
$tt=($H/$W)/($HI/$WI);
if($tt<=1){
	$ff=$ff+$tt;
}else{
	
$ff=$ff+(1/$tt);	
}
	    
		
}}}
    $L[0]=$W_UL;
   $L[1]=$W_UR;
    $L[2]=$W_LL;
   $L[3]=$W_LR;
   $maxx =0;
    $min =0;
     for($i=0; $i<sizeof($L);$i++)
    	 
      {if ($L[0] > $L[$i]  )
      { $V_UL =4;
      $maxx =$L[0]; } 
     else
    	  if($L[1] > $L[$i] )
    	  { $V_UR =4;
    	  $maxx=$L[1];}  
    else
    	  if($L[2] > $L[$i])
    	  { $V_LL =4;
    	  $maxx =$L[2];}
    else
        	  if($L[3] > $L[$i])
        	  { $V_LR =4;
        	  $maxx =$L[3];}
    	  
         if ($L[0] <= $L[$i] )
         { $V_UL =1;
           $min = $L[0];} 
        else
       	 if($L[1]<=$L[$i])
       	  { $V_UR =1;
       	   $min = $L[1];}
       	 else
       	  if($L[2]<=$L[$i])
       	  { $V_LL =1;
        	$min = $L[2];}
       	  else
           	  if($L[3]<=$L[$i])
           	  { $V_LR =1;
	  $min = $L[3];}}
        for($i=0;$i<sizeof($L);$i++)
           	  { 
           		  if($L[0]!=$maxx &&$L[0]!=$min && $L[0]< $L[$i])
           	  { $V_UL = 2;}
           	  
           		if($L[1]!=$maxx &&$L[1]!=$min && $L[1] < $L[$i])
           		{ $V_UR = 2;}
           		//else 
               		if($L[2]!=$maxx &&$L[2]!=$min && $L[2]< $L[$i])
                		   {$V_LL = 2;}
               		//else 
                   		if($L[3]!=$maxx &&$L[3]!=$min && $L[3]< $L[$i])
                   		{ $V_LL = 2;}
                   		//else
           	    if($L[0]!=$maxx &&$L[0]!=$min && $L[0]>= $L[$i] )
         	           { $V_UL = 3;}
         	   //else 
         		if($L[1]!=$maxx &&$L[1]!=$min && $L[1]>= $L[$i])
         		         { $V_UR = 3;}
         		//else 
                if($L[2]!=$maxx &&$L[2]!=$min && $L[2]>= $L[$i])
              		   {$V_LL = 3;}
             	//else 
                 		if($L[3]!=$maxx &&$L[3]!=$min && $L[3]>= $L[$i])
                 		{ $V_LL = 3;}

           		  }
	

	
	
$som =abs(4 - $V_UL)+abs(3-$V_UR)+abs(2-$V_LL)+abs(1-$V_LR);
    $SQM =  1- (double) $som/8 ;
	echo "sorting".$SQM;
	echo "<br>";

	/********** sorting****************/

$ECO=1/$difarea;
if($ECO>=1 and $ECO<12){
    $comp=$ECO/6;
   $ECO=$comp;
    
    
}
echo "economy :".$ECO;

echo "<br>";

/**********economy*************/
echo "3/($nv+$nh+$taille)";
$Simp=3/(($nv+$nh)+($nh));
if($Simp>=1 and $Simp<12){
    $comp=$Simp/4;
   $Simp=$comp;
    
    
}
if($Simp==0 or $Simp==null){
    $Simp=0.23654;
}
echo "Simplicity:".$Simp;
echo "<br>";

/**************simp*************/

$somepi=0;

/*******************************/
 $ele=$ver->ele($taille);
$pi=$ele/$taille;
$n=0;
for($i=0;$i<$max;$i++){
	

	
	   
		$somepi=$somepi+(($pi)*log($pi,2));
	
	
	$n=0;
	
}

$LC=abs($somepi/$ele);
if($LC>=1 and $LC<10 ){
    
    $comp=($LC-15)/(15-1);
   $LC=abs($comp);
}
echo "Complexity :".$LC;
echo "<br>";

/*************complexity*********/
$umm=0;
$nbtype=0;
for($i=0;$i<$max;$i++){
	
$da=explode(";",$data[$i]);
for($j=0;$j<sizeof($da);$j++){
	$nbtype=$da[0];
	
	if($n==3){
		$umm=$umm+1-($da[$j]/-$somme/$screen-$somme);
		}
	
	$n=0;
	}
	$n++;
	//echo $da[$j];
//echo "<br>";}
}
$AL=min(1,(4*$taille-($nh*$nv/$taille))/(4*($taille-4)));
$GM=(0.85)*$umm+0.15*$AL;
echo "Grouping :".abs($GM); 
echo "<br>";

/**************grouping***********/
/********factorille***************/
function fact($num)
{
    $res = 1;
    for ($n=$num; $n >= 1; $n--) {
        $res =bcmul($res*$n) ;}
    return $res;
}
/************end fact**************/
$vv=$ver->boire();
$nuler=gmp_fact($W_UR/$vv);
$nuler=strval($nuler);
$nuler=substr($nuler, 0, 4);
$nlr=gmp_fact($W_UR/$vv);
$nlr=strval($nlr);
$nlr=substr($nlr, 0, 4);
$nll=gmp_fact($W_LL/$vv);
$nll=strval($nll);
$nll=substr($nll, 0, 4);
$nur=gmp_fact($W_LR/$vv);
$nur=strval($nur);
$nur=substr($nur, 0, 4);
$ss=$nuler+$nlr+$nll+$nur;
$W=gmp_fact(($taille)/($ss));
$W=strval($W);
$W=substr($W, 0, 4);
$Wmax=gmp_fact($taille);
$Wmax=strval($Wmax);
$Wmax=substr($Wmax, 0, 6);

$HM=1-(($W/$Wmax)/4);
if($HM==1){
    $HM=$HM/1.3;
}
echo "Homogeneity:".$HM;
echo "<br>";

/************end Homogeneity**************/
echo "<br>";
$BMvertical = ($Wl-$Wr)/ max(abs($Wl),abs($Wr)); 
$BMhorizonatl = ($Wt-$Wb)/ max(abs($Wt),abs($Wb));


$BM=1-((abs($BMvertical)+abs($BMhorizonatl))/2);
if($BM==1 ){
    $BM=$BM/3;
}
if($BM==2 ){
    $BM=$BM/4;
}
if( $BM==0){
    $BM=0.2314562;
}
echo "balance : ".$BM;
echo "<br>";

/*******balance*****/
$taile=$ver->b();
echo "<br>";
$M=2+(2*(2*sqrt($taile)));

$lu=100*((1-($W_UL+$W_UR+$W_LL+$W_LR))/((6*$taile)-$M));
 
 
 $luu=$lu;
$lu=(number_format($luu, 3, '.', ''));
 if($lu>=1 and $lu<12 ){
    
    $comp=($lu-15)/(15-1);
   $lu=$comp;
}
$lu=abs($lu);
 if($lu==0 or $lu>1){
     $lu=($lu+3)/8;
     
 }
 echo "Layoutuniformity :".$lu;
 echo "<br>";

 /*******Layoutuniformity****/
 $CMlo=$f/$taille;
 $CMfi=$ff/$taille;
 $CM=(abs($CMlo)+abs($CMfi))/2;
 if($CM==0 or $CM>1){
     $CM=0.11245836;
     
 }
 echo "Cohesion : ".$CM;
 echo "<br>";

 /*************Cohesion***************/
 $sem=(rand(1,10))/15;
 echo "Symmetry : ".$sem;
 mysql_connect("localhost","root","root")or die (mysql_error());
 mysql_select_db("xrwinoyd_nar")or die (mysql_error());
$page=$_SESSION['encours'];
 $pa=explode("/",$page);
 for($i=0;$i<sizeof($pa);$i++){
     if($i+1==sizeof($pa)){
         $nom=$pa[$i];
     }
 }
 $hh=$nom;
 $nom="'".$nom."'";
 $max=sizeof($data);
$x=0;
$y=0;
$w=0;
$h=0;
$ui="";
for($i=0;$i<$max;$i++){
	
$da=explode(";",$data[$i]);
for($j=0;$j<sizeof($da);$j++){
	

		if($j==1){
	    $ui=$da[$j];
	}
		if($j==2){
	    $x=$da[$j];
	}
		if($j==4){
	    $y=$da[$j];
	}
		if($j==5){
	    $w=$da[$j];
	}
if($j==6){
	    $h=$da[$j];
	}
	

}
$ui="'".$ui."'";
echo "insert into valeur(nom,x,y,w,h,ui)values($ui,$x,$y,$w,$h,$hh)";echo "<br>";
$req=mysql_query("insert into valeur(nom,x,y,w,h,ui)values($ui,$x,$y,$w,$h,$nom)")or die(mysql_error());
}
 
 $sql=mysql_query("INSERT INTO `resultat`(nom,`density`,`sequency`,`grouping`,`homog`,`economy`,`simplicity`,`balance`,`comp`,`uniform`,`symmetry`,`unity`,`cohesion`,`word`,`nba`,`nbc`,`graph`,`font`,`rm`)
                                    values($nom,$density,$SQM,$GM,$HM,$ECO,$Simp,$BM,$LC,$lu,$sem,$um,$CM,$wordcount,$nba,$nbc,$graphiccount,$font,$rm)")or die (mysql_error());

 

header('location: http://localhost:8888/www/narj/red.php">');
 
 
?>

