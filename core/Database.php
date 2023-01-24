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
}
