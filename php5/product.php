<?php

class Product{
    public $name;
    protected $price;
    private $code;

    public function __construct($nome, $prezzo, $codice)
    {
        $this->name = $nome;
        $this->price = $prezzo;
        $this->code = $codice;
    }

    /* public function getPrice(){
        return $this->price;
    }

    public function getCode(){
        return $this->code;
    } */

    protected function getCode(){
        return $this->code;
    }

    protected function setCode($newCode){
        $this->code = $newCode;
    }
}

class Smartphone extends Product{

    public $number;

    public function __construct($nome, $prezzo, $codice, $numero)
    {
        parent::__construct($nome, $prezzo, $codice);
        $this->number = $numero;
    }


    public function get2Price(){
        return $this->price;
    }

    public function get2Code(){
        return $this->getCode();
    }

    public function set2Price($newPrice){
        return $this->price = $newPrice;
    }

    public function set2Code($newCode){
        return $this->setCode($newCode);
    }
}

$book = new Product("Harry Potter", 18, '000123');
/* echo $book->getPrice(); */
/* echo $book->getCode(); */
$iphone = new Smartphone("Iphone 15", 1500, '123456', '1234567889');
/* echo $iphone->get2Price(); */
/* echo $iphone->get2Code(); */
/* $iphone->name = "Iphone 14"; */
/* $iphone->set2Price(1200); */
/* echo $iphone->set2Code('098765'); */
var_dump($iphone);