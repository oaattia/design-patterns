<?php

namespace Oaattia\DesignPatterns\Decorator;


class Art extends Hobbies
{
    /**
     * Add hobby to human
     */
    public function get()
    {
        return $this->human->type() . " Loves Art";
    }
}