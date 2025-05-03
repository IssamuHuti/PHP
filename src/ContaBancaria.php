<?php
// lafraga93

declare(strict_types=1); //quando o arquivo for considerada por PHP

namespace App;

class ContaBancaria
{
    // encapsulamento serve para deixar as informações utilizadas para ser visualizada e acessada somente por dentro da classe
    // se não tiver a chamada de classe, não poderá acessar a informação
    // tipos de encapsulamento: public, private, protected
    private string $banco;
    public string $nomeTitular = "Lucas";
    public string $numeroAgencia = "1234";
    public string $numeroConta = "68463-22";
    public float $saldo = 0;

    public function exibirDadosConta(): array
    {
        return [
            'banco' => $this -> banco,
            'nomeTitular' => $this -> nomeTitular,
            'numeroAgencia' => $this -> numeroAgencia,
            'numeroConta' => $this -> numeroConta,
            'saldo' => $this -> saldo
        ];
    }

    public function setBanco(string $banco) // set serve para atribuir valor de um atributo dentro da classe, mas não retorna nada
    {
        $this->banco = $banco;
    }

    public function getBanco() // returno string
    {
        return $this->banco;
    }
}

?>
