<!DOCTYPE html>
<html lang="pt_BR">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Aula 02 - POO</title>
</head>
<body>
   <div>

      <?php
         require_once 'Caneta.php';
         $c1 = new Caneta;
         $c1->cor = "Azul";
         $c1->ponta = 0.5;
         $c1->tampada = false;

         $c1->tampar();
         // var_dump($c1);
         print_r($c1);
         echo "<br><br>";
         $c2 = new Caneta;
         $c2->cor = "Verde";
         $c2->ponta = 1;

         $c2->tampar();
         print_r($c2);

      ?>   
   
   </div>
</body>
</html>