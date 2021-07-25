<?php
require_once 'autoload.php';

use Alura\Banco\Service\ControladordeBonificacoes;
use Alura\Banco\Modelo\{Funcionario, CPF};

$umFuncionario = new Funcionario('Vinicius Farias', new CPF('123.456.789-10'), 'Desenvolvedor', 1000);

$umaFuncionaria = new Funcionario('Patricia Farias', new CPF('987.456.123-10'), 'Gerente', 3000);

$controlador = new ControladordeBonificacoes();
$controlador -> adicionaBonificacaoDe($umFuncionario);
$controlador -> adicionaBonificacaoDe($umaFuncionaria);

echo $controlador-> RecuperaTotal();