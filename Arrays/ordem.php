<?php

$notas = [
  ['aluno' => 'Maria', 'nota' => 10],
  ['aluno' => 'Vinicius', 'notas' => 6],
  ['aluno' => 'Ana', 'nota' => 9]
];

function ordenaNotas(array $nota1, array $nota2)
{
  return  $nota1['nota'] <=> $nota2['nota'];
}

usort($notas, 'ordenaNotas');
var_dump($notas);
