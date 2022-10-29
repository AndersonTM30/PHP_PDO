<?php

$pdo = new PDO('sqlsrv:Server=localhost,1433;Database=Teste', 'anderson', '1234');

echo "Conectado";

$pdo->exec("INSERT INTO phones(area_code, number, student_id) VALUES ('24', '988454666', 1)");
exit();

$createTableSql = '
    CREATE TABLE students 
        (
            id INT IDENTITY(1,1) PRIMARY KEY,
            name VARCHAR(200), 
            birth_date VARCHAR(200)
        );

    CREATE TABLE phones
        (
            id INT IDENTITY(1,1) PRIMARY KEY, 
            area_code VARCHAR(200), 
            number VARCHAR(14),
            student_id INT,
            FOREIGN KEY (student_id) REFERENCES students(id)
        );

';

$pdo->exec($createTableSql);