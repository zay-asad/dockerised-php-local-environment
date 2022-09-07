<?php

use App\ListEntity;

class ListEntityTest extends \PHPUnit\Framework\TestCase
{

    public $list;


    protected function setUp(): void
    {
        $this->list = new ListEntity();
    }

    public function testSetId()
    {
        $listId = 20;
        $this->list->setListId($listId);
        self::assertSame($listId, $this->list->getListId());
    }

    public function testSetListName()
    {
        $listName = 'a new fancy list';
        $this->list->setListName($listName);
        self::assertSame($listName, $this->list->getListName());
    }

    public function testSetPublishName()
    {
        $listPublishDate = '02-02-2022';
        $this->list->setPublishDate($listPublishDate);
        self::assertSame($listPublishDate, $this->list->getPublishDate());
    }
}