<?php

class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "sqlite:/home/vlad/projects/demo_php/demo_db";
        $this->connection = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}