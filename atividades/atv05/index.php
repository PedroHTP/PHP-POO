<?php 

    class Pessoa {
        const NOME = "Pedro";

        public function exibirNome() {
            echo self::NOME;
        }
    }


    class Pedro extends Pessoa {
        const NOME = "Henrique";

        public function exibirNome() {
            echo parent::NOME; // self:: - rotorna a costante da própria classe | parent:: - rotorna a costante da classe pai
        }
    }

$pedro = new Pedro();
$pedro -> exibirNome();