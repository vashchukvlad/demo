<?php

class Database
{
    public $connection;
    protected $statement;

    public function __construct()
    {
        $dsn = "sqlite:/home/vlad/projects/demo_php/demo_db";
        $this->connection = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrAbort()
    {
        $result = $this->find();

        if (! $result) {
            abort(Response::NOT_FOUND);
        }

        return $result;
    }

    public function fetchAll()
    {
        return $this->statement->fetchAll();
    }
}