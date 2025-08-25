<?php
class Cachorro{ 
    public $nome;
    public $idade;
    public $castrado;
    public $sexo;
    public $raca;
    public $latindo;

    //Exercicio 5
    public function latir (){
        if ($this->latindo == True) {
            echo "o $this->nome está latindo!\n";
        }else{
            echo "O $this->nome não esta latindo!\n";
    }
}
    //Exercicio 6
    public function territorio (){
        echo "O $this->nome, está marcando território!\n";
}
    
    public function __construct($nome, $idade, $castrado, $sexo, $raca,$latindo){
        $this ->nome = $nome;
        $this ->idade = $idade;
        $this ->castrado = $castrado;
        $this ->sexo = $sexo;
        $this ->raca = $raca;
        $this ->latindo = $latindo;

}
}

$cachorro1= new Cachorro("Zeus", 0.6 , false, "Macho", "Pintcher", true);
$cachorro2 = new Cachorro("lua", 3 , true, "femea", "pitbull",false);
$cachorro3 = new Cachorro("aurora", 6 , false, "femea", "rotweiller", true);
$cachorro4 = new Cachorro("thor", 2 , true, "Macho", "são bernardo",false);
$cachorro5 = new Cachorro("bob", 4 , false, "Macho", "labrador", true);
$cachorro6 = new Cachorro("toto", 15, false, "Macho", "chow-chow",false);
$cachorro7 = new Cachorro("scoob", 10 , false, "femea", "salcinha",false);
$cachorro8 = new Cachorro("bruno", 12 , false, "Macho", "golden",false);
$cachorro9 = new Cachorro("samuel", 18 , false, "Macho", "vira-lata", true);
$cachorro10 = new Cachorro("marques", 3, true, "femea", "pastor-alemão", true);

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
    public $idade;
    
//Exercicio 7
    public function Reservista(){
        if ($this->Sexo =="Masculino" && $this->idade >= 18){
            echo "Apresente seu certificado de reservista do tiro de guerra!\n";
        }else{
            echo "Tudo certo!\n";

        }
    }
    public function casamento (){
        if ($this->Estado_civil == "Casado" || $this->Estado_civil == "Casada"){
            $ano =(int) readline("Quantos anos de casamento?\n");
            echo "Parabéns $this->nome pelos $ano anos de casamento! ";

        }elseif ($this->Estado_civil == "Divorciada" || $this->Estado_civil == "Divorciado"){
            echo "Lamento!";

        }else{
            echo "OLOCOO!";
        }
    }


    public function __construct($nome,$CPF,$Sexo, $Email, $Estado_civil, $Cidade, $Estado, $Endereco, $CEP, $idade) {

        $this-> nome = $nome;
        $this-> CPF = $CPF;
        $this-> Sexo = $Sexo;
        $this-> Email = $Email;
        $this-> Estado_civil = $Estado_civil;
        $this-> Cidade = $Cidade;
        $this-> Estado = $Estado;
        $this-> Endereco = $Endereco;
        $this-> CEP = $CEP;
        $this-> idade = $idade;
    }
}

$usuario1 = new Usuario("Josenildo Afonso Souza","100.200.300-40", "Masculino", "josenewdo@gmail.com", "Casado", "Xique-Xique", "Bahia", "Rua da amizade, 99", "40123-83", 18); 
$usuario2 = new Usuario("Valentina Passos Scherrer","1070.070.060-70", "Feminino", "scherrer.valen@outlook.com", "Divorciada", "Iracemápolis", "São Paulo", "Avenida da saudade, 1942", "23456-24", 16); 
$usuario3 = new Usuario("Claudio Braz Nepumoceno","575.575.242-32", "Masculino", "Clauclau.nepumoceno@gmail.com", "Solteiro", "Piripiri", "Piauí", "Estrada 3, 33", "12345-99", 20); 

$cachorro1 -> latir();
$cachorro1 -> territorio();
$usuario1 -> Reservista();
$usuario2 -> casamento();
?>


