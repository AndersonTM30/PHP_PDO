<?php
// inicia o autoload

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = Alura\Pdo\Infra\Persistence\ConnectionCreator::createConnection();

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$preparedStatement->bindValue(1, 3, PDO::PARAM_INT);
var_dump($preparedStatement->execute());