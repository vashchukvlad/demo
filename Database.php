<?php

class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "sqlite:/home/vlad/projects/demo_php/demo_db";
        $this->connection = new PDO($dsn);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}