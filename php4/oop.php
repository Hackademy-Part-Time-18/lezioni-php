<?php

//! OOP (Object Oriented Programming)
//! paradigma che si basa sui concetti classe e oggetto
//! serve per strutturare dati e metodi all'interno del nostro programma

//! una classe è un modello che racchiude proprietà e metodi 

/* $person1 = [
    'name' => 'Mario',
    'surname' => 'Rossi',
    'age' => 25
];

$person2 = [
    'name' => 'Luca',
    'surname' => 'Verdi',
    'age' => 33,
    'city' => 'Milano',
];

$person3 = [
    'name' => 'Maria',
    'surname' => 'Bianchi',
    'age' => 23,
    'city' => 'Roma', 
    'job' => 'doctor'
];

function printPerson($persona){
    foreach($persona as $key => $proprieta){
        echo "$key: $proprieta \n";
    }
}

printPerson($person1);
printPerson($person2);
printPerson($person3);  */

//! creare una classe
//! 1. keyword class
//! 2. nome della classe con lettera iniziale maiuscola, al singolare ed in inglese
//! 3. parentesi graffe 

class Person {
    //! attributi -> caratteristiche comuni
    public $name;
    public $surname;
    public $age;
    //! attributo statico
    public static $counter = 0;

    //! metodo costruttore -> genera un oggetto di questa classe
    public function __construct($_name, $_surname, $_age)
    {
        //! $this -> pseudo-variabile
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
        //$this->introduceYou();
        //! self -> richiama un attributo statico di questa classe
        //! :: -> scope resolution operator
        self::$counter++;
    }

    public static function howManyPeople(){
        echo "Hai creato " . self::$counter . " persone. \n";
    }

    //! metodi -> funzioni comuni
    public function introduceYou(){
        //! codice che fa presentare una persona
        echo "Ciao, sono $this->name $this->surname ed ho $this->age anni. \n";
    }
}

Person::howManyPeople(); 
/* echo Person::$counter . "\n"; */
//! creo un'istanza della classe Person (un oggetto)
$person1 = new Person("Mario", "Rossi", 25);
$person2 = new Person("Luca", "Verdi", 53);
$person3 = new Person("Maria", "Bianchi", 35);
$person4 = new Person("Katia", "Perrucci", 31);
/* echo Person::$counter; */
Person::howManyPeople();

/* echo $person1->name . "\n";
echo $person2->surname . "\n";
echo $person3->age . "\n"; */
/* var_dump($person1);
var_dump($person2);
var_dump($person3); */

/* $person1->introduceYou();
$person2->introduceYou();
 */