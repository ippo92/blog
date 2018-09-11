<?php
namespace App\src\DAO;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO(DB_HOST, DB_USER , DB_PASS, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
        return $db;
    }
}