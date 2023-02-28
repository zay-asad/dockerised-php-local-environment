<?php

namespace App;

use PDO;

//testing doubles with PHPUnit
//useful when you want to test certain parts of the system responsible for querying a list of products from a database.
//rather than reading/writing stuff from db we can use "fake/mock data" to test our code

class ProductRepository
{
    protected $pdo;

    protected function getPdo(): PDO
    {
        //some functionality
    }

    /**
     * Fetch an array of products from the database
     * 
     * @return array
     */
    public function fetchProducts(): array
    {
        return $this->getPdo()->prepare('SELECT * FROM example_products')->fetchAll(\PDO::FETCH_ASSOC);
        
    }
}