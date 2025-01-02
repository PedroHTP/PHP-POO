<?php 
    class Pessoa {
        public $nome;
        public $idade;

        public function Falar() {
            echo $this->nome." de ".$this->idade." anos acabou de falar.";
        }
    }

$rodrigo = new Pessoa();
$rodrigo -> nome = "Pedro Henrique Teixeira Pião";
$rodrigo -> idade = 17;

$rodrigo -> falar();