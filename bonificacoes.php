<?php
require_once 'autoload.php';

use Alura\Banco\Service\ControladordeBonificacoes;
use Alura\Banco\Modelo\{ CPF};
use Alura\Banco\Modelo\Funcionario\{EditorVideo, Funcionario, Gerente, Desenvolvedor};

$umFuncionario = new Desenvolvedor('Vinicius Farias', new CPF('123.456.789-10'), 1000);

$umFuncionario ->sobeDeNivel();

$umaFuncionaria = new Gerente('Patricia Farias', new CPF('987.456.123-10'), 3000);

$umEditor = new EditorVideo('Paulo', new CPF('456.789.132-11'), 1500);

$umDiretor = new \Alura\Banco\Modelo\Funcionario\Diretor('Ana', new CPF('123-951-789-11'), 5000);
$controlador = new ControladordeBonificacoes();
$controlador -> adicionaBonificacaoDe($umFuncionario);
$controlador -> adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador-> RecuperaTotal();