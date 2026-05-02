<?php

$idade = 18;
$idade2 = 18;
$idade3 = 18;


$result = $idade >= 18 && $idade <= 60;
// podemos usar o and ou && - Só vai ser verdadeiro se as duas condições forem verdadeiras. 

$result2 = $idade2 >= 18 ||  $idade2 <= 60;
// || ou or - Só vai ser verdadeiro quando uma das condições for verdadeira

$result3 = !$idade3 >= 18; // idade não é maior ou igual a 18
// ! inversor/not - Usado para inverter a condição 

var_dump($result);
var_dump($result2);
var_dump($result3);

// No php existe a ordem de precedência
// Quando uso && é como se o php fizesse isso: (1 == 1 &*& 2 == 3); 

$idade4 = 18;
$idade5 = 18;
$idade6 = 18;

$result4 = (1 == 1 && 2 == 3); // php faz a conta primeiro antes de jogar no =
$result5 = 1 == 1 and 2 == 3; // php faz 1 == 1 primeiro e joga dentro de  - Se eu quiser que funcione como o &&, vou ter que deixar entre (), caso crontrário vou atribuir

$result6 = 1 == 2 xor 2==2;
// O xor vai ter o mesmo comportamento que o and - Quando um ou mais deles forem verdadeiros, mas não , o mesmo comportamento para falsos. Ou exclusivo

var_dump($result4);
var_dump($result5);
var_dump($result6);



