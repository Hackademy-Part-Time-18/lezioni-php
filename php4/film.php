<?php

class Movie {
    public $title;
    public $directory;
    public $actors = [];
    public static $count = 0;
    
    public function __construct($titolo, $regista, $attori)
    {
        $this->title = $titolo;
        $this->directory = $regista;
        $this->actors = $attori;
        /* $this->introduceActor(); */
        //$this->allActors();
        self::$count++;
    }

    public function introduceActor(){
        foreach($this->actors as $actor){
            echo "Sono $actor ed ho recitato in $this->title \n";
        }
    }

    public function allActors(){
        echo "Gli attori che recitano nel film $this->title sono " . count($this->actors) . " e sono: ";
        foreach($this->actors as $actor){
            echo $actor . " ";
        }
        echo "\n";
    }

}

$movie1 = new Movie("Titanic", "Cameron", ["Leonardo Di Caprio", "Kate Wislet"]);
//$movie1->introduceActor();
/* var_dump($movie1); */
$movie2 = new Movie("Harry Potter", "J.K. Rowling", ["Harry", 'Hermione', 'Draco', 'Ron', 'Silente']);
/* $movie2->introduceActor(); */
$movie2->allActors();
/* echo Movie::$count; */