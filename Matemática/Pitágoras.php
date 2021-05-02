<?php
$CatAd=$_REQUEST['a'];
$CatOp=$_REQUEST['b'];
$Hipo=$_REQUEST['c'];
$Resultado;

$Hipo=pow ( $Hipo , 2);
$CatAd=pow ( $CatAd, 2 );
$CatOp=pow ( $CatOp , 2 ); 
$Resultado = $Hipo-$CatOp;

$Hipo=$CatAd+$CatOp;
$CatAd=$Hipo-$CatOp;
$CatAd = $Resultado;
$CatAd=sqrt($Resultado);










echo ("<center> Resultado é: $CatAd </center> <br> ");

?>