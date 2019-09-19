<!DOCTYPE html>
<html lang="pt_BR">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../_css/newEstilo.css">
   <title>Aula 03 - POO</title>
</head>
<body>
   <div>
      <pre>
      <?php
         require_once 'Caneta.php';
         $c1 = new Caneta;
         $c1->modelo = "BIC Cristal";
         $c1->cor = "Azul";
         // $c1->ponta = 0.5;
         // $c1->carga = "99%";
         // $c1->tampada = true;
         
         $c1->rabiscar();
         
         $c1->tampar();
         print_r($c1);

      ?>
      </pre>
   
   </div>
</body>
</html>