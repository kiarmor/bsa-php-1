<?php

declare(strict_types=1);

namespace App\Task2;

class BooksGenerator
{
    public function generate(Book $book)/*: \Generator*/
    {
        //@todo
        return $book->getTitle();
    }

}