<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once  'autoload.php';

$contaCorrente = new ContaCorrente(new Titular(new CPF('123-56-789-10'), 'Vinicius Farias', new Endereco('Cidade','bairro','rua','numero')));

$contaCorrente-> deposita(-100) ;

try{
    $contaCorrente->deposita(-100);

}catch (InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo, seu hacker perigoso";
}