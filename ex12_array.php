<?php

$nome = array('Luna', 'Rafael', 'Isabella', 'Yuri', 'Sofia', 'Miguel', 'Victor', 'Leo', 'Ana', 'Bruno');

$item_escolhido = 'Yuri';

$indice = array_search($item_escolhido, $nome);

if($indice !== false){
    echo "o $item_escolhido esta na lista";
    echo '<br>';
    echo " o $item_escolhido esta na posição: 3";
} else {
    echo "o $item_escolhido não esta na lista";
}

?>