<?php
//! metodo funzionale
//! ritorna true se la regola è rispettata, false altrimenti
function checkFirstRule($password){
    if(strlen($password) >= 8){
        return true;
    }
    echo "Lunghezza non raggiunta\n";
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

function validate($password){
    if(checkFirstRule($password) && checkSecondRule($password) && checkThirdRule($password) && checkFourthRule($password)){
        return true;
    }
    return false;
}

function checkPassword(){
    $maxTentativi = 3;
    for($i = 0; $i < $maxTentativi; $i++){
        $password = readline("Inserisci la password: ");

        if(validate($password) == true){
            echo "La password inserita è valida\n";
            break;
        } else {
            echo "La password inserita non è valida\n";
        }
        if($i == $maxTentativi){
            echo "Hai superato il numero massimo di tentativi.\n";
        }
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