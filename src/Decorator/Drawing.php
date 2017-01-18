<?php

namespace Oaattia\DesignPatterns\Decorator;


class Drawing extends Hobbies
{

    /**
     * Add hobby to human
     */
    public function get()
    {
        return $this->human->type() . " Loves Drawing";
    }
}