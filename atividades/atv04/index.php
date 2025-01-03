<?php 

abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function __construct()
    {
        echo "<h1>Banco Itau:</h1>";
    }
    public function setSaldo ($valor) {
        $this ->saldo = $valor;
    }

    public function getSaldo () {
        return $this ->saldo;
    }

    abstract protected function Sacar($valor);
    abstract protected function Depositar($valor);
}

class Itau extends Banco {

    public function Sacar($valor) {
        echo "<br>- Saque: R$  $valor";
        $this ->saldo -= $valor;
    }
    public function Depositar($valor) {
        echo "<br>+ Deposito: R$ $valor";
        $this ->saldo += $valor;
    }
}

class Bradesco extends Banco {
    public function Sacar($valor) {
        $this ->saldo -= $valor;
    }
    public function Depositar($valor) {
        $this ->saldo += $valor;
    }
}

$itau = new Itau();
$itau ->setSaldo(500);
echo "Saldo: R$ " . $itau ->getSaldo();
$itau->Depositar(400);
$itau->Sacar(200);
echo "<br>";
echo "Saldo: R$ " . $itau ->getSaldo();
