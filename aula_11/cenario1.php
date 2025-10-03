<?php
class turista {
    private $nome;
    private $local;
    private $comida;
    private $ambiente;


    public function getNome(){
        $this->nome;
    }
    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }
    public function getLocal(){
        $this->local;
    }
    public function setLocal($local){
        $this->local;
    }
    public function getComida(){
        $this->comida;
    }
    public function setComida($comida){
        $this->comida;
    }
        public function getAmbiente(){
        $this->ambiente;
    }
    public function setAmbiente($ambiente){
        $this->ambiente;
    }



    public function __construct($nome,$local,$comida){
        $this -> setNome($nome);
        $this -> setLocal($local);
        $this -> setComida($comida);
    }

    public function visitar(){
        return (`O $this->nome, está viajando para o $this->local\n`);
    }
    public function Comer(){
        return(`O $this->nome, está comendo $this->comida\n`);
    }
    public function nadar(){
        return (`O $this->nome, está nadando em $this->ambiente\n`);
    }
}

class localidade {
    private $atividade;
    private $pais;

    public function  getAtividade (){
        $this->atividade;
    }
    public function setAtividade($atividade){
        $this->atividade = ucwords(strtolower($atividade));
    }
    public function getPais(){
        $this->pais;
    }
    public function setPais($pais){
        $this->pais;
    }

    public function __construct($atividade, $pais){
        $this->setAtividade($atividade);
        $this->setPais($pais);
    }
    public function informarAtividades(){
        return(`O $this->pais, possue as $this->atividade`);
    }
}
?>