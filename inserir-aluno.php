<?php
// inicia o autoload

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

// Cria uma nova conexão (não é recomendado fazer desta forma, feito apenas para fins de estudo)
$pdo = new PDO('sqlsrv:Server=localhost,1433;Database=Teste', 'anderson', '1234');
// instancia um novo objeto de estudante para passar os valores
$student = new Student('Anderson Ferreira', new \DateTimeImmutable('1992-06-03'));

// query de inserção no banco de dados
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

// verifica se inseriu no banco de dados
var_dump($pdo->exec($sqlInsert));