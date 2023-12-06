<?php 
//! algoritmo -> sequenza di comandi eseguita in un determinato ordine per risolvere un problema
//! teorema di Bohm-Jacopini
//! Qualunque algoritmo può essere implementato utilizzando tre sole strutture: la sequenza, la selezione e il ciclo, da applicare ricorsivamente alla composizione di istruzioni elementari

//* SEQUENZA -> il codice viene eseguito riga dopo riga 
/* $num1 = 5;
$num2 = 7;
echo $num1 + $num2; */

//* SELEZIONE -> il codice viene eseguito in base alla valutazione di una condizione
$age = 17;
//? in base a quest'età l'utente può guidare?
/* if($age >= 18){
    echo "Puoi guidare";
} else {
    echo "Non puoi guidare";
} */

//! comandi di selezione: if, if...else, if...else if, switch
//* If esegue le istruzioni presenti nel corpo se e solo se la condizione ritorna true
/* if($age >= 18){
    echo "Puoi guidare";
}
echo "ciao"; */

//* IF...ELSE esegue un set di istruzioni se la condizione è vera, un altro se la condizione è falsa
/* if($age >= 18){
    echo "Puoi guidare";
} else {
    echo "Non puoi guidare \n";
}
echo "ciao"; */

//* IF... ELSE IF effettua i controlli su più condizioni e se tutte sono false, esegue quello che c'è nell'else
/* $age = 20;
if($age > 18){
    echo "Puoi guidare";
} else if($age == 18){
    echo "Puoi guidare da poco";
} else {
    echo "Non puoi guidare";
} */

//* SWITCH prende in input un dato e controlla se questo dato soddisfa dei casi 
/* $age = 17;
switch($age){
    case $age > 18:
        echo "Puoi guidare";
    case $age == 18:
        echo "Puoi guidare da poco";
    default:
        echo "Non puoi guidare";
} */

//! con comparazioni esplicite
/* $fav_colour = "blue";
switch($fav_colour){
    case $fav_colour == "yellow":
        echo "Il mio colore preferito è il giallo \n";
        break;
    case $fav_colour == "blue":
        echo "Il mio colore preferito è il blu \n";
        break;
    case $fav_colour == "red":
        echo "Il mio colore preferito è il rosso \n";
        break;
    default:
        echo "Nessuno dei colori dei case è il mio preferito \n";
}

$fav_colour = "blue";
switch($fav_colour){
    case "yellow":
        echo "Il mio colore preferito è il giallo \n";
        break;
    case "blue":
        echo "Il mio colore preferito è il blu \n";
        break;
    case "red":
        echo "Il mio colore preferito è il rosso \n";
        break;
    default:
        echo "Nessuno dei colori dei case è il mio preferito \n";
} */

//! ITERAZIONE o CICLO consentono di ripetere una porzione di codice più volte
//! for, foreach, while, do... while
//* for quando sappiamo il numero preciso di iterazioni che vogliamo fare 
//! $i = 0 valore iniziale del contatore
//! $i <= 10 condizione
//! $i++ incremento (o decremento) del contatore

/* for($i = 0; $i <= 10; $i++){
    echo "ciclo in esecuzione \n";
} */

/* for($i = 10; $i >= 0; $i--){
    echo $i . "\n";
} */

/* $numbers = [1,2,3,4,5,6];
for($i = 0; $i < count($numbers); $i++){
    echo $numbers[$i] . "\n";
} */

/* $names = ['Luca', 'Giovanni', 'Matteo', 'Francesco'];
for($i = 0; $i < count($names); $i++){
    echo $names[$i] . "\n";
} */

/* $students = [
    [
        'name' => 'Luca',
        'age' => 23,
    ],
    [
        'name' => 'Giovanni',
        'age' => 35,
    ],
    [
        'name' => 'Matteo',
        'age' => 18,
    ],
    [
        'name' => 'Francesco',
        'age' => 29,
    ],
];
for($i = 0; $i < count($students); $i++){
    echo "Lo studente " . $students[$i]['name'] . " ha " . $students[$i]['age'] . " anni \n";   
} */

