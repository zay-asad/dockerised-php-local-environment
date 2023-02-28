<?php

use App\ProductRepository;
use PHPUnit\Framework\TestCase;

class MockProductsTest extends TestCase
{
    //rather than querying the db for products, we can make our own set of data using Mocks
     public function testMockProductsAreReturned()
     {
        //create mocks for my class
        $mockRepo = $this->createMock(ProductRepository::class);

        //fake data
        $mockProductsArray = [
            ['id' => 1, 'name' => 'Samsung S9'],
            ['id' => 2, 'name' => 'Apple iPhone 14'],
        ];

        $mockRepo->method('fetchProducts')->willReturn($mockProductsArray);

        //now the method will
        //return the fake $mockProductsArray instead of the actual list of products from the db
        $products = $mockRepo->fetchProducts();

        // //array of products returned
        // dd($products);

        $this->assertEquals('Samsung S9', $products[0]['name']);

     }
}
