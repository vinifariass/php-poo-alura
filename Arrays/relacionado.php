<?php 

$correntistas = ["Giovani", "João","Maria", "Luis", "Luisa", "Rafael"];


$saldos = [2500,3000,4400,1000,8700,9000];

$array_associated = ["Giovani"=> 2500,"João"=> 3000,"Maria"=>4400,];

$arraysrelacionados= array_combine($correntistas, $saldos);

$arraysrelacionados["Matheus"] = 4500;


if(array_key_exists("João",$arraysrelacionados)) 
  {
   echo "O saldo do João é: {$arraysrelacionados["João"]}";
  } else {
    echo "Não foi encontrado";
  }
