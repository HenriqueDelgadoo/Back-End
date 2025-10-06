Cenário 6 – Leia o enunciado do problema
"Um sistema de cinema deve permitir que clientes comprem ingressos para
sessões de filmes."

substantivos: cinema, clientes, ingressos, filmes 
verbos:permitir, comprar

class: clientes, ingressos, sessões
métodos: comprar, emitir

Métodos para a classe clientes:
realizarcompra, visualizarIngressos

Métodos para a classe ingressos:
atribuirCliente, possuirSessao

Métodos para a classe sessões:
atribuirFilme

<?php
// Classe Sessao
class Sessao {
    private $filme;

    public function __construct($filme) {
        $this->filme = ucwords(strtolower($filme));
    }

    public function atribuirFilme() {
        return "Sessão atribuída ao filme '{$this->filme}'.\n";
    }

    public function getFilme() {
        return $this->filme;
    }
}

// Classe Ingresso
class Ingresso {
    private $cliente;
    private $sessao;

    public function atribuirCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function possuirSessao($sessao) {
        $this->sessao = $sessao;
    }

    public function emitir() {
        return "Ingresso emitido para {$this->cliente->getNome()} assistir '{$this->sessao->getFilme()}'.\n";
    }
}

// Classe Cliente
class Cliente {
    private $nome;
    private $idade;
    private $ingressos = [];

    public function __construct($nome, $idade) {
        $this->nome = ucwords(strtolower($nome));
        $this->idade = (int)$idade;
    }

    public function realizarCompra($sessao) {
        $ingresso = new Ingresso();
        $ingresso->atribuirCliente($this);
        $ingresso->possuirSessao($sessao);
        $this->ingressos[] = $ingresso;
        return $ingresso->emitir();
    }

    public function visualizarIngressos() {
        $mensagem = "Ingressos de {$this->nome}:\n";
        foreach ($this->ingressos as $ingresso) {
            $mensagem .= $ingresso->emitir();
        }
        return $mensagem;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }
}

// Classe Cinema
class Cinema {
    protected $cliente;
    protected $sessao;

    public function __construct($nomeCliente, $idadeCliente, $nomeFilme, $classificacaoIdade) {
        $this->cliente = new Cliente($nomeCliente, $idadeCliente);
        $this->sessao = new Sessao($nomeFilme);

        if ($idadeCliente < $classificacaoIdade) {
            echo "Desculpe, {$this->cliente->getNome()} não tem idade suficiente para assistir '{$this->sessao->getFilme()}'.\n";
        } else {
            echo $this->comprarIngresso();
        }
    }

    public function comprarIngresso() {
        return $this->cliente->realizarCompra($this->sessao);
    }
}

// Exemplo de uso
$cinema = new Cinema("Lucas", 16, "Deadpool", 18);
$cinema2 = new Cinema("Ana", 20, "Barbie", 10);
?>
