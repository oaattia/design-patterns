<?php

namespace Oaattia\DesignPatterns\Tests\Decorator;

use Oaattia\DesignPatterns\Decorator\Art;
use Oaattia\DesignPatterns\Decorator\Boy;


class ClientDecoratorTest extends \PHPUnit_Framework_TestCase
{

    public function test_if_decorator_work()
    {
        $boy = new Art(new Boy());
        $this->assertEquals('Boy Loves Art', $boy->get());
    }
}