<?php

//Criando array lista_coisas
$lista_coisas = [];

//Criando uma Array frutas, dentro da Array lista_coisas
$lista_coisas ['frutas'] = ['Banana', 'Maçã', 'Morango', 'Uva'];

//Criando uma Array pessoas, dentro da Array lista_coisas
$lista_coisas ['pessoas'] = ['João', 'José', 'Maria'];

echo '<pre>';

$lista_coisas ['frutas'][2] = 'Abacaxi';

$lista_coisas ['pessoas'][1] = 'Carlos';

echo "O terceiro valor da array FRUTAS agora é: ";
echo $lista_coisas['frutas'][2];

echo '<br>';

print_r ($lista_coisas);
echo '</pre>';
echo '<hr>';

echo "O segundo valor da array PESSOAS agora é: ";
echo $lista_coisas['pessoas'][1];

?>