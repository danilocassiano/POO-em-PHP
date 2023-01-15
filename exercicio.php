<?php

class venda
{

    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;

    public function __construct($data, $produto, $quantidade, $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function obterVendas()
    {
        return 'Data: ' . $this->data . PHP_EOL . 'Produto: ' . $this->produto . PHP_EOL . 'Quantidade: ' . $this->quantidade . PHP_EOL . 'Valor Total: ' . $this->valorTotal . PHP_EOL . PHP_EOL;
    }
}

$pedido1 = new venda(
    '04/10/1988', //data
    'Coca-Cola', //produto
    '10', //quantidade
    100.00 //valorTotal
);

$pedido2 = new venda(
    '05/11/1990', //data
    'Fanta-Uva', //produto
    '20', //quantidade
    200.00 //valorTotal
);

var_dump($pedido1);
PHP_EOL;
var_dump($pedido2);
PHP_EOL;
echo $pedido1->obterVendas();
PHP_EOL;
echo $pedido2->obterVendas();
