<?php

namespace app\model;

class Conexao
{
    private static $instance;

    public static function getConn()
    {
        if (!isset(self::$instance)) {
            try {
                // Ajuste host, dbname, usuário e senha conforme seu ambiente
                self::$instance = new \PDO(
                    'mysql:host=localhost;dbname=pdo;charset=utf8',
                    'root',
                    ''
                );
                self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                die("Erro de conexão: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
