<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infra\Persistence\ConnectionCreator;
use Alura\Pdo\Infra\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();

$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

try {
    $student = new Student(
        1,
        'Nico Steppart',
        new DateTimeImmutable('1985-10-12')
    );
    
    $studentRepository->save($student);
    
    $aStudent = new Student(
        2,
        'Doctor Ray',
        new DateTimeImmutable('1985-11-11')
    );
    
    $studentRepository->save($aStudent);
    
    $connection->commit();
} catch (\RuntimeException $e) {
    echo $e->getMessage();
    $connection->rollBack();
}
