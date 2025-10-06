Cenário 5 – Analise o problema com linguagem natural
"Um sistema de biblioteca deve permitir que usuários (alunos e professores)
façam empréstimos de livros e revistas."

substantivos: biblioteca, usuários, livros, revistas, sistema
verbos: deve, permitir, empréstimos

class: usuários, livros, revistas
métodos: emprestimo

Métodos para a classe usuários:
solicitarEmprestimos

Métodos para a classe livros: 
EmprestarPara

Métodos para a classe revistas:
EmprestarPara

<?php
class usuarios{
    protected $nome;
    protected $tipo;
    protected $item;
    

    public function __construct ($nome, $tipo, $item){
        $this->nome = ucwords(strtolower($nome));
        $this->tipo = strtolower($tipo);
        $this->item = ucwords(strtolower($item));
    }
    public function solicitarEmprestimo(){
        if($this->tipo == "aluno" || $this->tipo == "professor"){
            return ("Emprestimo do $this->item, para o $this->nome realizado com sucesso!\n");
        }else{
        return ("Você não pertence a instuição. Caso pertença entre em contato com o suporte. \n");
        } 
    }

}

interface emprestimo{
    public function EmprestarPara($nome);
}

class livros implements emprestimo{
    private $nome;
    private $tipo_livro;

    public function __construct ($nome, $tipo_livro){
        $this->nome = ucwords(strtolower($nome));
        $this->tipo_livro = $tipo_livro;
    }

    public function EmprestarPara($nome){
        return ("O $this->nome foi emprestado com sucesso! \n ");
    }
}
class revista implements emprestimo{
    private $nome;
    private $tipo_revista;

    public function __construct ($nome, $tipo_revista){
        $this->nome = ucwords(strtolower($nome));
        $this->tipo_revista = $tipo_revista;
    }

    public function EmprestarPara($nome){
        return ("A $this->nome foi emprestado com sucesso! \n ");
    }
}

class emprestimos extends usuarios{
    private $id_emprestimo;
    
    public function __construct($nome, $tipo,$item, $id_emprestimo){
        parent :: __construct($nome, $tipo, $item);
        
        $this->id_emprestimo;
    }
    public function empretimoRealizado(){
        return ("O $this->nome realizou o emprestimo do $this->item, id de emprestimo: $this->id_emprestimo. \n");
    }
}


?>

