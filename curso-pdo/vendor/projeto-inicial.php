<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'autoload.php';

$student = new Student(null, 'Vinicius Farias', new \DateTimeImmutable(1997-10-15));

echo $student-> age;



