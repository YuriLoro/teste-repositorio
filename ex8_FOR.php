<?php
//recebe a variavel soma
$soma = 0;
//utiliza o for para fazer o calculo
for ($i = 1; $i <= 100; $i++) {
    $soma_anterior = $soma;//Armazena o valor da ultima soma
    $soma += $i;//adiciona o valor atual do $i
    echo "A de $i + $soma_anterior = $soma <br>";//Exibe o calculo
}
//saida do resultado da soma de todos os numeros
echo "A soma de todos os números de 1 a 100 é: $soma";
?>