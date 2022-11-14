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


// $names = ['Carlos ', 'Pedro ', 'Douglas '];

// for ($i=0; $i < count($names); $i++) {  // i=0; se a condição for verdadeira; i++ pos incrementa
//     echo $names [$i];
// }

// $number = 100;

// for ($i=0; $i < $number; $i++) { // i=0; se i < $number; i ++
//     echo "$i ";
// }


    //Loopings While


// $names = ['Carlos ', 'Pedro ', 'Douglas '];    

// $i = 0;
// while ($i < count($names)) { // enquanto for verdadeiro executa
//     echo $names[$i];
//     $i++;
// }


    //Loopings Do while


// $i = 0;
// $y = 100;
// do {    //faça enquanto
//     Echo "$i ";
//     $i++;
// } while ($i <= $y);


    //Foreach...para cada


// $names = ['Carlos ', 'Pedro ', 'Douglas '];    

// foreach ($names as $key => $name) { 
//     echo $key . "=> " . $name; //para cada nome dentro do array, sera guardado em uma key e uma variável
// }


    //Loopings continue e break


// $names = ['Carlos ', 'Pedro ', 'Douglas '];

// for ($i=0; $i < count($names) ; $i++) { 
//     // if ($i == 1) { //pula o indice 1 e continua
//     //     continue; 
//     // }
//     if($i == 2){ //para no indice 2
//         break;
//     }
//     echo $names[$i];
// }

// foreach ($names as $key => $name) {
//     if($key == 1){
//         break;
//     }
//     echo $name;
// }


    //Funções


// function connection() //function para criar a função, nome que faça sentido
// {
//     $pdo = new PDO('mysql:host=localhost;dbname=books', 'root', ''); //criação de conexão banco de dados
//     return $pdo;
// }    

// function getData($table) //pegar dados de uma tabela no banco de dados
// {
//     $connection = connection();
//     $query = $connection->query("select * from {$table}");
//     $query->execute();
//     return $query->fetchAll();
// }
// var_dump(getData('users'));// aqui passa a tabela onde deseja fazer o select


    //Closures


// $person = function (){ //$person(variavel) que recebe a função anonima function(), e vira um objeto do tipo closures
//     return 'teste';
// }; // precisa fechar pois é do tipo closures    

// var_dump($person());

// $person = function ($name){ 
//     return $name;
// };    

// var_dump($person('Carlos'));

// function teste()
// {
//     $person = function (){ //dentro da função teste foi criado uma closures
//         return 'teste';
//     };
//     return $person;
// }

// // var_dump(teste()); //não retorna nada pois tem somente a closures dentro da função
// var_dump(teste()()); //retorna algo pois esta pegando o return $person; com a segunda ()


// function teste($name)
// {
//     $person = function () use($name){ //use: para passar o valor para a closures
//         return $name;
//     };
//     return $person;
// }

// var_dump(teste('Carlos')());


    //Callback  

// Função passada como parametros para outras funções


// function teste()
// {
//     return 'teste10';
// }

// function teste2($callback)
// {
//     return $callback(); //abrir e fechar parenteses logo depois de um nome de uma função, executa a função
// }

// echo teste2('teste'); //o 'teste' é a function teste(), para chamar precisa sem como string


// function teste($name)
// {
//     return 'Olá, meu nome é ' . $name;
// }

// function teste2($callback)
// {
//     return $callback('Carlos'); 
// }

// echo teste2('teste');


    // Verificar se é Callback com is_callable


// function teste($name)
// {
//     return 'Olá, meu nome é ' . $name;
// }

// function teste2($callback) //alguns casos pode verificar se é um callback
// {
//     if (is_callable($callback)) { //verifica se é realmente uma função
//         return $callback('Carlos');
//     }else {
//         echo 'Não é um callback';
//     }  
// }
// $user = 'João';
// // echo teste2('teste'); // é um callback
// echo teste2($user); // não é um callback


    // call_user_func espera um callback como parametro, utilizamos quando queremos passar a função e os parametros que ela exige


// function teste($name)
// {
//     return 'Ola, meu nome é ' . $name;
// }  

// echo call_user_func('teste', 'Carlos'); //funciona pois esta pegando a função teste e o parametro para a funcão teste que é $name
//echo call_user_func('teste'); // não funciona pois o call_user esta esperando um paramento, e não uma variavel $name


    //


