<?php

namespace DesignPatterns\Adapter;

class Kindle implements Ebook
{
    private static int $pageNumber;

    public function turnOn(): void
    {
        echo "The Kindle has been turned on...";
    }
    public function click(): void
    {
        self::$pageNumber++;
    }
    public function returnPage(): int
    {
        return self::$pageNumber;
    }
}
