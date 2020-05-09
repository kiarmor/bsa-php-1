<?php

declare(strict_types=1);

namespace App\Task2;
require_once ('Book.php');

class BooksGenerator
{
    public $minPagesNumber;
    public $libraryBooks;
    public $maxPrice;
    public $storeBooks;
    public $filtered = [];

    /**
     * BooksGenerator constructor.
     * @param $minPagesNumber
     * @param $libraryBooks
     * @param $maxPrice
     * @param $storeBooks
     */
    public function __construct(int $minPagesNumber, array $libraryBooks, int $maxPrice, array $storeBooks)
    {
        $this->minPagesNumber = $minPagesNumber;
        $this->libraryBooks = $libraryBooks;
        $this->maxPrice = $maxPrice;
        $this->storeBooks = $storeBooks;
        $this->filtrate($this->minPagesNumber,  $this->libraryBooks, $this->maxPrice, $this->storeBooks);
    }

    public function generate(): \Generator
    {
        //@todo
        foreach ($this->filtered as $book) {

            yield $book;
        }
    }

    public function filtrate($minPagesNumber, $libraryBooks,  $maxPrice,  $storeBooks)
    {
        foreach ($libraryBooks as $libraryBook){
            if ($libraryBook->getPagesNumber() >= $minPagesNumber){
               $this->filtered[] = $libraryBook;
            }
        }
        foreach ($storeBooks as $storeBook) {
            if ($storeBook->getPrice() <= $maxPrice) {
                $this->filtered[] = $storeBook;
            }
        }

        return $this->filtered;
    }
}