// class User
// {
//     public function teste()
//     {
//         return 'teste';
//     }
// }   

// $user = new User;//estanciou o User

// echo call_user_func([$user, 'teste']);// array, 1 valor é o objeto, 2 valor metodo que quer executar


// class User
// {
//     public function teste($name)
//     {
//         return 'Olá, meu nome é ' . $name;
//     }
// }   

// $user = new User;//estanciou o User

// echo call_user_func([$user, 'teste'], 'Carlos');// 'Carlos' é o parametroe esperado pelo callback


// class User
// {
//     public static function teste($name, $age)
//     {
//         return 'Olá, meu nome é ' . $name . ' e minha idade é '. $age;
//     }
// }   

// //$user = new User;// se for metodo estatico pode ou não instanciar

// echo call_user_func(['User', 'teste'], 'Carlos', 29);


    //call_user_func dentro de outras funções


// function teste($name)
// {
//     return 'teste ' . $name;
// }    

// function teste2($callback)
// {
//     return call_user_func($callback, 'Carlos');
// }

// echo teste2('teste');


    //--invoke


// class User
// {
//     public function __invoke()
//     {
//         return 'teste01';
//     }
// }

// $user = new User;

// function teste($callback)
// {
//     return $callback();
// }

// echo teste($user);


    //call_user_func_array


// function teste($name, $age)
// {
//     return 'Nome: ' . $name . ' Idade: '. $age;
// }    

// echo call_user_func_array('teste', ['Carlos', 38]);


    //Closures com o callback


// $user = function($name)
// {
//     return 'teste ' . $name;
// };

// function teste($callback)
// {
//     return call_user_func($callback, 'Carlos');
// }

// echo teste($user);


    //verificando se uma variável existe - isset(variavel)


// $name = 'Carlos'; 

// if(isset($name)){ 
//     echo 'variavel existe';
// }else{
//     echo 'vaiavel não existe';
// }

// $person = ['name' => 'Carlos', 'age' => '29'];

// echo isset($person['name']);


    //Variáveis super globais


// $_COOKIE valor guardado no navegador que posso resgatar em qualquer lugar do sistema, tem data de validade, posoo inserir uma data de validade, pode guardar varios tipos de dados, pode excluir manualmente
// $_SESSION é guardado no navegador mas não é guardado o valor da sessão, guarda id, depois que chama a sessão pelo id resgata o valor
// $_ENV aula especifica
// $_FILES pegar arquivo enviado por um formulário
// $_GET "seusite.com.br?id=20&name=alexandre" consegue pegar estas /variaveis id e name da url
// $_POST  pega os valores enviados do header
// $_REQUEST pega os valores do GET ou POST
// $_SERVER aula especifica


    //$_COOKIE


// setcookie('name', 'Carlos ', time() + 2 * 24 * 60 * 60);//criar cookie
// setcookie('curso', 'PHP ', strtotime('+3days'));
// //setcookie('idade', '29', strtotime('+4days'));

// setcookie('idade', '29', strtotime('-4days')); //excluir cookie


    //$_SESSION


//session_start(); //starta uma session

// session_regenerate_id(); //altera o id 
// echo session_id(); //ID da sessão, é guardado no navegador

//require './teste.php'; //iniciar a sessão

//$_SESSION['name'] = ' Carlos2 ';//cria uma session
//$_SESSION['person'] = ['name' => 'Carlos', 'age' => '29'];


    //Variáveis de ambiente

//Instalar o composer
//clonar arquivos pelo composer de um diretório composer require vlucas/phpdotenv
//criar require para autoload 
//copiar codigo para carregar .env   

// require '../vendor/autoload.php';
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// var_dump($_ENV['DATABASE']); //tem que instalar o composer para utilizar o .env


// require '../vendor/autoload.php';
// $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
// $dotenv->load();

// var_dump($_SERVER);

// var_dump($_ENV['DATABASE']);

// require '../vendor/autoload.php';
// $dotenv = Dotenv\Dotenv::createImmutable('../'); //está pegando o .env que esta fora da pasta public
// $dotenv->load();


// var_dump($_ENV['DATABASE2']);


    //GET e POST


// GET pega as variaveis da url
//POST pega os valores do header da requisição 

var_dump($_GET);