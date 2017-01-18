<?php

namespace Oaattia\DesignPatterns\Adapter;

interface EReaderInterface
{
    /**
     * @return mixed
     */
    public function turnOn();

    /**
     * @return mixed
     */
    public function clickScreen();
}

