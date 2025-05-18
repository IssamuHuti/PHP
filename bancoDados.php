<?php

declare(strict_types=1);

$pdo = null;

try { // tente executar
    $pdo = new PDO('mysql:host=mysql;bname=example', 'root', '12345'); // se essa linha gerar excessão ativa o 'catch'
    // a linha acima cria um novo objeto possui a conexão ao BD, informando o endereço do BD
    //bname = nome do BD; root = usuário; 12345 = senha
} catch (Exception $e) { 
    echo $e->getMessage(); // exibe a mensagem da excessão
    die(); // mata a conexão
}

return $pdo;
