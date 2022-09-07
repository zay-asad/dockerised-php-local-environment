<?php

namespace App;


class ListEntity
{
    private int $listId;

    private string $listName;

    private string $listPublishDate;

    public function getListId()
    {
        return $this->listId;
    }

    public function setListId($listId)
    {
        $this->listId = $listId;
        return $this;
    }

    public function getListName()
    {
        return $this->listName;

    }

    public function setListName($listName)
    {
        $this->listName = $listName;
        return $this;
    }

    public function getPublishDate()
    {
        return $this->listPublishDate;
    }

    public function setPublishDate($listPublishDate)
    {
        $this->listPublishDate = $listPublishDate;
        return $this;
    }
}