<?php
$Custo=$_REQUEST['valor'];
$total;

$total = $Custo + ($Custo/100)*45+($Custo/100)*28;

echo "<center>O custo final será: $total</center>"

?>