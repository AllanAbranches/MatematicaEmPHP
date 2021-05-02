<?php
include("questao7.php");  

$v1=$_REQUEST['txtv1'];
$v2=$_REQUEST['txtv2'];




$t=$v1+$v2;
$ad=8;
$sub=5; 
$u=$t+$ad;
$v=$t-$sub;

if($t>20){ 
    
    $t=$v1+$v2;
    echo("<center><h3> O resultado é: $t+8 = $u </h3></center>"); 
}
else if($t<=20){
  
      $t=$v1+$v2;

    echo("<center><h3> O resultado é $t-5 = $v </h3></center>");
}
    
    
    
    
    ?> 