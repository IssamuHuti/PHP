<!-- $a and $b == "e" -->
<!-- $a && $b == "e" -->
<!-- $a or $b == "ou" -->
<!-- $a || $b == "ou" -->
<!-- !$a == "não" -->
<!-- $a xor $b == "xor" se ambos os variáveis forem verdadeiros, retorna falso-->

<?php

    $bool = true && false; // false
    var_dump($bool);

    $bool2 = true and false; // true
    var_dump($bool2);

    // utilizando operadores que possam ter mesma atribuição, sempre optar por colocar o operador lógico dentro de parenteses

    var_dump(7 == 7 && 9 < 7);
    var_dump(7 == 7 || 9 < 7);
    var_dump(7 == '7' || 9 < 7);
    // no php, sinal de "==" indica somente se o valor são iguais, no caso seria igual
    var_dump(7 === '7' || 9 < 7);
    // o sinal "===" compara se dois atributos são exatamente iguais, tanto o tipo como o valor
    var_dump(7 === '7' xor 9 < 7);
    var_dump(7 === '7' xor 9 > 7);

?>

<?php

$idade = 10;

if ($idade < 18){
    echo "Maior de idade";

    if ($idade > 60){
        echo "Idoso";
    }
} else if (($idade > 40) and ($idade < 60)) {
    echo "Meia idade";
} else {
    echo "Menor de idade";
}

?>

<?php
// switch case

    $sorteio = rand(0,5);
    echo "Valor sorteado: " . $sorteio;

    switch ($sorteio) {
        case 0:
            echo "=> Você ganhou 2 pontos";
            break;
        case 1:
            echo "=> Você ganhou 1 pontos";
            break;
        case 2:
            echo "=> Você ganhou um bônus! parabéns ganhou 3 pontos";
            break;
        default: // executado caso nenhuma dos cases for executado
            echo "Jogue novamente!";
            break;
    }

?>