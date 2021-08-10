<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once  __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$id = $argv[1];
$novoNome = $argv[2];

$aluno = $entityManager->find(Aluno::class, $id);

// quando tem uma entidade sua e o doctrine anexa essa entidade ao doctrine
// $entityManager->persist($aluno);

// vai no banco de dados e ve os dados necessarios
$entityManager->flush();