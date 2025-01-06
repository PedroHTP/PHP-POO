<?php

namespace App\Model;

class ProdutoDao {

    public function create(Produto $p) {
        
        $comando = "INSERT INTO produtos (nome, descricao) VALUES (?,?)";

        $stmt = Conexao::getConn()->prepare($comando);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());

    }

    public function read() {

    }

    public function update(Produto $p) {

    }
    
    public function delete(Produto $p) {

    }
}