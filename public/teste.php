<?php

//echo $_COOKIE['name'], $_COOKIE['curso'], $_COOKIE['idade'];
// print_r($_COOKIE);

// $cookie = $_COOKIE['name'];

// if (isset($cookie)) {
    
//     echo $cookie;
// }else{
//     echo 'Cookie não existe';
// }

//session_start();

// echo $_SESSION['name'];

// $session = $_SESSION['name'];

// if (isset($session)) {
//     echo 'Sessão existe' . $session;
// }else{
//     echo 'Sessão não existe';
// }


$session = $_SESSION['name'];
$session2 = $_SESSION['person'];

unset($session);// exclui uma session
// session_destroy(); //exclui todas as sessões 

echo (isset($session)) ? 'Sessão existe' . $session : 'Sessão não existe '; //outra forma de fazer if else

echo (isset($session2)) ? var_dump($session2) : 'Sessão não existe ';


