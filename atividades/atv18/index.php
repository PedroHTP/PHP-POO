<?php 
// SETS
require_once './vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setNome('Notebook Dell');
$produto->setDescricao('i5, 4gb');

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao -> create($produto);

?>
