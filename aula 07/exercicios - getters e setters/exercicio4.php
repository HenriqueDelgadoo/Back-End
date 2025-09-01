<?php
class produto{
    private $nome;
    private $estoque;
    private $preco;
    
    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }    
    public function getNome(){
        return $this->nome;
    }
    public function setEstoque($estoque){
        if($estoque >= 3 ){
            $this->estoque;
        }else{
            $this->estoque = "Estoque baixo";
        }
    }
    public function getEstoque(){
        return $this->estoque;
    }
    public function setPreco($preco){
        $this->preco = abs($preco);
    }
    public function getPreco(){
        return $this->preco;
    }
    public function __construct($nome, $preco,$estoque){
        $this->setNome($nome);
        $this->setEstoque($estoque);
        $this->setPreco($preco);
    }
}
$produto1 = new produto ("garrafa de agua", 19.90, 4);
echo " A {$produto1->getNome()} custa R$ {$produto1->getPreco()} e possui {$produto1->getEstoque()} unidades em estoque "

?>