<!DOCTYPE html>
<html lang="pt_BR">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Aula 04 - POO</title>
</head>
<body>
   <div>
      <pre>
         <?php
            require_once 'Caneta.php';

            $c1 = new Caneta("Bic", "azul", 0.5);
            print_r($c1);
            echo "<br>";
            $c2 = new Caneta("Compass", "vermelho", 1);
            print_r($c2);


         ?>
      </pre>
   
   </div>
</body>
</html>