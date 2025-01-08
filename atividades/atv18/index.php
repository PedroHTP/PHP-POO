<?php 
// SETS
require_once './vendor/autoload.php';

use App\Model\Produto;
use App\Model\ProdutoDao;

$produto = new Produto();
$produto->setId(10);
$produto->setNome('Cadeira Gamer');
$produto->setDescricao('Assento retrátil');

$produtoDao = new ProdutoDao();

// deleta
// $produtoDao->delete(10);

// atualiza
//$produtoDao->update($produto);

// Leitura
$produtoDao -> read();

foreach ($produtoDao -> read() as $produto) {
    echo $produto['nome'].
    "<br>".
    $produto['descricao']. "<hr>";
}
?>
<!DOCTYPE html>
<html lang="py-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <nav>
        <a href="./adicionar.php">Cadastro</a>
    </nav>
</body>
</html>
