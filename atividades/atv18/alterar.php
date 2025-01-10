<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php 
    require_once './vendor/autoload.php';

    use App\Model\Produto;
    use App\Model\ProdutoDao;

    $produtoDao = new ProdutoDao();

    $produto = new Produto();
    $id = $_GET['id'];
    $produto->setId($id);

    $read = $produtoDao -> readSolo($id)[0];

    ?>
    <h1>Cadastre o novo produto</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?=$read['nome']?>">
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao"  value="<?=$read['descricao']?>">
        <button type="submit">atualizar</button>
    </form>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $produto->setNome($_POST['nome']);
            $produto->setDescricao($_POST['descricao']);
            
            $produtoDao->update($produto);

            header('Location: index.php');
            exit;
        }
    ?>
</body>
</html>