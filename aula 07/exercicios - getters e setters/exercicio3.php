<?php
class aluno{
    private $nome;
    private $nota;


        public function setNome($nome){
            $this->nome = ucwords(strtolower($nome));
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNota($nota){
            if (is_numeric($nota) && $nota >= 0 && $nota <= 10) {
                $this->nota = $nota;
            } else {
                $this->nota = 0;
            }
        }
        public function getNota(){
            return $this->nota;
        }

        public function __construct($nome, $nota){
            $this->setNome($nome);
            $this->setNota($nota);
        }
}

$aluno1 = new aluno("Henrique", "10");
echo $aluno1->getNome() . " ". $aluno1->getNota()



?>