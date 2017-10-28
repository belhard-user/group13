<?php

namespace Core\DB;

use PDO;

class DBConnector
{
    protected $db;

    public function __construct($config)
    {
        $this->db = new PDO(
            "mysql:dbname={$config['dbname']};host={$config['host']}",
            $config['user'],
            $config['password'],
            $config['options']
        );
    }

    /**
     * @return PDO
     */
    public function getDb()
    {
        return $this->db;
    }
}