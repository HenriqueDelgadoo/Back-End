Cenário 3 – Fantasia e Destino
John Snow, Papai Smurf, Deadpool e Dexter estão em uma jornada. Durante o
caminho, começa a chover, e eles precisam amar uns aos outros para superar as
dificuldades. No fim da jornada, eles celebram ao comer juntos.

substantivos: john Snow, papai Smurf, Dexter, 
verbos: estar, começa, chover, precisam, amar superar, celebram, comer

class: Personagens, ambiente
Métodos: estar,chover,amar,celebrar, comer.




Métodos para a classe personagens: 
estãoJuntos,amar, comer,celebrar

Métodos para a classe ambientes:
começaChuver
<?php

class personagem{
    protected $nome;
    protected $local;
    protected $brinquedo;

    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }

    public function __construct ($nome, $local, $brinquedo){
        $this->setNome($nome);
        $this->local = $local;
        $this->brinquedo = $brinquedo;
    }

    public function estaoJuntos(){
        return ("Os personagem $this->nome, está junto com  o John Snow, Papai Smurf, Deadpool e Dexter em uma jornada.\n ");
    }
    public function enfretarDesafio(){
        $amar = readline("Eles se amam?(S/N)");
        if ($amar == "S"){
            return ("Eles conseguiram enfrentar os desafios porque se amam. \n");
        }else if($amar == "N"){
            return ("Eles não conseguirão superar os desafios porque não se amam. \n ");
        }else{
            return ("Insira uma resposta válida (S/N)\n");
        }
    }
    public function celebrar(){
        return ("Ao concluir a missão os heróis celebaram.\n");
    }
}

class ambiente {
    private $clima;

    public function setClima($clima){
        $this->clima = strtolower($clima);
    }
    public function __construct ($clima){
        $this->setClima($clima);
    }

    public function tipoClima($clima){
        if($clima == "chuvoso"){
            return ("Está começando a chover");
        }else{
            return("O Clima está ensolarado");
        }
    }
}


?>

--Personagens tem uma relação de associação com os ambientes, onde eles são associados mas não tem agregação de valor -- 