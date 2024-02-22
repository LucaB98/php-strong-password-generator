<?php
function generate_password($length){
    // preparo una password
    $password = '';

    // elenco i possibili caratteri

    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!?*%$#@&(){}[]';

    $characters = $letters . strtoupper($letters) . $numbers . $symbols;

    // calcolo il totale dei caratteri
    $total_characters = mb_strlen($characters);

    //Estrai lettere a caso
    while(mb_strlen($password) < $length){
        //prendo un indice random
        $random_index = rand(0, $total_characters - 1);
        // prendo un carattere a caso
        $random_characters = $characters[$random_index];

        $password .= $random_characters;
    }
    session_start();
    $_SESSION['password'] = $password;
    // restituisco la password generata 
    return;
}