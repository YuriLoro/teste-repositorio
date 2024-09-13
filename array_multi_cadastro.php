<?php

$cadastro = [];

$cadastro ['Nome'] = ['João', 'José', 'Yuri', 'Isabella', 'Maria'];
$cadastro ['E-mail'] = ['joão123@gmail.com', 'josé123@gmail.com','yuri123@gmail.com','isabella123@gmail.com','maria123@gmail.com'];

echo '<pre>';
print_r ($cadastro);
echo '</pre>';

echo $cadastro ['Nome'] [2];
echo '<br>';
echo $cadastro ['E-mail'] [3];

echo '<br>';

$cadastro ['Nome'] [2];
$cadastro ['E-mail'] [0] = 'aluno123@gmail.com';

echo '<pre>';
echo '<hr>';
print_r ($cadastro);
echo '</pre>';

?>