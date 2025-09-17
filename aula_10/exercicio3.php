<?
namespace Aula_10;

class transporte {
    public $nome;

    public function mover(){
        echo "O {$this->nome} está se movendo";
    }
}

class carro extends transporte{
    public $nome;

    public function mover(){
        echo "O {$this->nome} está se movendo";
    }
}

class barco extends transporte {
    public $nome;

    public function mover(){
        echo "O {$this->nome} está andando";
    }
}
class aviao extends transporte {
    public $nome;

    public function mover(){
        echo "O {$this->nome} está voando";
    }
}

$carro = new carro;
$carro ->nome =  "onix";

?>