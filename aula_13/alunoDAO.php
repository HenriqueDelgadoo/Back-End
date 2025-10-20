<?php

class alunoDAO{ // classe DAO (data access object) para manipulação das funções do CRUD (create,ready,update,delete)
    private $alunos = []; // array $alunos para armazenamento dos objetos a serem manipulados, antes de ser enviado ao banco de dados.Foi criado vazio inicialmente

    public function criarAlunos(Aluno $aluno){ // metódo para criar um objeto no array alunos -- crete
        $this-> alunos[$aluno->getId()] = $aluno;

    }
    public function lerAlunos(){ //método para ler os dados de um objeto já criado --Read
        return $this->alunos;
    }

    public function atualizarAlunos($id,$novoNome, $novoCurso){ // métodos para atualizar os dados de um objeto já criado --> Update
        if(isset($this->alunos[$id])){
            $this->alunos[$id] ->setNome($novoNome);
            $this->alunos[$id] ->setCurso($novoNome);
        }
    }
    public function excluirAlunos($id){ //método para excluir um objeto --> delete
        unset($this->alunos[$id]);
        
    }
}


?>

