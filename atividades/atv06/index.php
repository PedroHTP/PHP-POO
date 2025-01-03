<?php

class Login {
    
    public function __construct()
    {
        
    }

    public static $user;

    public static function verificarLogin(): void {
        echo "O usuário ".self::$user." está logado";
    }
    public function outlogin() {
        echo "O usuário ".self::$user." está deslogado";
    }
}

Login::$user = "admin";
Login::verificarLogin();
echo "<br>";
$login = new Login();
$login -> outlogin();