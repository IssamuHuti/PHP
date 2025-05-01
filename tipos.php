<?php
    // além dos textos que podem ser armazenadas dentro das variáveis str, pode se informar o str no formato html abrindo assim um navegador informando os textos digitados em html
    // existe duas formas de imprimir na tela: print e echo
    // print permite mostrar somete uma string
    // echo permite mostrar diversos strings

    $texto = "<h1>Texto H1</h1>";
    $h4 = "<h4>Texto H4</H4>";
    $h5 = "<h5>Texto H5</H5>";

    echo $texto;
    echo $h4;
    echo $h5;

?>

<?php
    // INTEGER e LONG são considerados somente números inteiros positivos ou negativos
    // INTEGER informa números com tamanhos menores e LONG os números com tamanhos maiores

    $number = 10;

    var_dump($number);
    //var_dump informa o tipo da variável

?>

<?php
    // DATA são informada somente os dados que querem manualmente
    // date_default_timezone_set é utilizado para informar o fuso horário
    date_default_timezone_set('America/Sao_Paulo');

    // a função "date" informa a data e o horário atual
    $data = date("d/m/Y H:i:s");
    echo $data;

?>

<?php
    // ARRAY
    $cursos = array("PHP", "JAVA", "C++");

    // para imprimir informações dentro da lista, utiliza "print_r"
    print_r($cursos);
    print_r($cursos[1]);

    $endereco = [
        'cep' => '1235135',
        'numero' => '1351',
        'cidade' => 'Maringa',
        'estado' => 'parana'
    ];

    print_r($endereco['cidade']);

?>

<?php

    function soma() {
        $x = 10 + 40;
        return $x;
    }

    echo soma();

    $a = 50;

    function soma2() {
        global $a;
        $y = $a + 40;
        return $y;
    }

    echo soma2()

?>