<?php

namespace App\Lib;

class DatabaseConnection
{
    public ?\PDO $database = null;

    public function getConnection(): \PDO
    {
        if ($this->database === null) {
            $this->database = new \PDO('mysql:host=localhost;dbname=blog_p5;charset=utf8', 'root', 'root');
        }
        //var_dump($this->database); die();
        return $this->database;
    }
}