<?php
// inicia o autoload

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

// Cria uma nova conexão
$pdo = Alura\Pdo\Infra\Persistence\ConnectionCreator::createConnection();
// instancia um novo objeto de estudante para passar os valores
$student = new Student(5, "Alisson Sandes", new \DateTimeImmutable('1995-06-03'));

// query de inserção no banco de dados
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));
if ($statement->execute()) {
    echo "Aluno incluído";
}

// verifica se inseriu no banco de dados
// var_dump($pdo->exec($sqlInsert));