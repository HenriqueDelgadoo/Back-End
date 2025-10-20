<?php
require_once "crud.php";
require_once "alunoDAO.php";

$dao = new alunoDAO(); // objeto da classe aluno DAO para testar métodos CRUD

// create
$aluno1 -> criarAlunos(new aluno(1,"henrique", "DEV"));
$aluno2 -> criarAlunos(new aluno(2,"hugo","Panificação"));
$aluno3 -> criarAlunos(new aluno(3, "tiago","Nutrição"));
$aluno4 -> criarAlunos(new aluno(4, "Beatriz", "eletrica"));

// Read
Echo "listagem inicial:\n";
foreach($dao->lerAlunos() as $aluno){
    echo("{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n");
}

//Update
$dao->atualizarAlunos(1,"jozias", "Borracharia");

echo "\n Após atualização:";
foreach($dao->lerAlunos() as $aluno){
    echo("{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n");
}

// Delete
$dao->excluirAlunos(1); //excluindo objeto $aluno2 --id=2
echo"\n Após exclusão";
foreach($dao->lerAlunos() as $aluno){
    echo("{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n");
}

?>