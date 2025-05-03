<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria; // está retirando as informações do arquivo 'ContaBancaria

$conta = new ContaBancaria();
$conta->setBanco('Banco do Brasil');
// var_dump($conta->exibirDadosConta()); so vai funcionar se excluir os setBanco e getBanco
var_dump($conta->getBanco());
