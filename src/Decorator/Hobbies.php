<?php

namespace Oaattia\DesignPatterns\Decorator;


abstract class Hobbies
{
    /**
     * @var Human
     */
    protected $human;

    /**
     * Art constructor.
     *
     * @param Human $human
     */
    public function __construct(Human $human)
    {
        $this->human = $human;
    }

    abstract public function get();
}