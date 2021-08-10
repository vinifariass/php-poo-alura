<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once  __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();


$aluno = new Aluno();

$aluno-> setNome('Vinicius Farias');
$aluno->setNome($argv[1]);

for($i=2; $i < $argc; $i++){
    $numeroTelefone = $argv[$i];
    $telefone = new Telefone();
    $telefone->setNumero($numeroTelefone
);
    $entityManager->persist($telefone);
    $aluno->addTelefone($telefone);
}


$entityManager->persist($aluno);


// efetiva qualquer manipulação no banco

$entityManager->flush();