//* WHILE termina l'esecuzione quando la condizione diventa falsa
//! $i = 0; valore iniziale del contatore
//! $i < 10 condizione
//! $i++; incrementatore del contatore
/* $i = 0;
while($i < 10){
    echo $i;
    $i++;
} */

//* DO... WHILE esegue almeno una volta il codice prima di controllare la condizione
/* $i = 11; 
do{
    echo $i;
    $i--;
} while($i > 10); */

//* sto inizializzando una variabile con valore 0
/* $i = 0;
//* sto dichiarando il ciclo do... while
do{
    echo $i; //* stampa 0
    $i++; //* incremento il valore di $i (contatore)
}while($i < 10); //* valuto se il ciclo può continuare o meno  */

//* FOREACH serve a manipolare gli array e ci permette di ciclarli
/* $people = ['Andrea', 'Davide', 'Samuele', 'Christian'];
foreach($people as $person){
    echo $person . "\n";
} */

//* FOREACH KEY => VALUE
$people = ['Andrea', 'Davide', 'Samuele', 'Christian'];
foreach($people as $key => $person){
   // echo "La persona $person ha come chiave $key \n";
}

/* $teachers = [
    'frontend' => [
        'Antonio', 'Jeremy', 'Valerio',
    ],
    'backend' => [
        'Katia', 'Davide', 'Francesco',
    ],
]; */
//? i docenti che spiegano frontend sono: nome1, nome2, nome3
//? i docenti che spiegano backend sono: nome1, nome2, nome3
/* foreach($teachers as $subject => $people){
    echo "I docenti che spiegano $subject sono: \n";
    foreach($people as $teacher){
        echo $teacher . "\n";
    }
} */

//? dato un array di studenti voglio leggere i nomi degli studenti che hanno un voto >= 60
$students = [
    [
        'name' => 'Simone', 
        'grade' => 50,
    ],
    [
        'name' => 'Marko', 
        'grade' => 80,
    ],
    [
        'name' => 'Sebastian', 
        'grade' => 90,
    ],
    [
        'name' => 'Alexandru', 
        'grade' => 60,
    ],
    [
        'name' => 'Mario', 
        'grade' => 40,
    ],
];

//? voglio vedere per ogni studente il nome se e solo se è stato promosso
/* foreach($students as $studente){
    if($studente['grade'] >= 60){
        echo $studente['name'] . " è stato promosso \n";
    }
} */

//? dato un array di docenti voglio leggere i nomi e l'età dei docenti che insegnano frontend
$teachers = [
    [
        'name' => 'Antonio',
        'age' => 32,
        'subject' => 'frontend',
    ],
    [
        'name' => 'Matteo',
        'age' => 40,
        'subject' => 'frontend',
    ],
    [
        'name' => 'Giuseppe',
        'age' => 39,
        'subject' => 'backend',
    ],
    [
        'name' => 'Davide',
        'age' => 33,
        'subject' => 'backend',
    ],
    [
        'name' => 'Valerio',
        'age' => 32,
        'subject' => 'frontend',
    ],
];
//? voglio vedere i nomi e l'età dei docenti che insegnano frontend
foreach($teachers as $teacher){
    if($teacher['subject'] === 'frontend'){
        echo $teacher['name'] . " " . $teacher['age'] . "\n";
    } else {
        echo "L'insegnate {$teacher['name']} non insegna frontend \n";
    }
}

foreach($teachers as $teacher){
    if($teacher['subject'] === 'frontend'){
        echo $teacher['name'] . " " . $teacher['age'] . "\n";
    } else if($teacher['subject'] !== 'frontend'){
        echo "L'insegnate {$teacher['name']} non insegna frontend \n";
    }
}
