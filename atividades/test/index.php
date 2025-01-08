<?php
// Arquivo principal para testar


require_once __DIR__ . '/vendor/autoload.php';

use App\Model\Produto;
use App\Model\ProdutoDao;

// 3) Cria um objeto Produto e preenche
$produto = new Produto();
$produto->setNome('Notebook Dell');
$produto->setDescricao('i5, 4gb');

// 4) Cria o DAO e insere o produto no banco
$produtoDao = new ProdutoDao();
$produtoDao->create($produto);

echo "Produto inserido com sucesso!";

// Se quiser ver os resultados:
// $dados = $produtoDao->read();
// print_r($dados);
