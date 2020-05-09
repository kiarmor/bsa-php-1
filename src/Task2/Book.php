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
        $this->price = $price;
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

$book1 = new Book('War', 50, 500);
$book2 = new Book('P', 400, 400);
$book3 = new Book('NWA', 600, 600);

$libraryBooks = [$book1, $book2, $book3];
$storeBooks = [$book1, $book2, $book3];
$gen = new BooksGenerator();
$s = $gen->generate($book1);
var_dump($s);
/*foreach ($libraryBooks as $b){
    $g = $gen->generate($b);

}
var_dump($g);*/