<?php

//! array omogeneo
$students = ['Alex', 'Andrea', 'Abdel', 'Giuseppe'];
$numbers = [1,2,3,4,5];

//! array eterogeneo
$cose = ['computer', 4, true, ['Luca', 5.4, false]];

// $array = Array("ciao", 12);

//! built-in function: var_dump() o print_r()
//var_dump($students);
//print_r($students);

$students = ['Alex', 'Andrea', 'Abdel', 'Giuseppe'];
//var_dump($students[1]);

//! array di array 
/* $students = [
    [
        "Mario", 35, "backend", ["Php", "Laravel"],
    ],
    [
        "Luca", 28, "frontend", ["Css", "JavaScript"],
    ],
];

var_dump($students[1][3][0]); */

//! array associativi o chiave => valore 
/* $students = [
    "Mario" => [
        35, "backend", ["Php", "Laravel"],
    ],
    [
        "Luca", 28, "frontend", ["Css", "JavaScript"],
    ],
];
/* var_dump($students["Mario"][2]); */
/* echo $students["Mario"][2][0] . " " . $students[0][0]; */

//! Operatori
//! operatori matematici 
$x = 20;
$y = 10;
//var_dump($x + $y); // addizione
//var_dump($x - $y); //sottrazione
//var_dump($x * $y); // moltiplicazione
//var_dump($x / $y); // divisione
// echo $x % $y; // modulo
// var_dump($x ** $y);

//! operatori di confronto 
$num = 2;
$num2 = " ";
//var_dump((bool)$num2);
// var_dump($num == $num2); // operatore di uguaglianza
// var_dump($num === $num2); // operatore di identicità
$num > $num2; // maggiore
$num < $num2; // minore
$num >= $num2; // maggiore uguale
$num <= $num2; // minore uguale
$num != $num2; // diverso
$num !== $num2; // strettamente diverso 

//! operatori logici 
//! && -> se entrambi i valori sono true
/* var_dump($num && $num2);

$stringa = ""; // false
$stringa2 = " "; // true
var_dump((bool)$stringa);
var_dump($stringa2); */

//! || -> se almeno uno dei due valori è true
$num1 = 0; 
$string = "ciao";
//var_dump($num1 || $string);

//! ! -> restituisce l'inverso del booleano
$num1 = 0;
var_dump(!$num1);