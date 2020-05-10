<?php

declare(strict_types=1);

namespace App\Task2;
require_once ('BooksGenerator.php');

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
/*
$book1 = new Book('Don Quixote', 100, 100);
$book2 = new Book('The Great Gatsby', 50, 50);
$book3 = new Book('Harry Potter', 20, 20);

$b4 = new Book('Hamlet', 150, 30);
$b5 = new Book('Crime and Punishment', 600, 50);
$b6 = new Book('Pride and Prejudice', 40, 60);



$libraryBooks = [$book1, $book2, $book3];
$libraryBooksPage = 50;
$storeBooks = [$b4, $b5, $b6];
$storeBooksPrice = 60;
$gen = new BooksGenerator($libraryBooksPage, $libraryBooks, $storeBooksPrice, $storeBooks);

$s[] = $gen->generate($gen->filtered);

var_dump($s);*/
