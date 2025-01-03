<?php
    class Ordem {
        private $codigo;

        public function __construct() {
            echo "Digite o código:";
        }
        private function comando () {
            if ($this->codigo == 1) {
                echo "Abrir";
            }
            if ($this->codigo == 2) {
                echo "Fechar";
            }
        }
        public function setCodigo($codigo) {
            $this->codigo = $codigo;
            $this->comando();
        }
    }

    $usuario = new Ordem();
    echo "<br>";
    $usuario -> setCodigo(2);