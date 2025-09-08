<?php
class carro{ 
    public $marca; 
    public $modelo; 
    public $ano; 
    public $revisao; 
    public $N_donos;
    
      public function __construct($marca ,$modelo,$ano,$revisao,$N_donos){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->revisao = $revisao;
        $this->N_donos = $N_donos;
      }

}

$carro1 = new Carro("Porsche", "911", 2022, false,3);
$carro2 = new Carro ( "BYD", "Seal", 2023,true,  1);
$carro3 = new Carro ( "Fiat", "147", 1985,false,  8);
$carro4 = new Carro ( "Honda", "Civic", 2025,true,  1);
$carro5 = new Carro ( "Chevrolet", "Camaro", 2012,false,  4);
$carro6 = new Carro ( "Hyundai", "HB20", 2018,true,  2);


?>
