<?php 

//! dichiaro una variabile
//! $nomevariabile = valore;

//! ho dichiarato una variabile con nome $username e l'ho inizializzata con la stringa Katia
$username = 'Katia';

//! una variabile deve iniziare con il $
//! caratteri alfanunmerici o _
/* $user!name //! sbagliata
$username1 //* corretta
$username_ //* corretta
$_username //*corretta
$1username //! sbagliato
$_1username //* corretto
$user name //! sbagliata
$username 
$Username; */

//! costante
const USERNAME = 'Katia';

//! sto riassegnando un nuovo valore alla variabile $username
$username = 'Mario';
$username = 32; 

//! predefiniti i tipi di dato che il linguaggio implementa in maniera nativa
//! integer
//! float
//! string
//! boolean
$age = 23; //! integer
$temperature = 36.2; //! float
$is_online = true; //! boolean
$name = 'Katia'; //! string

$single = 'Ciao sono $name'; //! qui viene stampato $name
echo $single . "\n"; //! Ciao sono $name
$double = "Ciao sono $name"; //! qui viene stampato il contenuto della variabile $name
echo $double . "\n"; //! Ciao sono Katia 

$stringa = 'Mi sveglio all\'alba'; //! carattere di escape
$stringa = "Mi sveglio all'alba";

$single = 'Ciao mi chiamo ';
echo $single . $name;  //! operatore di concatenazione . (punto)

//! operatore di escape speciale new line "\n"

$x = 5;
$y = "10";
echo $x + $y; //! type coercion


?>