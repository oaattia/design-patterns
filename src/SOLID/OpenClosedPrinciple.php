<?php

namespace Oaattia\DesignPatterns\SOLID;

interface Shape
{
	public function area();
}

class Rectangle implements Shape
{

	protected $width;

	protected $height;

	public function __construct($width, $height)
	{
		$this->width  = $width;
		$this->height = $height;
	}

	public function area()
	{
		return $this->width * $this->height;
	}
}

class Circle implements Shape
{
	protected $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function area()
	{
		return $this->radius * M_PI;
	}
}

class Calculate
{
	protected $shape;

	public function __construct(Shape $shape)
	{
		$this->shape = $shape;
	}

	public function get()
	{
		return $this->shape->area();
	}
}

// In the client we pass the type we want to get
$circle = new Calculate(new Circle(2));
$rectangle = new Calculate(new Rectangle(10, 20));
var_dump($rectangle->get());