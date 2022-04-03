<?php

$notasBimestre1 = [
  'Maria' => 10,
  'Vinicius' => 6,
  'Ana' => 9
];
$notasBimestre2 = [
  'Joao' => 8,
  'Ana' =>10,
  'Roberto' =>6,
  'Maria' => 9
];

$alunosFaltantes = var_dump(array_diff($notasBimestre1, $notasBimestre2));
$nomesAlunos = var_dump(array_keys($alunosFaltantes));
$notasAlunos = var_dump(array_values($alunosFaltantes));
array_combine($notasAlunos,$nomesAlunos);
function ordenaNotas(array $nota1, array $nota2)
{
  return  $nota1['nota'] <=> $nota2['nota'];
}
// asort // tira as chaves quando vai ordenar
// arsort // ordena e as chaves sao mantidas
// ksort ordena utilizando as chaves
// var_dump($notasBimestre1);

if (is_array($notasBimestre1)) {
  echo "É uma array";
}

// verifica se o array é numerico e nao pula nenhuma chave (array_key_exists)

var_dump(array_key_exists('Vinicius', $notasBimestre1)); // verifica se existe e é diferente de nulo

echo 'Alguem tirou 10' . PHP_EOL;
var_dump(in_array(10, $notasBimestre1, true));

// converter string para numero 
echo "Quem tirou 10" . PHP_EOL;
echo array_search(10,$notasBimestre1);

