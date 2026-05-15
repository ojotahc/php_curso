<?php
// O array é uma variável que agrupa outras variáveis, ou seja, é um conjunto de valores

$users = ['Joao', 10.5, false]; // declarando um array com valores onde os índices são númericos - jeito antigo array();
$users[] = 'Claudia'; // Acrescentando item sem dizer a posição, dessa forma o item vai para o final do array
$users[] = 'Joana';
//$users[0] = 'Manoel';  Modificando um item do array

$users[6] = 'Manoel'; // Acrescentando item na posição 6 especificando o índice

var_dump($users);
var_dump($users[0]);

// com o php posso misturar tipo diferentes

// posso utilizar índices no formato de string

$list = ['fruit' => 'maçã', 'food' => 'biscoito', 'cleaning' => 'sabão'];
$list['carro'] = 'Palio';

var_dump($list); // Quando utilizo o array dessa forma, estou trabalhando com um array associativo

$users2 = [
    'admin' => ['Joao', 'Maria'],
    'normal' => ['Paulo']
];

var_dump($users2);
var_dump($users2['admin']);
var_dump($users2['normal']);
var_dump($users2['admin'][0]);


$dimensions = [[100, 150], [200, 250], [400, 500]];
var_dump($dimensions[1][1]);

?>

