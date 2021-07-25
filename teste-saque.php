<?php


use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};


require_once  'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.879-10'),'Vinicius Dias',
            new Endereco('Petrópolis','teste', 'rua lá', '37')

    ),
     2
);

$conta->transfere();
$conta->deposita(500);
$conta-> saca(100);

echo $conta-> recuperaSaldo();