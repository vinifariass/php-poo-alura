<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();
$student = new Student(null, "Vinicius Farias", new \DateTimeImmutable('2000-05-24'));

$name = $students->name();
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo ->prepare($sqlInsert);
$statement->bindParam(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

$name = 'Novo nome';

$statement->execute();

var_dump($pdo->exec($sqlInsert));

echo $sqlInsert;