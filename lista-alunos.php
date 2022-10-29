<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infra\Persistence\ConnectionCreator;
use Alura\Pdo\Infra\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$repository = new PdoStudentRepository($pdo);
$studentList = $repository->allStudents();

// imprime na tela um array associativo
// echo $studentList[0]['name'];
var_dump($studentList);