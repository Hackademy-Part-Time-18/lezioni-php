<?php

//? Esercizio: Verificare se la password inserita dall'utente è valida secondo i seguenti criteri:
    //? 1. deve essere lunga almeno 8 caratteri
    //? 2. deve contenere almeno un numero
    //? 3. deve contenere almeno una lettera in UPPERCASE
    //? 4. deve contenere almeno un carattere speciale

$firstRule = false; //! se true la regola è rispettata, altrimenti è false
$secondRule = false;
$thirdRule = false;
$fourthRule = false;

//! prendiamo la password dell'utente
$password = readline("Inserisci la password: ");
// echo "La password inserita è $password \n";

//! prima regola
if(strlen($password) >= 8){
    $firstRule = true;
}

//! seconda regola
for($i = 0; $i < strlen($password); $i++){
    if(is_numeric($password[$i])){
        $secondRule = true;
        break; //! serve a terminare il ciclo
    } 
}

//! terza regola
for($i = 0; $i < strlen($password); $i++){
    if(ctype_upper($password[$i])){
        $thirdRule = true;
        break;
    }
}


//! quarta regola
$specialChars = ['!', '#', '+', '@', '%', '?'];
for($i = 0; $i < strlen($password); $i++){
    if(in_array($password[$i], $specialChars)){
        $fourthRule = true;
        break;
    }
}

//! preg_match()
/* for($i = 0; $i < strlen($password); $i++){
    if(preg_match('/[^a-zA-Z0-9]/', $password)){
        $fourthRule = true;
        break;
    }
}
var_dump($fourthRule); */
if($firstRule == true && $secondRule == true && $thirdRule == true && $fourthRule == true){
    echo "La password inserita è valida";
} else {
    echo "La password inserita non è valida";
}