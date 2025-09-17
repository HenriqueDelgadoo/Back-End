<?php
interface Forma {
    public function CalcularArea($lado, $altura, $raio);
}


class Quadrado implements Forma {
    public function CalcularArea($lado, $altura,$raio) {
        $area = $lado * $altura;
        echo "A área do quadrado é $area u²\n";
    }
}
class circulo implements Forma{
    public function CalcularArea($lado, $altura, $raio){
        $area = pi() * $raio**2;
        echo "A área da circunferência é ".number_format($area,2) ." u²\n";
    }
}
class triangulo implements Forma{
    public function CalcularArea($lado, $altura, $raio){
        $area = ($lado * $altura) /2;
        echo "A área do triângulo é $area u²\n";
    }
}
class pentagono implements Forma{
    public function CalcularArea($lado, $altura, $raio){
        $area = $lado * 5 * $altura /2;
        echo "A área do pentagono é $area u²\n";
    }
}
class hexagono implements Forma {
    public function CalcularArea($lado, $altura, $raio){
        $area =  $lado * 6 *$altura /2;
        echo "A área do hexagono é $area u²\n";
    }
}
// Exemplo de uso:
$forma1 = new Quadrado();
$forma1->CalcularArea(5, 5, 0);
$forma2 = new circulo();
$forma2->CalcularArea(0,0,10);
$forma3 = new triangulo();
$forma3->CalcularArea(2,5,0);
$forma4 = new pentagono();
$forma4->CalcularArea(3,5,0);
$forma5 = new Hexagono();
$forma5->CalcularArea(5,10,0);



?>