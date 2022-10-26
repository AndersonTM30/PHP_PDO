<?php

namespace Alura\Pdo\Infra\Persistence;

use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        return new PDO('sqlsrv:Server=localhost,1433;Database=Teste', 'anderson', '1234');
        
    }
}