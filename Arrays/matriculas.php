<?php

$alunos2021 = [
 0=>'Maria',
 1=>'Vinicius',
 2=>'Joao',
 3=>'Ana',
 4=>'teste'

];

$novosAlunos = [
  5=>'Paricia', 
  6=>'Nico',
 7 => 'Kilderson',
  8=>  'Daiane'
];

$alunos2022 = [...$alunos2021, ...$novosAlunos]; // desempacota o array e traz eles juntos, a diferença com o array merge é que nesse pode botar entre os arrays
var_dump($alunos2022);