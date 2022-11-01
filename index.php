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


$age = 38;
$name1 = "ajs {$age} jhk $age ... "; // usar aspas duplas pois pode usar uma variavel dentro da string
// $name2 = 'fkk {$age} dff $age'; // com aspas simples não funciona a variavel

echo $name1; 
echo strlen($name1); //strlen, conta o numero de caracteres
// echo $name2; 
// echo strlen($name1);
// echo $name2; 
//31/10/22
// Teste pull 01/11/22
