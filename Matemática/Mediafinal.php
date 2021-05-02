<?php
   $n1=$_REQUEST["valor1"];
   $n2=$_REQUEST["valor2"];
   $n3=$_REQUEST["valor3"];
   $media_final;


   $media_final = ($n1 * 2 + $n2*3 + $n3 * 5)/10;

   if($media_final>=5 && $media_final<= 10)
   {
      echo ("<center>O aluno foi aprovado com média: $media_final ,não precisa ficar de castigo</center>");
   }
   else if($media_final>=10)
   {
      echo("<center>Einstein não tinha morrido?</center>");
   }
   else
   {
      echo("<center>O aluno foi reprovado com média: $media_final ,se lascou bonito");
   }

?>