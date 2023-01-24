<?php

namespace app\core;

use PDO;

class Database
{
    private $pdo = null;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=' . DB_HOST . ';port=3306;' . DB_USER, DB_PASSWORD);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getData()
    {
        $statement = $this->pdo->prepare('SELECT * FROM products');
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createData()
    {
        $statement = $this->pdo->prepare("INSERT INTO products (sku, name, price, type, size, height, width, length, weight)
                                    VALUES (:sku, :name, :price, :type, :size, :height, :width, :length, :weight )");

        //code for bind values
        $statement->execute();
    }

    public function deleteData()
    {
        $statement = $this->pdo->prepare('DELETE FROM products WHERE id = :id');
        // code for bind values
        return $statement->execute();
    }
}
