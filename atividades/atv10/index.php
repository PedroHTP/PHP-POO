<?php 
// Referências e Clonagem de objetos

class Pessoa {
    public $idade;
    private $quant_c = 0;

    public function __clone()
    {
        $this->quant_c += 1;
    }

    public function getQuant_c() {
        return $this->quant_c;
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 24;

echo "<h1>Referência</h1>";

$pessoa2 = $pessoa; // pessoa2 faz referência a pessoa
echo "Classe: ".$pessoa -> idade. "<br>";
$pessoa2 -> idade = 35; // pessoa2 define a idade de pessoa

echo "Classe alterada: ".$pessoa -> idade. "<hr>";

echo "<h1>Clonagem</h1>";

$pessoa3 = clone $pessoa; // pesssoa3 é um clone de pessoa
$pessoa3 -> idade = 30; // pessoa3 define a idade de pessoa3
$pessoa4 = clone $pessoa3;

echo "Clone: ".$pessoa3 -> idade."<br>";
echo "Classe original: ".$pessoa -> idade;

echo "<br>Quantas vezes clonado: ". $pessoa4->getQuant_c();