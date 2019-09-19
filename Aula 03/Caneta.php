<?php

class Caneta {
   public $modelo;
   public $cor;
   private $ponta;
   protected $carga;
   protected $tampada;

   public function escrever() {
      if ($this->tampada == true) {
         echo "<p>Não é possível escrever, caneta com tampa.</p>";
      } else {
         echo "<p>Estou escrevendo...</p>";
      }
   }

   public function rabiscar() {
      if ($this->tampada == true) {
         echo "<p>Não é possível rabiscar, caneta com tampa.</p>";
      } else {
         echo "<p>Estou rabiscando...</p>";
      }
   }

   public function tampar() {
      $this->tampada = true;
   }

   public function destampar() {
      $this->tampada = false;
   }

}
