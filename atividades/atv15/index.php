<?php
// Clone
// Construct
// Invoke
// Tostring
// Get
// Set

class Pessoa {
    private $dados = array();

    public function __set($nome, $valor) { 
        $this ->dados[$nome] = $valor;
    } // O método mágico __set no PHP é usado para interceptar tentativas de atribuição de valores a propriedades inacessíveis de um objeto. 

    public function __get($nome){
        return $this -> dados[$nome];
    } // O método mágico __get é o oposto do __set. Ele é chamado quando você tenta acessar uma propriedade inacessível ou inexistente.

    public function __toString(){
        return "Tentei imprimir o objeto.";
    } // O método mágico __toString() no PHP é usado para converter um objeto em uma string.

    public function __invoke() {
        return "Objeto como função";
    } // O método mágico __invoke() no PHP permite que um objeto seja chamado como uma função.
}

$pessoa = new Pessoa;
$pessoa -> nome = "Danilo";
$pessoa -> sexo = "M";
$pessoa -> idade = 23;

echo $pessoa->nome . "<br>";
echo $pessoa->sexo . "<br>";
echo $pessoa->idade . "<br>";

echo $pessoa . "<br>";

echo $pessoa();