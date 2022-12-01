<?php

function load(){

    $pages = filter_input(INPUT_GET,'pages',FILTER_SANITIZE_STRING);

    $pages = (!$pages) ? 'pages/home.php' : "pages/{$pages}.php";
     // =  se não existir ? chama p/h.php : caso exixtir p/{p}.php


     if (!file_exists($pages)) { // se não existir
        throw new \Exception("Algo de errado aconteceu");
     }

     return $pages;

}