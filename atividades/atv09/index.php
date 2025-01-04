<?php
require_once './classes/produto.php';
require_once './models/produto.php';

use classes\Produto as productClasses;
use models\Produto as productModels;

$classe = new productClasses();
$model = new productModels();

// $produto = new \models\Produto(); <-- Também pode ser usado.
$classe -> mostrarDetalhes();
echo "<br>";
$model -> mostrarDetalhes();