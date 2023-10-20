<?php
session_start();
if(isset($_GET['t'])){
    $_SESSION['res']=$_GET['t'];
$page=explode(";",$_GET['t']);
$maint="";
$pa="";
$j=0;
if(sizeof($page)>0){
for($i=0;$i<sizeof($page);$i++){
    if($maint==null){
    $maint=$page[$i];}
    if($i>0){
        $pa=$p.";".$page[$i];
        $j++;
    }
}
echo $maint;
    $_SESSION['page']=$pa;
    $_SESSION['encours']=$maint;
    
  echo '<meta http-equiv="refresh" content="0;URL=http://localhost:8888/www/narj/'.$maint.'">';  
    
}else{
    echo '<meta http-equiv="refresh" content="0;URL=http://localhost:8888/www/narj/affiche.php">';
}}else{
  $page= explode(";",$_SESSION['page']);
$maint="";
$pa="";
$j=0;
if(sizeof($page)>0){
for($i=0;$i<sizeof($page);$i++){
    if($maint==null){
    $maint=$page[$i];}
    if($i>0){
        $pa[$j]=$page[$i];
        $j++;
    }
}
    $_SESSION['page']=$pa;
    $_SESSION['encours']=$maint;
  echo '<meta http-equiv="refresh" content="0;URL=http://localhost:8888/www/narj/'.$maint.'">';  
    
}else{
    echo '<meta http-equiv="refresh" content="0;URL=http://localhost:8888/www/narj/affiche.php">';
}  
}
?>