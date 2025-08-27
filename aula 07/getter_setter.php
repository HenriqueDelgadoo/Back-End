<?php
class Pessoa {
    private $nome;
    private $cpf;
    private $Celular;
    private $idade;
    private $email;
    private $senha;

    public function __construct ($nome, $cpf, $Celular, $idade, $email, $senha){
        $this -> setNome($nome);
        $this -> setCpf ($cpf);
        $this -> setTelefone($Celular);
        $this -> setIdade($idade);
        $this -> email = $email;
        $this -> senha = $senha;
    }
    //setter para $nome
    public function setNome($nome){ //setNome = buscar o nome da classe
        $this->nome= ucwords(strtolower // Modifica a classe para minusculo com "srttolower" e "ucwords" para a primeira letra em minusculos
        ($nome));
    }
    //getter para buscar a variável "nome"
    public function getNome(){
        return $this->nome;
    }
    public function setCPF($cpf){
        $this->cpf = preg_replace ('/\D/', '',$cpf);
        //"preg_replace" comando para alterar uma string
        // '/\D/', captura os caracter da string, e altera por ' '- vazio. Deixando só números (digitos)
        // com d minusculo ele altera ao contrário trocando os numeros e deixando apenas caracteres. 
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function  setTelefone ($Celular){
        $this->Celular = preg_replace( '/\D/', '', $Celular);
    }
    public function getTelefone (){
        return $this->Celular;
    }
    public function setIdade($idade){
        $this->idade = abs ((int)$idade);
    }
        public function getIdade (){
        return $this->idade;
    }
}

$aluno1 = new Pessoa ("HenRIqUE", "467.825.138-38", "(19) 97420-1385", -19 , "henriquedelgado055@gmail.com","henrique123");

echo $aluno1->getnome();

?>