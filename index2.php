<?php

require __DIR__ . '/vendor/autoload.php'; // está solicitando para puxar as informações contidas na dependencia informado no composer.json

$mpdf = new \Mpdf\Mpdf(); // instanciando a classe mpdf
$mpdf->WriteHTML('<h1>Hello world!</h1>'); // informa o texto para criação de um arquivo pdf
$mpdf->Output(); // gera o arquivo pdf

?>
