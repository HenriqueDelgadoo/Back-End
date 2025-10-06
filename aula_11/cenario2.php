Cenário 2 – Heróis e Personagens
O Batman, o Superman e o Homem-Aranha estão em uma missão. Eles precisam
fazer treinamentos especiais no Cotil e, depois, irão ao shopping para doar
brinquedos às crianças.

Substantivos: Batman, superman, homem-aranha, crianças, brinquedos,shopping, cotil, missão
verbos: estar, precisar, ir, doar, fazer

classes: Heróis, pessoas, ambientes
Métodos: estar, ir, doar, fazer 

Métodos para a classe Heróis:
estãoJuntos, fazerTreinamento, irDoar

Métodos para a classe pessoas:
receberPresente

Métodos para a classe ambientes:
fazerTreinamento


<?php
class herois{
    protected $nome;
    private $empresa;
    protected $local;
    protected $brinquedo;

    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }

    public function __construct ($nome, $empresa, $local, $brinquedo){
        $this->setNome($nome);
        $this->empresa = $empresa;
        $this->local = $local;
        $this->brinquedo = $brinquedo;
    }

    public function estaoJuntos(){
        return ("Os herois $this->nome, está junto com o Batman, o Superman e o Homem-Aranha em uma missão.\n ");
    }
    public function fazerTreinamento(){
        return ("O $this->nome, está treinando no $this->local. \n");
    }
    public function irDoar(){
        return ("O $this->nome esta doando $this->brinquedo no shopping.\n ");
    }

}
    class pessoa extends herois{
        private $nome_pessoa;

        public function __construct($nome,$nome_pessoa, $brinquedo, $empresa, $local){
            parent :: __construct ($nome,$empresa, $local, $brinquedo);

            $this->nome_pessoa = ucwords(strtolower($nome_pessoa));
        }
        public function receberPresente(){
            return ("$this->nome_pessoa recebeu um presente do $this->nome, era um $this->brinquedo.\n");
        }
    }

    class ambientes extends herois{
        private $nome_local;
        public function __construct($nome_local, $nome, $empresa, $local, $brinquedo){
            parent :: __construct ($nome,$empresa,$local, $brinquedo);

            $this->nome_local = $nome_local;
        }
        public function fazerTreinamento(){
            return ("O $this->nome está treinando no $this->local");
        }
    }
?>

--Herois tem uma relação de associação entre ambiente, eles existem mas não dependem um do outro--
--pessoa tem um relação de agregação com Heróis, onde não dependem um do outro mas herois agregam as pessoas --
