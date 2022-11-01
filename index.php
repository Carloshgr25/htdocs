<?php
    //Operadores de atribuição

// . ou .= concatena

// $name ='Carlos';

// echo 'carlos'. ' Carla';
// echo '----------';

// $name = $name . ' carlos';

// echo $name;
// echo '----------';

// $name ='carlos';
// $name .= 'Carla';
// echo $name;

// $number = 30;
// $number -= 10;
// echo $number;

// $number = 30;
// $number += 10;
// echo $number;


    // incremento /decremento


// $number = 10;

// echo ++$number; //pre incremento
// $number ++; // pos incremento
// echo $number;

// $number = 10;

// echo --$number, ', '; //pre decremento
// $number --; // pos decremento
// echo $number;


    //operadores de comparação


// != verifica se o valor e diferente
// !== verifica se o valor OU o tipo é diferente

// == verifica se o valor é igual
// === verifica se o valor é igual E o tipo é igual

// $result = 30 < 50; 
// var_dump($result);

// $result = 30 > 50; 
// var_dump($result);

// $result = 30 <= 50; 
// var_dump($result);

// $result = 30 >= 50; 
// var_dump($result);

// $result = 50 != 50; 
// var_dump($result);

// $result = 30 != 50; 
// var_dump($result);

// $result = '50' !== 50;
// var_dump($result);

// $result = 50 !== 50;
// var_dump($result);

// $result = 50 == 50;
// var_dump($result);

// $result = '50' == 50; // verifica se o valor é igual e não o tipo
// var_dump($result);

// $result = '50' === 50; // valor igual mais tipo diferente
// var_dump($result);

// $result = 50 === 50;
// var_dump($result);


    // Operadores logicos


// && (and) os dois dados precisam ser verdadeiros
// || (or) se um dos dois for verdadeiro
// ! (negação) se o valor for verdadeiro ele fica falso

// $canAcess = true;
// $isOlder = false;

// $result = $canAcess && $isOlder;

// var_dump($result);

// $canAcess = true;
// $isOlder = false;

// $result = $canAcess || $isOlder;

// var_dump($result);

// $canAcess = true;
// $isOlder = false;

// var_dump(!$canAcess);


    //valores boleanos truty e falsy, não são valores boleanos falsos mais se comportam como valores boleanos falsos.


    // falsy
// null... null
// 0...integer
//0.0...float
//"0"...string
//""... empty string
// array()...empty array

// truthy - 0 resto

// var_dump(!!null);
// var_dump(!!0);
// var_dump(!!0.0);
// var_dump(!!"0");
// var_dump(!!"");
// var_dump(!![]);


// if (0) { //sem o ! não mostra nada
//     echo'teste';
// }

// if (!0) { //negando o 0, fica true
//     echo'teste';
// }


    // if-else


// $isadmin = true;

// if($isadmin) { //se a condição for verdadeira
//     echo'isadmin';
// }

// $number1 = 70;
// $number2 = 50;
// $isAdmin = false;

// $result = $number1 > $number2 && $isAdmin;

// // if($result) { //se a condição for verdadeira
// //     echo'É verdadeiro';
// // }else {
// //     echo 'Não é verdadeiro';
// // }

// // if($result) { //if verifica se a condição/valor for verdadeira
// //     echo'É verdadeiro';
// //     return; //se a condição for verdadeira ele para aqui
// // }
// //     echo 'Não é verdadeiro';

// echo ($result) ? 'É verdadeiro' : 'Não é verdadeiro'; //outra forma de usar o IF/ELSE


    //Condicionais Switch


// $name= 'Carlos';

// switch ($name) { // verifica se os valores são iguais
//     case 'Carlos':
//         echo'é Carlos';
//         break;
//     case 'Pedro':
//         echo 'é Sandra';
//         break;
//     case 'Douglas':
//         echo 'é Douglas';
//         break;
    
//     default: // se o valor definido não for nenhum, mostra essa mensagem
//         echo 'Não é nenhum';
//         break;
// }


    // Tipos de dados - booleans


// $name = 'Carlos';
// $age = 18;
// $logged = true;

// if ($name == 'Carlos' && $age > 18 && $logged == true) {// todas as variaveis precisam ser verdadeiras
//     echo 'é verdadeiro';
// }else {
//     echo 'é falso';
// }


    //Tipos de dados - String


// $age = 38;
// $name1 = "aaaaabbbbbccccc {$age} eeeeefffffggggg $age ... "; // usar aspas duplas pois pode usar uma variavel dentro da string
// $name2 = 'fkk {$age} dff $age'; // com aspas simples não funciona a variavel

// echo $name1; 
// echo strlen($name1); //strlen, conta o numero de caracteres
// echo $name2; 
// echo strlen($name1);
// echo $name2; 
//31/10/22
// Teste pull 01/11/22

// echo substr($name1 , 0, 7 ); // mostra os caracteres do intervalo que definiu

// echo str_contains($name1, 'ggggg'); //verifica se existe o que esta entre aspas na variavel


    // Tipos de dados Number


// $number1 = 15;
// $number2 = '25';//reconhece que é numero
// $number3 = '12 anos';

// if (is_numeric($number1) && is_numeric($number2)) { // is_numeric verifica se o valor das variaveis são numericas
//     echo 'É numerico';
// }else {
//     echo 'Não é numerico';
// }

// echo ceil(15.12); // arredonda para cima
// echo floor(15.12); //arredonda para baixo


    //Arrays


// $data = ['Carlos', 'Maria', 'joão', 34];

// $data[4] = 'last'; //adiciona elemento na posição 4 no array

// $length = count ($data); //conta os elementos do array começa pelo numero 1

// $data [$length] = 'last1'; //adiciona um elemento no final do array
// array_push($data, 'teste'); //tambem adiciona o elemento no final do array

// array_unshift($data, 'first'); //adiciona o elemento no inicio do array
// var_dump($data[1]); //pegar valor especifico dentro do array

// var_dump($data);


// $person = ['name' => 'Carlos', 'age' => '29']; //criação de array com indece especifico

// var_dump($person['name']); //não consegue pesquisar por indice 0,1,2...


                //>>>>>REVISAR ARRAY<<<<<<<
// $person = [
//             'name' => 'Carlos', 'age' => 29, 
//             'documents' => [
//                 'cpf' => '12345678912', 'rg' => '1234569',
//                 'cnh'=> ['123456', '456789'] // array dentro do array
//             ]
//         ];

// var_dump($person['documents']['cnh']); //mostrando o array cnh


    //Mudando tipos de dados


// $name = 'Carlos';

// $change = (boolean) $name; // inserindo o boolean antes da variavel, troca o valor da variavel

// var_dump($change);


// $number = 34;

// $change = (string) $number;//transforma valor em string

// var_dump($change);


// $names = ['Carlos', 'Carla', 'Douglas'];

// $change = (object) $names; //transforma o array em um objeto standarclas, padrão do php

// var_dump($change);


// $person = ['name' => 'Carlos', 'age' => 18];

// $change = (object) $person;

// var_dump($change -> age); // tras o indice desejado "age"


    //Loopings FOR
