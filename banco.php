<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;



$endereco = new Endereco('Petropólis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Farias', $endereco);
$primeiraConta = new Conta($vinicius);

$primeiraConta->deposita(500);
$primeiraConta -> saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta-> recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta -> recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('123.456.789-70'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('a', 'b', 'c', 'd');
$outra = new Conta(new Titular(new CPF('123'), 'Abcdefg',$outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();