<?php
class pessoa{
    private $nome;
    private $idade;
    private $email;


    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }
    public function getNome(){
        return $this->nome;
    }
    public function setidade($idade){
        $this->idade = preg_replace( '/\D/', '', $idade);
    }
    public function getidade(){
        return $this->idade;
    }
    public function setEmail($email){
        if(str_contains($email,"@") && str_contains($email, ".")){
            $this->email = $email;
        }else{
            $this->email ="Email invalido";
        }
    }
    public function getEmail(){
        return $this->email;
    }
    public function __construct($nome, $idade, $email){
        $this -> setNome($nome);
        $this -> setIdade($idade);
        $this -> setEmail($email);
    }
}
$pessoa1 = new pessoa("henrique", "19anos","henriquedelgado055@gmail.com");

echo $pessoa1 -> getNome() . " ".$pessoa1-> getIdade(). " " .$pessoa1-> getEmail()



?>