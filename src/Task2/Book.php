<?php

declare(strict_types=1);

namespace App\Task2;
require_once ('BooksGenerator.php');
use Exception;

class Book
{
    public $title;
    public $price;
    public $pagesNumber;


    public function __construct(string $title, int $price, int $pagesNumber)
    {
        $this->title = $title;
        if ($price <= 0){throw new Exception('price cant be negative');}
        $this->price = $price;
        if ($pagesNumber <= 0){throw new Exception('pagesNumber cant be negative');}
        $this->pagesNumber = $pagesNumber;
    }

    public function getTitle(): string
    {
        // @todo
        return $this->title;
    }

    public function getPrice(): int
    {
        // @todo
        return $this->price;
    }

    public function getPagesNumber(): int
    {
        //@todo
        return $this->pagesNumber;
    }
}
