<?php
//modificadores de acesso:
    // existem 3 tipos: public, private, potected
    // public NomeDoAtributo: métodos e atributos publicos
    
    //private NomeDoAtributo : métodos e atributos privados para acesso somente dentro da classe. Ultilizamos os getters e setters para acessa-los
    
    //protected NomeDoAtributo: métodos e atributos protegidos para acesso somente de sua classe e sub-classes (classe filha)

    //Pacotes (packages): sintaxe logo no inicio do código, que atribui onde o arquivo pertence, ou seja, o caminho pasta em que ele está contido. Exemplo: 
    //namespace aula 09;

    // caso tenha arquivos que formam o backend de uma página WEB e possuem a mesma raiz, o namespace será o mesmo.
    
    namespace Aula_09;

    //Interfaces: É um recurso que garante que obrigatorimanete a classe tenha que construir algum método previamente determinado.Funciona como uma promessa ou contrato.
    //exemplo: configuramos uma interface "pagamento" que faz com que qual classe que a implemente tenha que obrigatoriamente construir o método "pegar".

    interface Pagamento{ //Interfacec de contrato de pagamento
        public function pagar($valor);
    }

    class CartaoDeCredito implements Pagamento{
        public function pagar($valor){
            echo "Pagamento realizado com cartão de crédito, valor: $valor\n";
        }
    }
    class pix implements Pagamento{
        public function pagar($valor){
            echo "Pagamento realizado com PIX, valor: $valor\n";
        }
    }
    class dinheiroEspecie implements Pagamento{
        public function pagar($valor){
            $valor -= $valor * 0.1;
            echo "Pagamento realizado em dinheiro em especie, valor: $valor \n";
        }
        //OBS: nessa forma de pagamento, haverá um desconto de 10% do valor devido a facilidade de lavar dinheiro. Calcule e exibe este desconto
    }
    $cred = new CartaoDeCredito(); //criando objeto
    $cred->pagar(250);
    // Neste exemplo criamos um objeto chamado "$cred" para a classe "cartaodeCredito" e depois chamamos o método pagar para este objeto, passando R$250 como parâmetro
    $pix = new pix(); //criando objeto
    $pix->pagar(65);

    $notas = new dinheiroEspecie(); //criando objeto
    $notas->pagar(320);
    echo "--------------------------------------------------------------------------------------------\n
Exercicio 1: \n";

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



