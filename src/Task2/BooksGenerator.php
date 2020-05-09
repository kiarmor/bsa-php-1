<?php

declare(strict_types=1);

namespace App\Task2;
require_once ('Book.php');

class BooksGenerator
{

    public function generate(Book $book): \Generator
    {
        //@todo

        yield $book->getTitle();
    }
}