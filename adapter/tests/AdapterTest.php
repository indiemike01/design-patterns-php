<?php

declare(strict_types=1);

namespace DesignPatterns\Adapter\Tests;

use DesignPatterns\Adapter\EBookAdapter;
use DesignPatterns\Adapter\Kindle;
use DesignPatterns\Adapter\PaperBook;
use PHPUnit\Framework\TestCase;



class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }
}
