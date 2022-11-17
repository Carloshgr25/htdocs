<?php

function load(){

    $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING);

    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";
     // =  se não existir ? chama p/h.php : caso exixtir p/{p}.php


     if (!file_exists($page)) { // se não existir
        throw new \Exception("Algo de errado aconteceu");
     }

     return $page;

}