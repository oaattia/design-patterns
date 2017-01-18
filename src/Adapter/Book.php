<?php

namespace Oaattia\DesignPatterns\Adapter;


class Book implements ReaderInterface
{
    public function turnPage()
    {
        return "turn book page";
    }

    public function open()
    {
        return "open book page";
    }
}
