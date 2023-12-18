<?php

abstract class Mani{
    abstract public function attaccaNemico();
}

class RaggiPropulsori extends Mani{
    public function attaccaNemico()
    {
        echo "Ti attacco con i miei raggi propulsori\n";
    }
}

class AttaccoConMartello extends Mani{
    public function attaccaNemico()
    {
        echo "Ti attacco con il mio martello \n";
    }
}

abstract class Accessorio{
    abstract public function equipaggio();
}

class Armatura extends Accessorio{
    public function equipaggio()
    {
        echo "Indosso la mia armatura \n";
    }
}

class Martello extends Accessorio{
    public function equipaggio()
    {
        echo "Prendo il mio martello \n";
    }
}

class Avenger{
    public $mani;
    public $accessorio;

    public function __construct(Mani $mani, Accessorio $accessorio)
    {
        $this->mani = $mani;
        $this->accessorio = $accessorio;
    }

    public function attacca(){
        $this->mani->attaccaNemico();
    }

    public function accessori(){
        $this->accessorio->equipaggio();
    }
}

$ironman = new Avenger(new RaggiPropulsori, new Armatura);
$thor = new Avenger(new AttaccoConMartello, new Martello);
$ironman->accessori();
$thor->accessori();
$ironman->attacca();
$thor->attacca();
