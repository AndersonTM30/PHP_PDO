<?php
// inicia o autoload

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

// Cria uma nova conexão (não é recomendado fazer desta forma, feito apenas para fins de estudo)
$pdo = new PDO('sqlsrv:Server=localhost,1433;Database=Teste', 'anderson', '1234');

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$preparedStatement->bindValue(1, 3, PDO::PARAM_INT);
var_dump($preparedStatement->execute());