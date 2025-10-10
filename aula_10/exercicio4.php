<?php

namespace Aula_10;

interface Mensagem {
    public function Enviar();

}

class Email implements Mensagem {
    public $nome;

    public function Enviar() {
        echo "A mensagem foi enviada por {$this->nome}\n";
    }
}

class SMS implements Mensagem {
    public $numero;

    public  function Enviar(){
        echo "A mensagem foi enviada para o numero {$this->numero}\n";
    }
}
    function notificar (mensagem $meio){
        $meio->Enviar();
    }

$email = new Email();
$email->nome = "Henrique";

$SMS = new SMS();
$SMS->numero = "(19) 97420-1385";

notificar($email);
notificar($SMS);
?>