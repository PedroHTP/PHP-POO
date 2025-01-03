<?php

    class Login {
        private $email;
        private $senha;
        private $nome;

        public function __construct($nome, $senha, $email){
            $this->nome = $nome;
            $this->setEmail($email);
            $this->setSenha($senha);
        } 

        public function getNome() {
            return $this -> nome;
        }

        public function getEmail() {
            return $this -> email;
        }

        public function setEmail($input_email) {
            $email = filter_var($input_email, FILTER_SANITIZE_EMAIL);
            $this->email = $email;
        }

        public function getSenha() {
            return $this -> senha;
        }

        public function setSenha($input_senha) {
            $this->senha = $input_senha;
        }

        public function logar() {
            if (($this->nome == "Pedro Henrique Teixeira Pião") and ($this->email == "contado@gmail.com") and ($this->senha === 123456)) {
                echo "Logado com sucesso";
            } else {
                echo "Dados inválidos";
            }
        }
    }

$logar = new Login('Pedro Henrique Teixeira Pião', 123456, 'contado@gmail.com');
$logar ->Logar();
echo "<hr>";
echo $logar->getNome();
echo "<br>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();