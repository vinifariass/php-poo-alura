<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Titular('João da Silva', new CPF('123.456.789-10'),10000);

$autenticador->tentaLogin($umDiretor,'4321');