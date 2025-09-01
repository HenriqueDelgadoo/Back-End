<?php

class Funcionario {
    private $nome;
    private $salario;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getSalario() {
        return $this->salario;
    }
}


$funcionario = new Funcionario();


$funcionario->setNome("João");
$funcionario->setSalario(2500);

echo "Nome: " . $funcionario->getNome() . "\n";        
echo "Salário: " . $funcionario->getSalario() . "\n";  


$funcionario->setNome("Maria");
$funcionario->setSalario(3200);

echo "Nome alterado: " . $funcionario->getNome() . "\n";        
echo "Salário alterado: " . $funcionario->getSalario() . "\n";  
?>