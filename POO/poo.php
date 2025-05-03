<?php

declare(strict_types=1); // faz a checagem dos tipos quando rodar os códigos, e se tiver problemas como conflitos de tipos o programa avisa sobre o erro

// o instanciamento da classe e a criação de uma classe geralmente são feitas em  arquivos separadas
class ContaBancaria
{
    //public - private -protect
    // atributos, não é bom informar o valor dos atributos no atributo da classe, geralmente é informado puxando os dados de um banco de dados ou informados com um input

    // por causa de uma convenção, para cada propriedade da classe ficou definido de informar a tipagem 

    /** 
     * @var string
    */ 
    private $banco;

    /** 
     * @var string
    */ 

    private $nomeTitular;
    
    /** 
     * @var string
    */ 
    private $numeroAgencia;
    
    /** 
     * @var string
    */ 
    private $numeroConta;
    
    /** 
     * @var float
    */ 
    private $saldo;
    // private proibe de acessar propriedades especificos ou fazer a alteração do mesmo

    public function __construct(  // executado na chamada de uma instancia da classe, e recebe os valores atribuidos para os atributos
        string $banco, // informar a tipagem de cada dado informado
        string $nomeTitular, 
        string $numeroAgencia, 
        string $numeroConta, 
        float $saldo
    ) {
        $this->banco = $banco; // atribui a propriedade da classe o valor informado
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
        echo 'teste';
    }

    // criação de função
    public function obterSaldo(): string // informar o tipo que a função irá retornar
    {
        return 'Seu saldo atual é ' . $this->saldo; // como a propriedade está privda, para acessar somente uma propriedade específica informar $this que está pegando o dado informado na propriedade que quer obter a informação
    }

    public function depositar($valor): string
    {
        $this->saldo += $valor;
        return 'Deposito de ' . $valor . ' realizado';
    }
    
    public function sacar($valor): float
    {
        $this->saldo -= $valor;
        return 'Saque de ' . $valor . ' realizado';
    }
}

// $conta = new ContaBancaria(); // a classe está sendo instanciada // o metodo construtor será executado
$conta1 = new ContaBancaria(
    'Banco do Brasil',
    'Lucas Issamu',
    '8764',
    '684630-4',
    0
);
$conta2 = new ContaBancaria(
    'Bradesco',
    'Lucas Yamahuti',
    '1234',
    '46865-4',
    1000
);
// exit(); // não permite executar nada abaixo dela

// var_dump($conta -> nomeTitular); // 'nomeTitular' está sendo puxada o valor informado na variável $nomeTitular
// var_dump($conta -> numeroAgencia);
// var_dump($conta -> saldo);

// $conta -> numeroAgencia = '5968';
// $conta -> saldo = 0;

// var_dump($conta -> numeroAgencia);
// var_dump($conta -> saldo);

// para chamar um método

echo PHP_EOL;

echo $conta -> obterSaldo();

echo PHP_EOL;

$conta->depositar(300);
echo $conta -> obterSaldo();

echo PHP_EOL;

$conta->sacar(100);
echo $conta -> obterSaldo();
