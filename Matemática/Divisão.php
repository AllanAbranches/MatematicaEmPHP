<?php
   $numero=$_POST['valor'];

   if($numero%10==0)
   {
    echo("Este número é divisível por 10 e divisível por 2");
   }
   else if ($numero%5==0)
   {
       echo("Este número é divisível por 5");
   }
   else if($numero%2==0)
   {
       echo("Este número é divisível por 2");
   }
   else
   {
       echo("Erro!Escolha um número válido,pois este número não é divisível por nenhum");
   }
?>