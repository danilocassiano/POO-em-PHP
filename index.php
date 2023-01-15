<?php

class contaBancaria
{
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;

    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo()
    {
        return 'Seu saldo atual é: R$' . $this->saldo;
    }

    public function depositar($valor)
    {

        $this->saldo += $valor;
        return 'Deposito de R$' . $valor . ' Realizado!';
    }

    public function sacar($valor)
    {

        $this->saldo -= $valor;
        return 'Saque de R$' . $valor . ' Realizado!';
    }
}

$conta = new contaBancaria(
    'Banco C6', //Banco
    'Danilo Cassiano', //Nome Titular
    '2544', // Numero Agencia
    '123456-0', //Numero Conta
    0 // Slado
);

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->depositar(300.00);

echo PHP_EOL;

echo $conta->obterSaldo();

echo PHP_EOL;

echo $conta->sacar(150, 00);
echo PHP_EOL;

echo $conta->obterSaldo();

echo PHP_EOL;
echo PHP_EOL;

var_dump($conta);
