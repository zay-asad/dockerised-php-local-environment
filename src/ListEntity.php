<?php

namespace App;


class ListEntity
{
    private int $listId;

    private string $listName;

    private string $listPublishDate;

    public function getListId(): int
    {
        return $this->listId;
    }

    public function setListId($listId): ListEntity
    {
        $this->listId = $listId;
        return $this;
    }

    public function getListName(): string
    {
        return $this->listName;

    }

    public function setListName($listName): ListEntity
    {
        $this->listName = $listName;
        return $this;
    }

    public function getPublishDate(): string
    {
        return $this->listPublishDate;
    }

    public function setPublishDate($listPublishDate): ListEntity
    {
        $this->listPublishDate = $listPublishDate;
        return $this;
    }
}