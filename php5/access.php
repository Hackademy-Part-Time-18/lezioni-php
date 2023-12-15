<?php
//! Access Modifiers : public, protected e private

class Person {
    //! public: gli attributi e i metodi sono visibili e accessibili in tutto il programma 
    public $name;

    //! protected: gli attributi e i metodi sono accessibili solo dalle classi figlie
    protected $surname;

    //! private: gli attributi e i metodi sono accessibili solo dentro la propria classe
    private $age;

    public function __construct($nome, $cognome, $eta)
    {
        $this->name = $nome;
        $this->surname = $cognome;
        $this->age = $eta;
    }

    public function presentati(){
        echo "Ciao a tutti!\n";
    }

    protected function getSurname(){
        echo $this->surname . "\n";
    }

    public function setSurname($newSurname){
        return $this->surname = $newSurname;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($newAge){
        return $this->age = $newAge;
    }
}

class Student extends Person{
    public function secondGetSurname(){
        return $this->getSurname();
    }
}

$student = new Student("Lucia", "Gialli", 15);
/* echo $student->name; // Sì */
/* echo $student->surname; //NO */
/* $student->secondGetSurname(); */
/* echo $student->age;  */// undefined property
echo $student->getAge();












$person = new Person("Mario", "Rossi", 34);
/* echo $person->name . "\n";
$person->name = "Luca";
echo $person->name . "\n"; 
$person->presentati(); */
/* echo $person->surname; */
/* $person->surname = "Bianchi"; */
/* $person->getSurname(); */
/* $person->setSurname("Bianchi"); */
/* $person->getSurname(); */
/* var_dump($person); */
/* echo $person->age; */
/* echo $person->getAge() . "\n";
$person->setAge(20);
echo $person->getAge(); */