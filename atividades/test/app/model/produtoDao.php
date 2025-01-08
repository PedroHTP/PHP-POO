<?php

namespace app\model;

class ProdutoDao
{
    public function create(Produto $p)
    {
        $sql = "INSERT INTO produtos (nome, descricao) VALUES (:nome, :descricao)";
        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(':nome', $p->getNome());
        $stmt->bindValue(':descricao', $p->getDescricao());

        $stmt->execute();
    }

    // Exemplos de outros métodos, se quiser testar
    public function read()
    {
        $sql = "SELECT * FROM produtos";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function update(Produto $p)
    {
        $sql = "UPDATE produtos SET nome = :nome, descricao = :descricao WHERE id = :id";
        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(':nome', $p->getNome());
        $stmt->bindValue(':descricao', $p->getDescricao());
        $stmt->bindValue(':id', $p->getId());

        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM produtos WHERE id = :id";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
}
