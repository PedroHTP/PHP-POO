<?php 

class Animal {
    public function __construct()
    {
        
    }
    public function Andar () {
        echo "O animal andou";
    }
}
class Cavalo extends Animal {
    public $nome = "Cavalo";

    public function Andar () {
        echo "O $this->nome correu";
    }
}

$cavalo = new Cavalo();
$cavalo-> Andar();
