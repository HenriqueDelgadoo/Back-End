<?
namespace Aula_10;
class Animal{
    public $nome;
    
    public function fazerSom(){
        echo "O som do {$this->nome} ";
    }
}

class gato extends Animal{
    public $nome;
    public function fazerSom(){
        echo "O som do {$this->nome} é Miauuuu!";
    }
}
class cachorro extends Animal{
    public $nome;
    public function fazerSom(){
        echo "O som do {$this->nome} é au au!";
    }
}
class vaca extends Animal{
    public $nome;
    public function fazerSom(){
        echo "O som do {$this->nome} é Muuuu!";
    }

}

$gato = new gato;
$gato ->nome = "luna";
$gato->fazerSom();