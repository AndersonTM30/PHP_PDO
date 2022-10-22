<?php

$pdo = new PDO('sqlsrv:Server=localhost,1433;Database=Teste', 'anderson', '1234');

echo "Conectado";

$pdo->exec('CREATE TABLE students (id INT IDENTITY(1,1) PRIMARY KEY, name VARCHAR(200), birth_date VARCHAR(200));');