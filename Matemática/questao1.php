<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    </head>
<body>

<div id="simbolo">

<img src="calculadora.jpg" width="80" height="80" alt="">

</div>



   <h1 align="center">CALCULADORA</h1>
     <center>
    <form action="calculo.php" method="post">

    Valor 1: <input type="text" name="txtv1" placeholder="Digite o 1º valor"><br><br>
    Valor 2: <input type="text" name="txtv2" placeholder="Digite o 2º valor"><br><br>

    <input type="submit" class="bt" value="Somar" name="btnso">
    <input type="submit" class="bt" value="Subtrair" name="btnsu">
    <input type="submit" class="bt" value="Multiplicar" name="btnmu">
    <input type="submit" class="bt" value="Dividir" name="btndi">
    <input type="submit" class="bt" value="Potência" name="btnpo"><br><br><br>


   </form>
     
     </center>
     <br>
    
</body>
</html>
