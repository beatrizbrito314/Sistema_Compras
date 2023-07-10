<?php
session_start();
$totalitem=" ";

if(isset($_POST["comprar"])){

if(isset($_POST["item1"])){
    $totalitem= valor_itens($_POST["valor1"], $_POST["qt1"]);
}
echo $totalitem;
}

function valor_itens($valor, $qt){
    $res=$valor*$qt;
    return $res; 
};
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

  <?php

  ?>

   <form action="pag_itens.php" method="post">
    <table>
        <tr>
        <td> <input type="checkbox" name="item1" value="1"></td>
        <td><h1>nome do item</h1></td>
        <td><input type="number" name="qt1"></td>
        <td><input type="text" name="valor1" value="8"readonly></td>
        </tr>
        
        <tr>
        <td> <input type="checkbox" name="item2" value="1"></td>
        <td><h1>nome do item</h1></td>
        <td><input type="text" name="qt2"></td>
        <td><input type="text" name="valor2" value="000,0"readonly></td>
        </tr>
        
        <tr>
        <td> <input type="checkbox" name="item3" value="1"></td>
        <td><h1>nome do item</h1></td>
        <td><input type="text" name="qt3"></td>
        <td><input type="text" name="valor3" value="000,0"readonly></td>
        </tr>
    </table>
    <input type="submit" name="comprar">


   </form>
 
</body>




</html>
