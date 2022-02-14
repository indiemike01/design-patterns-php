<?php

namespace DesignPatterns\Adapter;

class PaperBook implements Book
{
    private static $pageNumber = 0;

    public function open(): void
    {
        echo "The book was open";
    }

    public function turnPage(): void
    {
        self::$pageNumber++;
    }
    public function getPage(): int
    {
        return self::$pageNumber;
    }
}
