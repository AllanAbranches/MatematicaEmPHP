
<?php
include("questao9.php");
   if (isset($_POST['txtv1']))
   {
       $v1=$_POST['txtv1'];

    if($v1==1)
   {
     echo ("<center><h3> O mês correspondente é Janeiro <h3></center>");
    }
   if($v1==2)
   {
     echo ("<center><h3> O mês correspondente é Fevereiro <h3></center>");
   }
   if($v1==3)
   {
    echo ("<center><h3> O mês correspondente é Março <h3></center>");
   }
   if($v1==4)
   {
    echo ("<center><h3> O mês correspondente é Abril <h3></center>");
   }
   if($v1==5)
   {
    echo ("<center><h3> O mês correspondente é Maio <h3></center>");
    }
   if($v1==6)
   {
    echo ("<center><h3> O mês correspondente é Junho <h3></center>");
   }
   if($v1==7)
   {
    echo ("<center><h3> O mês correspondente é Julho <h3></center>");
   }
   if($v1==8)
   {
    echo ("<center><h3> O mês correspondente é Agosto <h3></center>");
   }
   if($v1==9)
   {
    echo ("<center><h3> O mês correspondente é Setembro <h3></center>");
   }
   if($v1==10)
   {
    echo ("<center><h3> O mês correspondente é Outubro <h3></center>");
   }
   if($v1==11)
   {
    echo ("<center><h3> O mês correspondente é Novembro <h3></center>");
    }
   if($v1==12)
   {
    echo ("<center><h3> O mês correspondente é Dezembro <h3></center>");
    }
   else if($v1==0 or $v1>=13){
     echo("<center><h3> Este número não corresponde a nenhum mês <h3></center>");
    
   }
}

?>