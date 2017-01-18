<?php

namespace Oaattia\DesignPatterns\Tests\Adapter;

use Oaattia\DesignPatterns\Adapter\Book;
use Oaattia\DesignPatterns\Adapter\Client;
use Oaattia\DesignPatterns\Adapter\Kindle;
use Oaattia\DesignPatterns\Adapter\ReaderAdapter;

class ClientTest extends \PHPUnit_Framework_TestCase
{

    public function test_using_book_at_implement_to_reader_interface()
    {
        $reader = new Client(new Book());
        $this->assertEquals('open book page turn book page', $reader->run());
    }

    public function test_if_we_have_kindle_should_implement_reader_interface()
    {
        $reader = new Client(new ReaderAdapter(new Kindle()));
        $this->assertEquals('turn on kindle click on kindle screen', $reader->run());
    }
}