<?php
include("questao1.php");
$v1=$_POST['txtv1'];
$v2=$_POST['txtv2']; 

if(isset($_POST['btnso'])){

    $t=$v1+$v2;
    echo ("<center><h2> O resultado da soma é: $t <h2></center>");
}
else if (isset($_POST['btnsu'])){
    $t=$v1-$v2;
    echo ("<center><h2> O resultado da subtração é: $t <h2></center>");
}
else if (isset($_POST['btnmu'])){
    $t=$v1*$v2;
    echo ("<center><h2> O resultado da multiplicação é: $t <h2></center>");
}
else if (isset($_POST['btndi'])){
    $t=$v1/$v2;
    echo ("<center><h2> O resultado da divisão é: $t <h2></center>");
}

else if (isset($_POST['btnpo'])){
    $t= pow($v1,$v2); 
    echo ("<center><h2> O resultado da potenciação é: $t <h2></center>");
}
?>  

 