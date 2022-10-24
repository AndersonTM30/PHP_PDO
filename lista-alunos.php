<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = new PDO('sqlsrv:Server=localhost,1433;Database=Teste', 'anderson', '1234');

// Query para consultar os alunos
$statement = $pdo->query('SELECT * FROM students;');
// Mostra um dado específico
var_dump($statement->fetchColumn(1)); exit();
// Retorna a lista de alunos
$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
    );
}
// imprime na tela um array associativo
// echo $studentList[0]['name'];
var_dump($studentList);