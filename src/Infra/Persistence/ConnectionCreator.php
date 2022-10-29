<?php

namespace Alura\Pdo\Infra\Persistence;

use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        $connection =  new PDO('sqlsrv:Server=localhost,1433;Database=Teste', 'anderson', '1234');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//verifica se tem erro na conexão
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
        
    }
}