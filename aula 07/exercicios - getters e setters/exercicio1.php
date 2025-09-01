<?php
class carro{
    private $marca;
    private $modelo;

     public function setMarca($marca){ //setMarca = buscar o variavel marca da classe
        $this->marca= (strtoupper // Modifica a classe para minusculo com "srttolower" e "ucwords" para a primeira letra em minusculos
        ($marca));
    }
    //getter para buscar a variável "marca"
    public function getMarca(){
        return $this->marca;
    }
    public function setModelo($modelo){
        $this->modelo= ucwords(strtolower // Modifica a classe para minusculo com "srttolower" e "ucwords" para a primeira letra em minusculos
        ($modelo));
    }
    public function getModelo(){
        return $this->modelo;
    }

    public function __construct($marca, $modelo){
        $this -> setMarca ($marca); 
        $this -> setModelo ($modelo); 
    }

}
$carro = new carro ("bmw", "GS1200");
echo $carro->getMarca(). " " .$carro->getModelo();

?>