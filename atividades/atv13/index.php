<?php 

// Agregação

class Produtos {
    public $name;
    public $valor;

    function __construct($name, $valor){
        $this -> name = $name;
        $this -> valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    public function adiciona(Produtos $produto) {
        $this -> produtos[] = $produto;
    }

    public function exibe() {
        foreach ($this -> produtos as $produto) {
            echo "- ".$produto->name.'<br>';
            echo "R$ ".$produto->valor."<hr>";
        }
    }
}

$produto1 = new Produtos('Tablet', 1400);
$produto2 = new Produtos('Console', 3000);
$produto3 = new Produtos('Celular', 900);

$carrinho = new Carrinho;
$carrinho -> adiciona($produto1);
$carrinho -> adiciona($produto2);
$carrinho -> adiciona($produto3);
$carrinho -> exibe();