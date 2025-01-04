<?php 

// Composição

class Pessoa {
    public function atribuiNome($nome) {
        return "O nome da pessoa é ". $nome;
    }
}

class Exibe {
    public $pessoa;

    public function __construct($nome){
        $this -> pessoa = new Pessoa;
        echo $this -> pessoa -> atribuiNome($nome);
    }
}

$exibe = new Exibe('Pedro Henrique Teixeira Pião');