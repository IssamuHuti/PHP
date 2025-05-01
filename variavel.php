<?php
    $diariaSegunda = 100;
    $gorjetaSegunda = 30;

    $valorSegunda = $diariaSegunda + $gorjetaSegunda;

    echo "Salario Segunda : $valorSegunda\n";
    
    $diariaTerca = 100;
    $gorjetaTerca = 30;

    $valorTerca = $diariaTerca + $gorjetaTerca;

    echo "Salario Terca : $valorTerca";

?>

<?php

    echo "Pós-incremento";
    $a = 5;
    echo "Deve ser 5: " . $a++ . "/n";
    echo "Deve ser 6: " . $a . "/n";

    echo "Pré-incremento";
    $b = 5;
    echo "Deve ser 6: " . ++$b . "/n";
    echo "Deve ser 6: " . $b . "/n";

    echo "Pós-incremento";
    $c = 5;
    echo "Deve ser 5: " . $c-- . "/n";
    echo "Deve ser 4: " . $c . "/n";

    echo "Pré-incremento";
    $d = 5;
    echo "Deve ser 4: " . --$d . "/n";
    echo "Deve ser 6: " . $d . "/n";

    echo "Pré-incremento";
    $e = null;
    echo "Deve ser : " . $e++ . "/n";
    echo "Deve ser : " . $e . "/n";

?>
