<?php

echo date('d/m/Y') . PHP_EOL;

$data = new DateTime();
echo $data->format('d-m-y H:i:s') . PHP_EOL;

$intervalo = new DateIntervalo('P5Y10M5DT10H50M10S'); // P = periodo(ano, mes e dia); T = tempo(horas, minutos, segundos)
// está subtraindo 5 anos, 10 meses, 5 dias, 10 horas, 50 minutos e 10 segundos
$data->add($intervalo);

var_dump($data);
