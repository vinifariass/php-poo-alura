<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\DBAL\Logging\DebugStack;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
// pilha de quais querys foram executados
// a cada sql executado o entitymanager vai passar para o debug stack

$debugStack= new DebugStack();
$entityManager->getConfiguration()->setSQLLogger($debugStack);

$classeAluno = Aluno::class;
$dql= "SELECT aluno, telefones, cursos FROM $classeAluno aluno JOIN aluno.telefones telefones JOIN aluno.cursos cursos ";

/** @var var Aluno[] $alunos */

$query = $entityManager->createQuery($dql);
$alunos = $query->getResult();

foreach ($alunos as $aluno) {
    $telefones = $aluno->getTelefones()->map(/**
     * @param \Alura\Doctrine\Entity\Telefone $
     */ function (\Alura\Doctrine\Entity\Telefone $telefone){
         return $telefone->getNumero();
    })
    ->toArray();
    echo "ID: {$aluno->getId()}\n";
    echo "Nome: {$aluno->getNome()}\n";
    echo "Telefones: " . implode(", ", $telefones). "\n"
    ;
    $cursos = $aluno->getCursos();
    foreach ($cursos as $curso){
        echo "\tID Curso: {$curso->getId()}\n";
        echo "\tCurso: {$curso->getNome()}\n";
        echo "\n";

    }
    echo "\n";

}
    echo "\n";
foreach($debugStack->queries as $queryInfo){
    echo $queryInfo['sql'] . "\n";

}