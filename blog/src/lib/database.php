<?php

namespace Application\Lib\Database;

class DatabaseConnection
{
    public ?\PDO $database = null;

    public function getConnection(): \PDO
    {
        if ($this->database === null) {
            $this->database = new \PDO('mysql:host=localhost;dbname=u230474653_tracabilty;charset=utf8', 'u230474653_parker', 'Parker92700%');
        }

        return $this->database;
    }
}
