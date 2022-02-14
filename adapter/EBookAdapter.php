<?php

namespace DesignPatterns\Adapter;

class EBookAdapter implements Book
{
    protected Ebook $ebook;
    public function __construct(Ebook $ebook)
    {
        //Do something
    }

    public function open(): void
    {
        $this->ebook->turnOn();
    }
    public function turnPage(): void
    {
        $this->ebook->click();
    }
    public function getPage(): int
    {
        return $this->ebook->returnPage();
    }
}
