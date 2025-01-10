<?php 
// SETS
require_once './vendor/autoload.php';

use App\Model\Produto;
use App\Model\ProdutoDao;



// deleta
// $produtoDao->delete(10);

// atualiza
//$produtoDao->update($produto);

// Leitura
$produtoDao = new ProdutoDao();
$produtoDao -> read();
?>
<!DOCTYPE html>
<html lang="py-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main>
        <div id="area-table">
            <table>
                <tr id="topo">
                    <th>ID</th>
                    <th>NOME</th></th>
                    <th>DESCRIÇÃO</th>
                </tr>
            <?php
            foreach ($produtoDao -> read() as $produto) {
            ?>
                <tr>
                    <td><?=$produto['id']?></td>
                    <td><?=$produto['nome']?></td>
                    <td><?=$produto['descricao']?></td>
                    <td><a href="./alterar.php?id=<?=$produto['id']?>">Alterar</a></td>
                    <td><a href="">Deletar</a></td>
                </tr>
            <?php
            }
            ?>
            </table>
        </div>
    </main>
    <form action="./adicionar.php" method="get">
        <button type="submit">Adicionar cliente</button>
    </form>
</body>
</html>
