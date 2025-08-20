<?php
class Cachorro{ 
    public $nome;
    public $idade;
    public $castrado;
    public $sexo;
    public $raca;
    
    public function __construct($nome, $idade, $castrado, $sexo, $raca){
        $this ->nome = $nome;
        $this ->idade = $idade;
        $this ->castrado = $castrado;
        $this ->sexo = $sexo;
        $this ->raca = $raca;

}
}

$cachorro1= new Cachorro("Zeus", 0.6 , false, "Macho", "Pintcher");
$cachorro2 = new Cachorro("lua", 3 , true, "femea", "pitbull");
$cachorro3 = new Cachorro("aurora", 6 , false, "femea", "rotweiller");
$cachorro4 = new Cachorro("thor", 2 , true, "Macho", "são bernardo");
$cachorro5 = new Cachorro("bob", 4 , false, "Macho", "labrador");
$cachorro6 = new Cachorro("toto", 15, false, "Macho", "chow-chow");
$cachorro7 = new Cachorro("scoob", 10 , false, "femea", "salcinha");
$cachorro8 = new Cachorro("bruno", 12 , false, "Macho", "golden");
$cachorro9 = new Cachorro("samuel", 18 , false, "Macho", "vira-lata");
$cachorro10 = new Cachorro("marques", 3, true, "femea", "pastor-alemão");

class Usuario {
    public $nome;
    public $CPF;
    public $Sexo;
    public $Email;
    public $Estado_civil;
    public $Cidade;
    public $Estado;
    public $Endereco;
    public $CEP;

    public function __construct($nome,$CPF,$Sexo, $Email, $Estado_civil, $Cidade, $Estado, $Endereco, $CEP) {

        $this-> nome = $nome;
        $this-> CPF = $CPF;
        $this-> Sexo = $Sexo;
        $this-> Email = $Email;
        $this-> Estado_civil = $Estado_civil;
        $this-> Cidade = $Cidade;
        $this-> Estado = $Estado;
        $this-> Endereco = $Endereco;
        $this-> CEP = $CEP;
    }
}

$usuario1 = new Usuario("Josenildo Afonso Souza","100.200.300-40", "Masculino", "josenewdo@gmail.com", "Casado", "Xique-Xique", "Bahia", "Rua da amizade, 99", "40123-83"); 
$usuario1 = new Usuario("Valentina Passos Scherrer","1070.070.060-70", "Feminino", "scherrer.valen@outlook.com", "Divorciada", "Iracemápolis", "São Paulo", "Avenida da saudade, 1942", "23456-24"); 
$usuario1 = new Usuario("Claudio Braz Nepumoceno","575.575.242-32", "Masculino", "Clauclau.nepumoceno@gmail.com", "Solteiro", "Piripiri", "Piauí", "Estrada 3, 33", "12345-99"); 
?>