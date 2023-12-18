<?php
require('dependency.php'); //! richiamo un altro file

class Person{
    public $parteSuperiore;
    public $parteInferiore;

    public function __construct(ParteSuperiore $parteSuperiore, ParteInferiore $parteInferiore) //! dependency injection
    {
        $this->parteSuperiore = $parteSuperiore;
        $this->parteInferiore = $parteInferiore;
    }
}

$person = new Person(new Afferra, new Cammina); //! object composition 
$person->parteSuperiore->faiQualcosaConLeMani();
$person->parteInferiore->faiQualcosaConLeGambe();