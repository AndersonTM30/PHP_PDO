<?php

require_once 'vendor/autoload.php';

$pdo = new PDO('sqlsrv:Server=localhost,1433;Database=Teste', 'anderson', '1234');

// Query para consultar os alunos
$statement = $pdo->query('SELECT * FROM students;');
// Retorna a lista de alunos
$studentList = $statement->fetchAll();
// imprime na tela um array associativo
echo $studentList[0]['name'];