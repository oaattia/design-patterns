<?php

namespace Oaattia\DesignPatterns\Adapter;

class ReaderAdapter implements ReaderInterface
{
    /**
     * @var ReaderInterface
     */
    private $reader;


    /**
     * EReaderAdapter constructor.
     *
     * @param EReaderInterface $reader
     */
    public function __construct(EReaderInterface $reader)
    {
        $this->reader = $reader;
    }


    public function open()
    {
        return $this->reader->turnOn();
    }

    public function turnPage()
    {
        return $this->reader->clickScreen();
    }
}