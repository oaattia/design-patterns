<?php

namespace Oaattia\DesignPatterns\Adapter;


class Kindle implements EReaderInterface
{
    public function turnOn()
    {
        return "turn on kindle";
    }

    public function clickScreen()
    {
        return "click on kindle screen";
    }
}
