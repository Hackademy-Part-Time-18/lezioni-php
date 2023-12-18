<?php
//! trait -> tratti che possono avere in comune più classi
trait Life{
    public function eat($food){
        echo "Mangio $food\n";
    }
}

trait Movement{
    public function run(){
        echo "Corro \n";
    }
}

//! Astrazione -> rende generica una classe e non si potrà più istanziare
abstract class Person{
    use Life, Movement;

    public $name;
    public $surname;
    public $age;

    public function __construct($nome, $cognome, $eta)
    {
        $this->name = $nome;
        $this->surname = $cognome;
        $this->age = $eta;
    }

    abstract protected function presentati();
}

class Student extends Person{
    public $average;

    public function __construct($nome, $cognome, $eta, $media)
    {
        parent::__construct($nome, $cognome, $eta);
        $this->average = $media;
    }

    public function presentati(){
        echo "Ciao sono uno studente\n";
    }

    /* public function presentati()
    {
        echo "Ciao, sono $this->name $this->surname, ho $this->age anni e sono uno studente\n";
    } */
}

class Teacher extends Person{
    public $salary;

    public function __construct($nome, $cognome, $eta, $stipendio)
    {
        parent::__construct($nome, $cognome, $eta);
        $this->salary = $stipendio;
    }

    public function presentati()
    {
        echo "Ciao, sono $this->name $this->surname, ho $this->age anni e sono un docente\n";
    }
}

class Supplente extends Teacher{
    
}

class Animal{
    use Life, Movement;

    public $name;

    public function __construct($nome)
    {
        $this->name = $nome;
    }
}

$student = new Student("Mario", "Rossi", 13, 7);
$teacher = new Supplente("Luca", "verdi", 50, 1400);
$animal = new Animal("Rex");
/* echo $animal->name; */
/* var_dump($student, $teacher); */
/* $student->presentati();
$teacher->presentati(); */
/* $student->eat(); */
/* $animal->eat("croccantini"); */
$teacher->run();
$animal->run();