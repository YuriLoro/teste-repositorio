<?php

$cadastro = [];

$cadastro ['usuario'] = ['João', 'Maria', 'Pedro'];

$cadastro ['senha'] = ['1234', 'abcd', '5678'];

echo '<pre>';

$cadastro ['usuario'][1] = 'Ana';

$cadastro ['senha'][1] = 'efgh';

echo "O terceiro valor da array USUARIO agora é: ";
echo $cadastro['usuario'][1];

echo '<hr>';

print_r ($cadastro);
echo '</pre>';

echo "O segundo valor da array SENHA agora é: ";
echo $cadastro['senha'][1];

?>

