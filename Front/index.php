<?php 

require_once '.\cifra.php';


if (isset($_POST['BtnCifra'])) {



}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Cifra de César</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="index.js">
  </head>

<body>
    <div id="nav-bar">



    </div>
    
    <div id="box-all">
        <div id="box-cifra">
            <label for=""> Digite o código a ser cifradp</label>
            <input type="text" name = "codigo_cifra">
            <button> Codificar </button>
        </div>
        
        <div id = "box-descifra">
            <label for=""> Digite o código a ser cifrado</label>
            <input type="text" name = "codigo_cifra">
            <button name="BtnCifra"> Codificar </button>
        </div>

    </div>
    

</body>
</html>
