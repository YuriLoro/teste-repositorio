<?php
//loop dos valores de 1 a 50
for ($i = 1; $i <= 50; $i++) {
    $raizQuadrada = sqrt($i);//calcula a riz quadrada do numero atual
    //Exibe o valor da raiz quadrada com no máximo duas casas decimais
    echo "A raiz quadrada de $i é " . number_format($raizQuadrada, 1) . "<br>";
}
?>