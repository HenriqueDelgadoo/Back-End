<?php

// polimorfismo:
// o termo polimorfismo significa "varias formas"
// associando isso a programação orientada a objeto, o conceito se trata de várias classes e suas instancias 
// (objetos) respondendo a um mesmo método de forma diferentes.
// no exemplo do interfaces da aula_09, temos um método calcularArea() que responde de forma diferentes 
// a classe Quadrado, pentágono , e circulo.
// isso quer dizer que a função é a mesma - calcular a area de forma geométrca - mas 
// a operação muda de acordo com a .

// crie um método chamado Mover(), onde ele responde de várias formas diferente, para as sub-classes: Carro, Avião, Barco
// e Elevador. Dica: utilize interfaces.

namespace aula_10;
interface veiculo{
    public function mover();
}

class Carro implements veiculo{
    public $nome;
    public function mover(){
        echo "O carro {$this->nome} está andando";
    }


}
class aviao implements veiculo{
    public $nome;

    public function mover(){
        echo "O avião {$this->nome} está voando";
    }
}

$carro1 = new carro();
$carro1 ->nome  = "civic";

$carro2 = new carro();
$carro2 -> nome = "P1";

$aviao = new aviao();
$aviao -> nome = "F14";

$b2 = new aviao();
$b2 -> nome = "B2-spirit";

