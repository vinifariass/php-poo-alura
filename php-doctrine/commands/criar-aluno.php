<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once  __DIR__ . '/../vendor/autoload.php';

$aluno = new Aluno();

$aluno-> setNome('Vinicius Farias');

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$entityManager->persist($aluno);
$aluno-> setNome('Vinicius Farias');


// efetiva qualquer manipulação no banco

$entityManager->flush();