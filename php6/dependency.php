<?php

//! Dependency Injection -> iniezione di dipendenze
abstract class ParteSuperiore{
    abstract public function faiQualcosaConLeMani();
}

abstract class ParteInferiore{
    abstract public function faiQualcosaConLeGambe();
}

class Afferra extends ParteSuperiore{
    public function faiQualcosaConLeMani()
    {
        echo "Afferra un oggetto \n";
    }
}

class Pugno extends ParteSuperiore{
    public function faiQualcosaConLeMani()
    {
        echo "Tira un pugno \n";
    }
}

class Solleva extends ParteSuperiore{
    public function faiQualcosaConLeMani()
    {
        echo "Solleva qualcosa \n";
    }
}

class Calcio extends ParteInferiore{
    public function faiQualcosaConLeGambe()
    {
        echo "tira un calcio \n";
    }
}

class Salto extends ParteInferiore{
    public function faiQualcosaConLeGambe()
    {
        echo "Salta \n";
    }
}

class Cammina extends ParteInferiore{
    public function faiQualcosaConLeGambe()
    {
        echo "Cammina \n";
    }
}

