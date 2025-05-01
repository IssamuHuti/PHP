<?php

    $arrayNumeros = [3, 5, 6, 1, 2];

    // $i = 0 informa o valor inicial do loop
    // $i < 10 informa a condição do loop
    // $i++ informa que a variável irá aumentar de 1 em 1

    $qtd_elementos_array = count($arrayNumeros);
    var_dump($qtd_elementos_array);

    for ($i = 0; $i < 10 ; $i++) {
        echo $i ;
    }

    for ($i = 0; $i < $qtd_elementos_array ; $i++) {
        echo $arrayNumeros[$i] ;
    }

?>

<?php

    $arr = [1,5,3,0];

    $qtd = count($arr);

    for ($i = 0; $i < $qtd -1; $i++) {
        for ($posicao = 0; $posicao < $qtd -$i -1; $posicao++) {

            $proximaPosicao = $posicao+1;
            if ($arr[$proximaPosicao] < $arr[$posicao]) {

                $auxiliar = $arr[$posicao];
                $arr[$posicao] = $arr[$proximaPosicao];
                $arr[$proximaPosicao] = $auxiliar;
            }

        }
    }

    print_r($arr)

?>

<?php

    $arr2 = [1,2,3,4,5,6,7,8,9,10];

    foreach ($arr2 as $indice => $value) {

        if ($valor == 5) {
            break;
        }

        if ($valor % 2 == 0) {
            continue;
        }

        echo "Valor do indice: ". $indice . " valor: ". $value . "\n";
    }

?>

<?php

    $seq = 0;
    $frutas = ['maca', 'laranja', 'pera', 'uva'];

    $qtd_fruta = count($frutas);

    while ($seq < $qtd_fruta) {
        echo $seq . " ";
        echo $frutas[$seq] . "\n";
        $seq++;
    }

?>
