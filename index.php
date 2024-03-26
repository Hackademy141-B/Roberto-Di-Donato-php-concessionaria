<?php

class Automobile{

    public $model;
    public $brend;
    public $price;
    public $color;

    public function __construct($modello, $marca, $prezzo, $colore){

    $this->model=$modello;
    $this->brend=$marca;
    $this->price=$prezzo;
    $this->color=$colore;

    }

    public function descrizione(){
        echo "Questa Auto e $this->model della $this->brend del colore $this->color e alla modica cifra di $this->price";
    }
}

$Ferrari = new Automobile("Turbo","Ferrari","10.000.000","Black");


$Ferrari->descrizione();