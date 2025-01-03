<?php

class Animal {
    public $nome;
    protected $especie;
    private $idade;

    public function __construct($nome, $especie, $idade) {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->idade = $idade;
    }

    public function obterIdade() {
        return $this->idade; // Apenas acessível dentro da classe Animal
    }
}

class Cachorro extends Animal {
    public function exibirEspecie() {
        return $this->especie; // Acesso permitido porque é 'protected'
    }

    // Não pode acessar $idade diretamente porque é 'private' na classe base
}

$cachorro = new Cachorro("Rex", "Canis Lupus", 5);
echo "Nome: ".$cachorro->nome ."<br>"; // Acesso permitido (public)
echo "Especie: ".$cachorro->exibirEspecie() ."<br>"; // Acesso permitido (protected)
// echo $cachorro->idade; // Erro! (private)
echo "Idade: ".$cachorro->obterIdade()." anos"; // Acesso permitido via método público