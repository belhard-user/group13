<?php

namespace Core\DB;


class QueryBuilder
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function insert($tableName, $data)
    {
        // INSERT INTO users (name, email) VALUES (?, ?)
        $dataKeys = array_keys($data);
        $placeholder = trim(str_repeat('?,', count($dataKeys)), ',');
        $sql = sprintf(
            'INSERT INTO %s(%s) VALUES(%s)',
            $tableName,
            implode(',', $dataKeys),
            $placeholder
        );

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute(array_values($data));
    }
}