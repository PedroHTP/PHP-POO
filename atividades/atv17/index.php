<?php 
    require_once 'vendor/autoload.php';

    use Cocur\Slugify\Slugify;

    $objslug = new Slugify();
    $objslug-> addRule('ção', 'HeyJude');
    echo $objslug->slugify('Teste com acentuação para geração de slug');