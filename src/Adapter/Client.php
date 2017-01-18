<?php

namespace Oaattia\DesignPatterns\Adapter;


class Client
{
    /**
     * @var ReaderInterface
     */
    private $reader;

    /**
     * Client constructor.
     *
     * @param ReaderInterface $reader
     */
    public function __construct(ReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    public function run()
    {
        return $this->reader->open() . ' ' . $this->reader->turnPage();
    }
}