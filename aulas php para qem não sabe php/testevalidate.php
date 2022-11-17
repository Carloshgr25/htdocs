<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);//remove alguns caracteres do email
            // filter_input para fazer o filtro de um form/input   

    if (filter_var($email,FILTER_VALIDATE_EMAIL)) { //verifica se o email é válido
        // filter_var para fazer o filtro de uma variavel
        echo 'Email válido';
    }else{
        echo 'Email não é valido';
    }


    var_dump($name,$email);

}