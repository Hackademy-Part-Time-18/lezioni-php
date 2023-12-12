<?php
//* FUNZIONE -> prozione di codice che può essere eseguita più volte
//* built-in function -> funzioni native di PHP : var_dump(), echo, print_r()

//* user function -> funzione che creiamo noi 
//! Dichiarazione di una funzione:
//! keyword function
//! nome della funzione
//! eventuali parametri
//! le istruzioni
/* function nomeFunzione($parametri){
    "corpo della funzione";
}

//! invocazione della funzione
nomeFunzione('parametri'); */

/* function saluta(){
    echo 'ciao';
}
saluta(); */

//! parametri che dichiaro durante la dichiarazione di una funzione si chiamano parametri formali
/* function sum($num1, $num2){
    echo $num1 + $num2;
}
//sum(5, 4); //! parametri che passo durante la chiamata di una funzione si chiamano parametri reali
sum(6,12); */

//! scope: la porzione di codice in cui è visibile una variabile
//! scope globale quando una variabile può essere vista anche all'interno dei blocchi di codice successivi
/* let num = 5;
function stampa(){
    console.log(num);
}
stampa(); */

//! scope locale quando una variabile è visibile solo all'interno del blocco di codice in cui è dichiarata
/* function stampa(){
    $num = 5;
    echo $num;
}
//stampa();

//! le costanti hanno scope globale
const NUMERO = 8;
function stampa2(){
    echo NUMERO;
}
stampa2(); */

//! passaggio per valore quando passiamo una copia del contenuto della variabile
/* $val = 3;
function increment($num){
    $num++;
    echo $num;
}
increment($val); // 4
echo $val; // 3 */

//! passaggio per riferimento quando passiamo l'indirizzo di memoria della variabile
/* $val = 3;
function increment(&$num){
    $num++;
    echo $num;
}
increment($val);
echo $val; */

//! parametro di default
/* function sum($a, $b = 6){
    echo $a + $b;
}
sum(3); */

/* function media($num1, $num2, $num3){
    echo "La media è: " . ($num1 + $num2 + $num3) / 3;
}

media(5,3,6);

function mediaQuattroNumeri($num1, $num2, $num3, $num4){
    echo "La media è: " . ($num1 + $num2 + $num3 + $num4) / 4;
}

mediaQuattroNumeri(5,3,6,9); */

//! parametri variabili
/* function media(...$numbers){
    $sum = 0;
    foreach($numbers as $num){
        $sum += $num;
    }
    echo "La media è: " . $sum / count($numbers);
}
media(3,4,5,6,45); */

/* function sum($num1, $num2){
    return $num1 + $num2;
}
$somma = sum(22, 34);
echo $somma; */

//! array_reduce()
function media2(...$numbers){
    $reduced = array_reduce($numbers, function($acc, $number){
        return $acc + $number;
    });
    echo $reduced / count($numbers);
}

media2(3,5,7);