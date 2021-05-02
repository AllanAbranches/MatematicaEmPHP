<?php
include("questao6.php"); 

$r=$_POST['txtv1']; 
$a=3.14*(pow($r, 2)); 

echo("<center><h3> A área do círculo é: $a </h3></center>"); 
?>