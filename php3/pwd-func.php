<?php
//! metodo funzionale
//! ritorna true se la regola è rispettata, false altrimenti
function checkFirstRule($password){
    if(strlen($password) >= 8){
        return true;
    }
    return false;
}

function checkSecondRule($password){
    for($i = 0; $i < strlen($password); $i++){
        if(is_numeric($password[$i])){
            return true;
        } 
    }
    return false;
}

function checkThirdRule($password){
    for($i = 0; $i < strlen($password); $i++){
        if(ctype_upper($password[$i])){
            return true;
        }
    }
    return false;
}

function checkFourthRule($password){
    $specialChars = ['!', '#', '+', '@', '%', '?'];
    for($i = 0; $i < strlen($password); $i++){
        if(in_array($password[$i], $specialChars)){
            return true;
        }
    }
    return false;
}

function checkPassword(){
    $password = readline("Inserisci la password: ");
    $firstRule = checkFirstRule($password);
    $secondRule = checkSecondRule($password);
    $thirdRule = checkThirdRule($password);
    $fourthRule = checkFourthRule($password);

    if($firstRule && $secondRule && $thirdRule && $fourthRule){
        echo "La password inserita è valida";
    } else {
        echo "La password inserita non è valida";
    }
}

checkPassword();

/* function checkPassword(){
    $password = readline("Inserisci la password: ");
    if(checkFirstRule($password) && checkSecondRule($password) && checkThirdRule($password) && checkFourthRule($password)){
        echo "La password inserita è valida";
    } else {
        echo "La password inserita non è valida";
    }
} 
checkPassword(); */