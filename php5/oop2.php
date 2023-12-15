<?php

//! EREDITARIETA' -> una classe può ereditare da un'altra classe tutti gli attributi e tutti i metodi
//! ereditarietà multipla : una classe deriva da più classi (Python, C++)
//! ereditarietà singola : una classe deriva da un'unica classe (PHP, Java)

class Person {
    public $name;
    public $surname;
    public $age;

    public function __construct($nome, $cognome, $eta)
    {
        $this->name = $nome;
        $this->surname = $cognome;
        $this->age = $eta;
    }
    
    public function presentati(){
        echo "Ciao, sono $this->name $this->surname ed ho $this->age";
    }
    
}

class Teacher extends Person{
    public $salary;

    public function __construct($nome, $cognome, $eta, $stipendio)
    {
        parent::__construct($nome, $cognome, $eta);
        $this->salary = $stipendio;
    }

    public function presentati(){
        echo parent::presentati() . " e sono un docente \n";
        //echo "Ciao, sono $this->name $this->surname ed ho $this->age e sono un docente \n";
    }
}



/* class Student extends Person{
    public $average;

    public function __construct($nome, $cognome, $eta, $media)
    {
        parent::__construct($nome, $cognome, $eta);
        $this->average = $media;
    }

    public function presentati(){
        echo "Ciao, sono $this->name $this->surname ed ho $this->age e sono uno studente \n";
    }
} */

class Supplente extends Teacher{
    
}


$teacher = new Teacher("Mario", "Rossi", 50, 1500);
/* var_dump($teacher); */
$student = new Student("Luca", "Bianchi", 13, 8);
/* var_dump($teacher, $student); */
$teacher->presentati();
$student->presentati();
$person = new Person("Maria", "Verdi", 35);
$person->presentati();