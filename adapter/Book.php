<?php

namespace DesignPatterns\Adapter;

interface Book
{
    public function open(): void;
    public function turnPage(): void;
    public function getPage(): int;
}
