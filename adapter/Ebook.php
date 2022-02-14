<?php

namespace DesignPatterns\Adapter;

interface Ebook
{
    public function turnOn(): void;
    public function click(): void;
    public function returnPage(): int;
}
