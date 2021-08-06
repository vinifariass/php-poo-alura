<?php


use Alura\Banco\Modelo\Endereco;

require_once  'autoload.php';

$umEndereco = new Endereco('Petropolis','bairro Qualquer','minha rua', 'numero 40');

$outroEndereco = new Endereco('Rio','Centro','uma rua ali', 50);


echo  $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;